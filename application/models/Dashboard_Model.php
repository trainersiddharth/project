
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
            $this->db->select('id');
            $query=$this->db->get_where('students',array('batch_code'=>$this->countBatch()));
            return $query->num_rows();
        }

        public function instituteBatchCount(){
            
            $query=$this->db->query('select y.name as "Centre", sum(if(x.batch_code=1,1,0)) as "Batch-1" , sum(if(x.batch_code=2,1,0)) as "Batch-2" , sum(if(x.batch_code=3,1,0)) as "Batch-3" from students x join centres y on x.centre_code=y.id  group by x.centre_code,y.name');
            return $query->result_array();
        }

    }

?>