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

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/statistics');
			$this->load->view('dashboard/footer');

		}else{
			echo "No Data is available...<br/>";
		}

	}

	public function skillsbuildPerformance(){

		$user=$this->session->userdata('user');

		$data=array();
		$data['user']=$user;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/skillsbuild');
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