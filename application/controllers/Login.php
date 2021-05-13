
<?php

	class Login extends CI_controller{

			/*
		    public function __construct(){
    			parent::__construct();
     			$this->load->helper('url');
			}
			*/


		public function index(){

			$this->load->view('login/all');

		}


		public function match(){

			$this->load->model('Login_Model');

			$this->load->library('form_validation');

			$this->form_validation->set_rules('email','Enter Email Here','required|valid_email');

			$this->form_validation->set_rules('pass','Enter Password Here','required');

 			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


 			if($this->form_validation->run()==true){

 				$email=$this->input->post('email');
				$pass=$this->input->post('pass');
			
				$formArray=array('email'=>$email);		
				$data=$this->Login_Model->match($formArray);

				$pass_decode=password_verify($pass, $data['password']);

				if($pass_decode){
					if($data['role']=='D'){
						$this->session->set_userdata('user',$data);
						redirect(base_url('Dashboard/index'));
					}elseif ($data['role']=='A') {
						$this->session->set_userdata('user',$data);
						redirect(base_url('Admin_Controller/index'));
					}

				}else{
				$this->session->set_flashdata('error','You are not the Valid User');
 				redirect(base_url('Login/index'));
				}
				

 			}else{
 				$this->session->set_flashdata('error','You are not the Valid User');
 				redirect(base_url('Login/index'));
 			}



		}

		public function insert(){
			$this->load->helper(array('form', 'url'));
			$this->load->model('Login_Model');


			$this->load->library('form_validation');

			$this->form_validation->set_rules('email','Enter Email Here','required|valid_email');

			$this->form_validation->set_rules('pass','Enter Password Here','required');

 			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


 			if($this->form_validation->run()==true){
 				
 				
				$email=$this->input->post('email');
				$pass=$this->input->post('pass');
				$pass1=password_hash($pass, PASSWORD_BCRYPT);

				$formArray=array('email'=>$email,'password'=>$pass1,'role'=>'D');		
				$this->Login_Model->register($formArray);

				$this->session->set_flashdata('success','Account Created Successfully');
				/*
 				echo "email=".$email."<br/>";
 				echo "password=".$pass."<br/>";
 				echo "password=".$pass1."<br/>";
 				*/
 			}else{

 				$this->session->set_flashdata('error','You are not the Valid User');
				//$this->load->view('login/all');
			}

			redirect(base_url('Login/index'));		
		}


		public function dashboard(){
			echo "comming to dashboard....";
		}
	}
?>