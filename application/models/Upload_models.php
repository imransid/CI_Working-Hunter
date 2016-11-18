<?php  

class Upload_models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function do_upload($data_a){

		$user_id = $this->session->userdata('user_id');
		$project_tittle = $this->input->post('project_tittle');
		$project_skill = $this->input->post('project_skill');
		$project_deadline = $this->input->post('project_deadline');
		$project_contruct = $this->input->post('project_contruct');


		$sql = "INSERT INTO upload (user_id, img_src, project_tittle, project_skill, project_deadline, project_contruct) VALUES (".$this->db->escape($user_id).", ".$this->db->escape($data_a).", ".$this->db->escape($project_tittle).", ".$this->db->escape($project_skill)." , ".$this->db->escape($project_deadline).", ".$this->db->escape($project_contruct).")";
	
		$result = $this->db->query($sql);

		if ($this->db->affected_rows() == 1) {
			
			return $result;
		}
 

	}


	function do_upload_prog($data_a){

		$user_id = $this->session->userdata('user_id');
		$project_tittle = $this->input->post('project_tittle');
		$project_skill = $this->input->post('project_skill');
		$project_deadline = $this->input->post('project_deadline');
		$project_contruct = $this->input->post('project_contruct');


		$sql = "INSERT INTO upload_c_p (user_id, img_src, project_tittle, project_skill, project_deadline, project_contruct) VALUES (".$this->db->escape($user_id).", ".$this->db->escape($data_a).", ".$this->db->escape($project_tittle).", ".$this->db->escape($project_skill)." , ".$this->db->escape($project_deadline).", ".$this->db->escape($project_contruct).")";
	
		$result = $this->db->query($sql);

		if ($this->db->affected_rows() == 1) {
			
			return $result;
		}





	}

}