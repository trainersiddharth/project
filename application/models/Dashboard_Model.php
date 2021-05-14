
<?php
	
    class Dashboard_Model extends CI_model{

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
            $this->db->distinct();
            $this->db->select('id');
            $query=$this->db->get('students');
            return $query->num_rows();
        }
    }

?>