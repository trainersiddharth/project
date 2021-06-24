
<?php
	
class Blog_Model extends CI_model{

	
	public function insertBlog($data){
	
		$this->db->insert('blogs', $data);
	}

	public function viewBlog()
	{
		$query = $this->db->query("SELECT * FROM blogs order by blogid desc");
        return $query->result();
	}
	function deleteBlog($id)
	{
		 $this->db->query("delete FROM blogs where blogid=$id");
	}
public function getBlog($id)
	{
		$query = $this->db->query("SELECT * FROM blogs where blogid=$id");
        return $query->result();
	}
public function updateBlog($data)
	{
		//$where = "blogid = ".$data['blogid'];
		//unset($data['blogid']);
		//$str = $this->db->update_string('blogs', $data, $where);
		$this->db->replace('blogs', $data);
	}
	
}

?>