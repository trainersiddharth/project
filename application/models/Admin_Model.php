
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
		$query=$this->db->get_where('students',array('batch_code'=>countBatch()));
		return $query->num_rows();
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
}

?>