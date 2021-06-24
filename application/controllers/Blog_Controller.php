
<?php

class Blog_Controller extends CI_controller{

	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
				$this->load->helper('date');
				$this->load->model('Blog_Model');
			
        }
	
		public function index(){
		$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			
			$this->load->view('blog/createblog', array('error' => ' ' ));
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
		
	
	}

	
	function createblog()
	{
		
		$this->index();
	}
	
	function viewmainblog()
	{
			$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		$blogdata=$this->Blog_Model->viewBlog();
		$d1['blogdata']=$blogdata;
		if(!empty($user)){

			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/sidebar');
			
			$this->load->view('blog/viewmainblog',$d1);
			$this->load->view('dashboard/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
	
	}
	function readblog($id)
	{
		
		$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		$blogdata=$this->Blog_Model->getBlog($id);
		$images=array();
		foreach ($blogdata as $row)
		{
				$data['blogheading']= $row->blogheading;
				$data['blogcontent']= $row->blogtext;
				$images[0]=(!empty($row->imageurl))?base_url('uploads/'.$row->imageurl):'';
				$images[1]=(!empty($row->imageurl2))?base_url('uploads/'.$row->imageurl2):'';
				$images[2]=(!empty($row->imageurl3))?base_url('uploads/'.$row->imageurl3):'';
				$data['images']= $images;
				
				$data['createddate']=$row->createddate;
				$data['modifieddate']=$row->modifieddate;
		}
		
		//echo "<pre>";print_r($blogdata);die;
		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			
			$this->load->view('blog/readblog', $data);
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
		
	
	}

function deleteblog($id)
{
			$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		$this->Blog_Model->deleteBlog($id);
		$data['error']='';
      if(!empty($user)){
		
			redirect('/Blog_Controller/viewblog', 'refresh');
			
		}else{
			echo "No Data is available...<br/>";
		}	
}	
function editblog($id)
	{
		
		$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		$blogdata=$this->Blog_Model->getBlog($id);
		$data['error']='';
		foreach ($blogdata as $row)
		{
				$data['blogheading']= $row->blogheading;
				$data['blogid']= $row->blogid;
				$data['blogcontent']= $row->blogtext;
				$data['blogsummary']= $row->blogsummary;
				$data['imageurl']= $row->imageurl;
				$data['imageurl2']= $row->imageurl2;
				$data['imageurl3']= $row->imageurl3;
				
		}
		
		//echo "<pre>";print_r($blogdata);die;
		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			
			$this->load->view('blog/editblog', $data);
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
		
	
	}	
function viewblog()
{
	
	$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
		$blogdata=$this->Blog_Model->viewBlog();
		$d1['blogdata']=$blogdata;
		if(!empty($user)){

			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			
			$this->load->view('blog/viewblog',$d1);
			$this->load->view('admin/footer');


		}else{
			echo "No Data is available...<br/>";
		}	
		
}
	 public function do_upload()
        {
			$user=$this->session->userdata('user');
					
			$this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload('userfile');
               	$dataInfo[] = $this->upload->data();
			}

			$data = array(
				'uid' => $user['id'],
				'blogheading'=>$this->input->post('blogheading'),
				'blogtext'=>$this->input->post('blogtext'),
				'blogsummary'=>$this->input->post('blogsummary'),
				'imageurl' =>  !empty($dataInfo[0]['file_name'])?$dataInfo[0]['file_name']:'',
				'imageurl2' => !empty($dataInfo[1]['file_name'])?$dataInfo[1]['file_name']:'',
				'imageurl3' => !empty($dataInfo[2]['file_name'])?$dataInfo[2]['file_name']:'',
				'createddate' => date('Y-m-d H:i:s')
				
			 );
			$result_set = $this->Blog_Model->insertBlog($data);
				
			//echo "<pre>";var_dump($dataInfo);die;	
				
			$this->session->set_flashdata('success','Blog Uploaded Successfully');
		redirect(base_url('Blog_Controller/createblog'));		
				
              
				
        }
	private function set_upload_options()
	{   
		//upload an image options
		$config = array();
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 6000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		return $config;
	}	

public function do_update($id)
        {
			$user=$this->session->userdata('user');
		$data=array();
		$data['user']=$user;
				
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$data1=array();
				
               
                                           
                
                        $blogdata=$this->Blog_Model->getBlog($id);
						foreach ($blogdata as $row)
							{
									$data1['createddate']= $row->createddate;
									$data1['imageurl']=$row->imageurl;
									$data1['imageurl2']=$row->imageurl2;
									$data1['imageurl3']=$row->imageurl3;
																		
							}
						$data = array('upload_data' => $this->upload->data());
						//echo "<pre>";print_r($user);die;
                        $data1['uid']=$user['id'];
						
						//$data1['createddate']=$blogdata[;
						$data1['blogid']=$id;
						$data1['blogheading']=$this->input->post('blogheading');
                        $data1['blogtext']=$this->input->post('blogtext');
                        $data1['blogsummary']=$this->input->post('blogsummary');
                       //$data1['imageurl']=$data['upload_data']['file_name'];
						
						$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload('userfile');
               	$dataInfo[] = $this->upload->data();
			}

			$data = array(
				'uid' => $user['id'],
				'blogheading'=>$this->input->post('blogheading'),
				'blogtext'=>$this->input->post('blogtext'),
				'blogsummary'=>$this->input->post('blogsummary'),
				'imageurl' =>  !empty($dataInfo[0]['file_name'])?$dataInfo[0]['file_name']:$data1['imageurl'],
				'imageurl2' => !empty($dataInfo[1]['file_name'])?$dataInfo[1]['file_name']:$data1['imageurl2'],
				'imageurl3' => !empty($dataInfo[2]['file_name'])?$dataInfo[2]['file_name']:$data1['imageurl3'],
				'createddate' => $data1['ceateddate']
				
			 );
						
						
						//echo "<pre>";print_r($data['upload_data']['file_name']);die;
						$this->Blog_Model->updateBlog($data1);

		$this->session->set_flashdata('success','Blog Updated Successfully');
		redirect(base_url("Blog_Controller/editblog/".$data1['blogid']));	
                        
                       
                
				

				
        }


}


?>