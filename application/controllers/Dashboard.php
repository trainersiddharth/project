<?php

class Dashboard extends CI_controller{

	public function index(){

		$user=$this->session->userdata('user');
		$this->load->model('Dashboard_Model');

		$centres=$this->Dashboard_Model->countCentre();
		$trainer=$this->Dashboard_Model->countTrainer();
		$batches=$this->Dashboard_Model->countBatch();
		$students=$this->Dashboard_Model->countStudent();

		$map1=$this->Dashboard_Model->batch_filter_centre(1);
		$map2=$this->Dashboard_Model->batch_filter_centre(2);
		$map3=$this->Dashboard_Model->batch_filter_centre(3);

		$data=array();
		$data['user']=$user;

		$data['dashboard_centres']=$centres;
		$data['dashboard_trainers']=$trainer;
		$data['dashboard_batch']=$batches;
		$data['dashboard_student']=$students;

		$data['dashboard_map1']=$map1;
		$data['dashboard_map2']=$map2;
		$data['dashboard_map3']=$map3;

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
		$this->load->model('Dashboard_Model');
		$x=$this->Dashboard_Model->leadershipboardData();


		$data=array();
		$data['user']=$user;
		$data['tbl_students']=$x;

		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			$this->load->view('dashboard/leaderboard',$data);
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
			$output.="<option value='".$centre['id']."'>".$centre['institute']."</option>";
		}
		echo $output;
	}


	//ajax functions 

    public function loadBatch(){
		$this->load->model('Dashboard_Model');

		$output="<option value=''>SELECT</option>";
		$arr=$this->Dashboard_Model->getBatches();
		foreach($arr as $centre){
			$output.="<option value='".$centre['id']."'>".$centre['batch']."</option>";
		}
		echo $output;
	}	


	public function getDataFilter_centre(){

		$this->load->model('Dashboard_Model');
		$postData = $this->input->post();

		if($postData["batch_id"]!=0 && $postData["centre_id"] !=0){
			$arr=$this->Dashboard_Model->batch_and_centre_filter_centre($postData["batch_id"],$postData["centre_id"]);

		}else if($postData["batch_id"]!=0){
			$arr=$this->Dashboard_Model->batch_filter_centre($postData["batch_id"]);

		}else if($postData["centre_id"]!=0){
			$arr=$this->Dashboard_Model->centre_filter_centre($postData["centre_id"]);
		}

		$output="";
		$output.="<thead><tr><th>S.No</th><th>NSTI Name</th><th>Students</th><th>Course Completion</th><th>Learning Hours</th></tr></thead><tbody>";
		$count=1;
		if(!empty($arr)){
		foreach($arr as $d){
			$output.="<tr><td>". $count."</td>";
			$output.="<td>". $d['centre']."</td>";
			$output.="<td>". $d['students']."</td>";
			$output.="<td>". $d['courses']."</td>";
			$output.="<td>". $d['duration']."</td></tr>";
			$count++;
		}
		$output.="</tbody>";
	}else{
		$output.= "<tr><td colspan='5' align='center'><strong>No Data Available</strong></td></tr>";
	}
		
		echo $output;
	}


	public function getDataFilter_student(){

		$this->load->model('Dashboard_Model');
		$postData = $this->input->post();

		
		if($postData["batch_id"]!=0 && $postData["centre_id"] !=0){

			$arr=$this->Dashboard_Model->batch_and_centre_filter_student($postData["batch_id"],$postData["centre_id"]);
			
		}else if($postData["batch_id"]!=0){
			$arr=$this->Dashboard_Model->batch_filter_student($postData["batch_id"]);

		}else if($postData["centre_id"]!=0){
			$arr=$this->Dashboard_Model->centre_filter_student($postData["centre_id"]);

		}
		$output="";
		$output.="<thead><tr><th>S.No</th><th>Student Name</th><th>NSTI Name</th><th>Courses</th><th>Learning Hours</th></tr></thead><tbody>";
		$count=1;
		if(!empty($arr)){
			foreach($arr as $s){
				$output.= "<tr><td>".$count."</td>";
				$output.= "<td>".$s['name']."</td>";
				$output.= "<td>".$s['centre']."</td>";
				$output.= "<td>".$s['courses']."</td>";
				$output.= "<td>".$s['duration']."</td></tr>";
				++$count;
			}
			$output.="</tbody>";
		}else{
			$output.= "<tr><td colspan='5' align='center'><strong>No Data Available</strong></td></tr>";
		}

		echo $output;
	}


	public function getDataFilter_leaderboard(){
		$this->load->model('Dashboard_Model');
		$postData = $this->input->post();


		if($postData["batch_id"]!=0 && $postData["centre_id"] !=0){

			$arr=$this->Dashboard_Model->batch_and_centre_filter_leaderboard($postData["batch_id"],$postData["centre_id"]);
			
		}else if($postData["batch_id"]!=0){
			$arr=$this->Dashboard_Model->batch_filter_leaderboard($postData["batch_id"]);

		}else if($postData["centre_id"]!=0){
			$arr=$this->Dashboard_Model->centre_filter_leaderboard($postData["centre_id"]);

		}

		$output="";
		$output.="<thead><tr><th>S.No</th><th>Student Name</th><th>M1 Theory</th><th>M1 Practical</th><th>M2 Theory</th><th>M2 Practical</th><th>M3 Theory</th><th>M3 Practical</th><th>M4 Theory</th><th>M4 Practical</th><th>M5 Theory</th><th>M5 Practical</th><th>EM1 Theory</th><th>EM1 Practical</th><th>EM2 Theory</th><th>EM2 Practical</th><th>Employbility Skills</th><th>Total</th></tr></thead><tbody>";
		$count=1;
		if(!empty($arr)){
			foreach($arr as $s){
				$output.= "<tr><td>".$count."</td>";
				$output.= "<td>".$s['name']."</td>";
				$output.= "<td>".$s['m1t']."</td>";
				$output.= "<td>".$s['m1p']."</td>";
				$output.= "<td>".$s['m2t']."</td>";
				$output.= "<td>".$s['m2p']."</td>";
				$output.= "<td>".$s['m3t']."</td>";
				$output.= "<td>".$s['m3p']."</td>";
				$output.= "<td>".$s['m4t']."</td>";
				$output.= "<td>".$s['m4p']."</td>";				
				$output.= "<td>".$s['m5t']."</td>";
				$output.= "<td>".$s['m5p']."</td>";					
				$output.= "<td>".$s['em1t']."</td>";
				$output.= "<td>".$s['em1p']."</td>";				
				$output.= "<td>".$s['em2t']."</td>";
				$output.= "<td>".$s['em2p']."</td>";
				$output.= "<td>".$s['es']."</td>";		
				$output.= "<td>".$s['total']."</td></tr>";
				++$count;
			}
			$output.="</tbody>";
		}else{
			$output.= "<tr><td colspan='18' align='center'><strong>No Data Available</strong></td></tr>";
		}

		echo $output;
	}

}

?>