
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

        //select y.name as "Centre", count(x.id) as "students" , sum(x.no_of_courses) as "Courses" , sum(x.duration_of_courses) as "Duration" from students x join centres y on x.centre_code=y.id  group by x.centre_code,y.name 
        public function instituteBatchCount(){
            
            $query=$this->db->query('select y.name as "Centre", sum(if(x.batch_code=1,1,0)) as "Batch-1" , sum(if(x.batch_code=2,1,0)) as "Batch-2" , sum(if(x.batch_code=3,1,0)) as "Batch-3" ,y.poc_name, y.trainer_name ,y.email from students x join centres y on x.centre_code=y.id  group by x.centre_code,y.name');
            return $query->result_array();
        }

        //select x.student_name as "name",y.name as "centre", x.no_of_courses as "courses" , x.duration_of_courses as "duration" from students x join centres y on x.centre_code=y.id

        public function skillsbuildCountCentreWise(){
            
            $query=$this->db->query('select y.name as "centre", count(x.id) as "students" , sum(x.no_of_courses) as "courses" , sum(x.duration_of_courses) as "duration" from students x join centres y on x.centre_code=y.id  group by x.centre_code,y.name');
            return $query->result_array();
        }

        public function skillsbuildCountStudentWise(){
            
            $query=$this->db->query('select x.student_name as "name",y.name as "centre", x.no_of_courses as "courses" , x.duration_of_courses as "duration" from students x join centres y on x.centre_code=y.id');
            return $query->result_array();
        }


        // ajax functions

        public function getCentres(){
            $query=$this->db->query('select y.id as "id", y.name as "institute" from centres y');
            return $query->result_array();
        }

        public function getBatches(){
            $query=$this->db->query('select id , batch from batches');
            return $query->result_array();
        }

        public function batch_and_centre_filter_student(){

        }

        public function batch_filter_student($b){

            $query=$this->db->query('select x.student_name as "name",y.name as "centre", x.no_of_courses as "courses" , x.duration_of_courses as "duration" from students x join centres y on x.centre_code=y.id where x.batch_code='.$b);
            return $query->result_array();
        }

        public function centre_filter_student(){
            
        }


        public function batch_and_centre_filter_centre(){

        }

        public function batch_filter_centre(){
            
        }

        public function centre_filter_centre(){
            
        }

    }

?>