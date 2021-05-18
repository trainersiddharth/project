<?php

class Dashboard extends CI_controller{

	public function index(){

		$user=$this->session->userdata('user');
		$this->load->model('Dashboard_Model');

		$centres=$this->Dashboard_Model->countCentre();
		$trainer=$this->Dashboard_Model->countTrainer();
		$batches=$this->Dashboard_Model->countBatch();
		$students=$this->Dashboard_Model->countStudent();

		$data=array();
		$data['user']=$user;

		$data['dashboard_centres']=$centres;
		$data['dashboard_trainers']=$trainer;
		$data['dashboard_batch']=$batches;
		$data['dashboard_student']=$students;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/main',$data);
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}

	public function instituteLeaderboard(){

		$user=$this->session->userdata('user');
		
		$data=array();
		$data['user']=$user;
		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/leaderboard');
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}


	public function instituteStatistics(){

		$user=$this->session->userdata('user');
		$this->load->model('Dashboard_Model');
		$x=$this->Dashboard_Model->instituteBatchCount();


		$data=array();
		$data['user']=$user;
		$data['tbl_students']=$x;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/statistics',$data);
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}

	public function skillsbuildPerformance(){

		$user=$this->session->userdata('user');
		$this->load->model('Dashboard_Model');
		$x=$this->Dashboard_Model->skillsbuildCountCentreWise();
		$y=$this->Dashboard_Model->skillsbuildCountStudentWise();

		$data=array();
		$data['user']=$user;
		$data['centre_wise']=$x;
		$data['student_wise']=$y;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/skillsbuild',$data);
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url('Login/index'));
	}

	//ajax functions 

    public function loadCentre(){
		$this->load->model('Dashboard_Model');

		$output="<option value=''>SELECT</option>";
		$arr=$this->Dashboard_Model->getCentres();
		foreach($arr as $centre){
			$output.="<option value='".$centre['institute']."'>".$centre['institute']."</option>";
		}
		

		echo json_encode($output);
	}
}

?>