
<?php

class Admin_Controller extends CI_controller{


	public function sample(){

	}
		
		public function index(){

		$this->load->model('Admin_Model');
		$user=$this->session->userdata('user');

		$centres=$this->Admin_Model->countCentre();
		$trainer=$this->Admin_Model->countTrainer();
		$batches=$this->Admin_Model->countBatch();

		$data=array();
		$data['user']=$user;
		$data['dashboard_centres']=$centres;
		$data['dashboard_trainers']=$trainer;
		$data['dashboard_batch']=$batches;

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

}


?>