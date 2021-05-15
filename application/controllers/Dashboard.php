<?php

class Dashboard extends CI_controller{

	public function index(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/main');
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

		$data=array();
		$data['user']=$user;
		$data['centre_wise']=$x;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/skillsbuild',$data);
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}

	


	function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url('Login/index'));
	}
}

?>