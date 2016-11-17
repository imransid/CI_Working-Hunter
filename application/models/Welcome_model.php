<?php 
class Welcome_model extends CI_Model{
	function __construct(){

		parent::__construct();
	
	}

	public function upload_audio(){
		$wd_subject = $this->input->post('wd_subject');
		$wd_hour = $this->input->post('wd_start_hour');
		$wd_minite = $this->input->post('wd_close_minite');
		$wd_time = $this->input->post('wd_time');
		$wd_date = date("Y/m/d"); 
		$wd_am_pm  = $this->input->post('wd_am_pm');

		$wd_time_start = $wd_hour . ":" . $wd_minite . " " . $wd_am_pm;
		$result_minite = $wd_minite + $wd_time;
		$work_time = $wd_time;

		if ($result_minite > 60) {

			$test_hour = $result_minite - 60;
			$main_hour = $wd_hour + 1;
			
			if($main_hour > 12){
				$main_hour = $main_hour-12;
				if($wd_am_pm == "AM"){
					$wd_am_pm = "PM";
				}
				else{
					$wd_am_pm = "AM";
				}				
			}
			
			$final_minit = $main_hour . ":" . $test_hour . " " . $wd_am_pm;
		}else{
			$main_hour = $wd_hour;
			$test_hour = $result_minite;
			$final_minit = $main_hour . ":" . $test_hour." " . $wd_am_pm;
		}



		$sql = "INSERT INTO work_demo (wd_subject, wd_time_start, final_minit, wd_date, work_time) VALUES (".$this->db->escape($wd_subject).", ".$this->db->escape($wd_time_start).", ".$this->db->escape($final_minit).", ".$this->db->escape($wd_date)." , ".$this->db->escape($work_time).")";
	
		$result = $this->db->query($sql);

		if ($this->db->affected_rows() == 1) {
			
			return $result;
		}

	}


	function checking_updater(){
	  ///$query = $this->db->get('table_audio_info');
	  $query = $this->db->get("work_demo");

	  if($query->num_rows() > 0){
	  	foreach ($query->result() as $fila) {
	  		$data[] = $fila;
	  	}
	  	return $data;
	  }
	  else{
	  		return FALSE;
	  }
	}

	
	function timeline_updater(){
	  ///$query = $this->db->get('table_audio_info');
	  $query = $this->db->get("upload");

	  if($query->num_rows() > 0){
	  	foreach ($query->result() as $fila) {
	  		$data[] = $fila;
	  	}
	  	return $data;
	  }
	  else{
	  		return FALSE;
	  }
	}



}