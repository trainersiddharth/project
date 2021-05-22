
<?php

class Admin_Controller extends CI_controller{

	
	
		public function index(){

		$this->load->model('Admin_Model');
		$user=$this->session->userdata('user');

		$centres=$this->Admin_Model->countCentre();
		$trainer=$this->Admin_Model->countTrainer();
		$batches=$this->Admin_Model->countBatch();
		$students=$this->Admin_Model->countStudent();

		$data=array();
		$data['user']=$user;
		$data['dashboard_centres']=$centres;
		$data['dashboard_trainers']=$trainer;
		$data['dashboard_batch']=$batches;
		$data['dashboard_student']=$students;

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

		$this->session->set_flashdata('success','Centes Uploaded Successfully');
		redirect(base_url('Admin_Controller/addStudent'));	
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
		$mail->AddAddress("siddharth@edunetfoundation.org");
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

}


?>