
<?php

class Login_Model extends CI_model{

	public function register($formArray){
		$this->db->insert('users',$formArray);

	}

	public function match($formArray){
		//$this->db->select('id,email,role');
		$this->db->where($formArray);
		$query = $this->db->get('users');//->result_array();
		return $query->row_array();
	}
}

?>