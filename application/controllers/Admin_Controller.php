
<?php

class Admin_Controller extends CI_controller{

	
	
		public function index(){

		$this->load->model('Admin_Model');
		$user=$this->session->userdata('user');

		$centres=$this->Admin_Model->countCentre();
		$trainer=$this->Admin_Model->countTrainer();
		$batches=$this->Admin_Model->countBatch();
		$students=$this->Admin_Model->countStudent();

		$postData = $this->input->post();

		if(!empty($postData)){			
			$map1=$this->Admin_Model->batch_filter_centre($postData["batch_id"]);	
		}else{
			$map1=$this->Admin_Model->batch_filter_centre(3);
		}

		$data=array();
		$data['user']=$user;
		$data['dashboard_centres']=$centres;
		$data['dashboard_trainers']=$trainer;
		$data['dashboard_batch']=$batches;
		$data['dashboard_student']=$students;
		$data['map1_dashboard']=$map1;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/main',$data);
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}

	public function addCentre(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add-centre');
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}


	public function updateMarks(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/update-marks');
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}



	public function addStudent(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add-student');
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}


	public function addBatch(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add-batch');
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}	

	//importing nsti centres

	public function importCentre(){

		$this->load->model('Admin_Model');
		$this->load->library('csvimport');

		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data[] = array(
				'name'	=>	$row["Centre Name"],
        		'poc_name' =>	$row["POC"],
        		'trainer_name' =>	$row["Trainer"],
        		'email' => $row["Email"]
			);
		}
		$this->Admin_Model->insertCentre($data);

		$this->session->set_flashdata('success','Centes Uploaded Successfully');
		redirect(base_url('Admin_Controller/addCentre'));	
	}


		public function importBatch(){

		$this->load->model('Admin_Model');
		$this->load->library('csvimport');

		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data[] = array(
				'batch'	=>	$row["Batch"],
        		'centre_id'=>	$row["Centre ID"]
			);
		}
		$this->Admin_Model->insertBatch($data);

		$this->session->set_flashdata('success','Batches Uploaded Successfully');
		redirect(base_url('Admin_Controller/addBatch'));	
	}


	public function importStudent(){

		$this->load->model('Admin_Model');
		$this->load->library('csvimport');

		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data[] = array(
				'student_name'	=>	$row["name"],
        		'email' =>	$row["email"],
				'no_of_courses' =>	$row["no_of_courses"],
				'duration_of_courses' =>	$row["duration_of_courses"],
        		'centre_code' =>	$row["centre"],
        		'batch_code' => $row["batch"]
			);
		}
		$this->Admin_Model->insertStudent($data);

		$this->session->set_flashdata('success','Student Uploaded Successfully');
		redirect(base_url('Admin_Controller/addStudent'));	
	}


		public function importMarks(){

		$this->load->model('Admin_Model');
		$this->load->library('csvimport');

		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data = array(
        		'm1t' =>	$row["M1T"],
        		'm1p' =>	$row["M1P"],
        		'm2t' =>	$row["M2T"],
        		'm2p' =>	$row["M2P"],
        		'm3t' =>	$row["M3T"],
        		'm3p' =>	$row["M3P"],
        		'm4t' =>	$row["M4T"],
        		'm4p' =>	$row["M4P"],
        		'm5t' =>	$row["M5T"],
        		'm5p' =>	$row["M5P"],        		        
         		'em1t' =>	$row["EM1T"],
        		'em1p' =>	$row["EM1P"],
        		'em2t' =>	$row["EM2T"],
        		'em2p' =>	$row["EM2P"],
        		'es' =>	$row["ES"]       				        	
			);

			$this->Admin_Model->updateMarks($row["Email"],$data);
		}
		

		$this->session->set_flashdata('success','Marks Updated Successfully');
		redirect(base_url('Admin_Controller/updateMarks'));	
	}


	public function testmail(){

		$this->load->library('phpmailer_lib');
		$mail=$this->phpmailer_lib->load();

		$mail->IsSMTP();
		$mail->Host = "smtp.gmail.com";

		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Port = 587;
		$mail->Username = "webmaster@fice.in";
		$mail->Password = "fice@bangalore";

		$mail->From = "webmaster@fice.in";
		$mail->FromName = "Testing CI";
		$mail->AddAddress("mahendra@edunetfoundation.org");
		//$mail->AddReplyTo("mail@mail.com");

		$mail->IsHTML(true);

		$mail->Subject = "Test message CI";
		$mail->Body = "Test Mail<b>in bold!</b>";
		//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

		if(!$mail->Send())
		{
		echo "Message could not be sent. <p>";
		echo "Mailer Error: " . $mail->ErrorInfo;
		exit;
		}
	}


	public function testmailci(){

		$config =array(
			'mailpath'=>'/usr/sbin/sendmail',
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port'=>465,
			'smtp_user'=>'webmaster@fice.in',
			'smtp_pass'=>'fice@bangalore',
			'smtp_crypto'=>'tls',
			'charset' => 'iso-8859-1',
			'mailtype' => 'html',
			'wordwrap' => TRUE
		);

		$this->load->library('email',$config);
		//$this->email->initialize();
		$this->email->set_newline("\r\n");

		$this->email->from('webmaster@fice.in', 'Edunet Foundation');
		$this->email->to('siddharth@edunetfoundation.org');
		$this->email->subject('Sample CI Testing ');
		$this->email->message('Sample Testing from CI Server');

		if(!$this->email->send()){
			echo 'Email Not Sent Successfully';
			show_error($this->email->print_debugger());
		}
	}

	public function downloadData(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/download-student');
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	}

	// download code csv

	public function exportData() {
		$this->load->model('Admin_Model');
		// Load database and query
		$this->load->database();
		$b=$this->input->post('batch');
		$query = $this->Admin_Model->batch_filter_student($b);
		// Load database utility class
		$this->load->dbutil();
		// Create CSV output
		$data = $this->dbutil->csv_from_result($query);
	
		// Load download helper
		$this->load->helper('download');
		// Stream download
		force_download('students_batch_'.$b.'.csv', $data);

		redirect(base_url('Admin_Controller/downloadData'));
	}


	public function edx() {
		$this->load->model('Admin_Model');
		// Load database and query
		$this->load->database();
		$b=$this->input->post('batch');

		//echo $b;
		
		$query = $this->Admin_Model->batch_filter_student($b);
		// Load database utility class

		
		$this->load->dbutil();

		print_r($query);

		$delimiter = ",";
		$newline = "\r\n";
		$enclosure = '"';
		
		// Create CSV output
		$data = $this->dbutil->csv_from_result($query,$delimiter, $newline, $enclosure);
		
		//echo $data;

		
		// Load download helper
		$this->load->helper('download');
		// Stream download
		
		 //header("Content-Description: File Transfer"); 
     	//header("Content-Disposition: attachment; filename=students_batch.csv");
     //header("Content-Type: application/csv;");

     force_download('students_batch.csv', $data,false);

		redirect(base_url('Admin_Controller/downloadData'));
		
		
	}


}


?>