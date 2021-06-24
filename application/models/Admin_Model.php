
<?php
	
class Admin_Model extends CI_model{

	public function countCentre(){
		$this->db->select_max('id');
		$ans=$this->db->get('centres')->result_array();
		return $ans[0];
	}

	public function countTrainer(){
		$this->db->distinct();
		$this->db->select('trainer_name');
		$query = $this->db->get('centres');
		return $query->num_rows();
	}

	public function countBatch(){
		$this->db->distinct();
		$this->db->select('batch');
		$query=$this->db->get('batches');
		return $query->num_rows();
	}

	public function countStudent(){
		$this->db->select('id');
		$query=$this->db->get_where('students',array('batch_code'=>$this->countBatch()));
		return $query->num_rows();
	}

	public function updateMarks($condition , $updateData){
		
		$this->db->set('m1t',$updateData['m1t']);
		$this->db->set('m1p',$updateData['m1p']);
		$this->db->set('m2t',$updateData['m2t']);
		$this->db->set('m2p',$updateData['m2p']);
		$this->db->set('m3t',$updateData['m3t']);
		$this->db->set('m3p',$updateData['m3p']);
		$this->db->set('m4t',$updateData['m4t']);
		$this->db->set('m4p',$updateData['m4p']);
		$this->db->set('m5t',$updateData['m5t']);
		$this->db->set('m5p',$updateData['m5p']);
		$this->db->set('em1t',$updateData['em1t']);
		$this->db->set('em1p',$updateData['em1p']);
		$this->db->set('em2t',$updateData['em2t']);
		$this->db->set('em2p',$updateData['em2p']);
		$this->db->set('es',$updateData['es']);


		$this->db->where('email', $condition);
		$this->db->update('students');
	}

	public function insertCentre($data){
		$this->db->insert_batch('centres', $data);
	}

	public function insertBatch($data){
		$this->db->insert_batch('batches', $data);
	}

	public function insertStudent($data){
		$this->db->insert_batch('students', $data);
	}

	public function batch_filter_student($b){
		
		return $this->db->query('select x.student_name as "name",x.email as "email" ,y.name as "centre", x.no_of_courses as "courses" , x.duration_of_courses as "duration" from students x join centres y on x.centre_code=y.id where x.batch_code='.$b);
	}

	public function batch_filter_centre($b){
		$query=$this->db->query('select y.name as "centre", count(x.id) as "students" , sum(x.no_of_courses) as "courses" , sum(x.duration_of_courses) as "duration" from students x join centres y on x.centre_code=y.id  where x.batch_code='.$b.' group by x.centre_code,y.name ');
		return $query->result_array();
	}
}

?>