<?php  

class Crud_admin_models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function admin_cheker(){

		$user_type = $this->input->post('user_type');
		$user_email = $this->input->post('admin_email', TRUE);
		$password = $this->input->post('wd_password', TRUE);
		

		$sql = "SELECT user_id ,name , password, user_email, user_type FROM users WHERE user_email = '{$user_email}' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();
	
		if($result->num_rows() === 1){
			if($row->user_type == $user_type){
				if($row->password === $password){
					 $session_data = array(
					 		'user_id' => $row->user_id,
					 		'name' => $row->name,
					 		'user_email' => $row->user_email,
					 		'user_type' => $row->user_type
					 	);
					$this->set_session($session_data);

					return 'logged_in';///fix what is it
				}else{
					return 'incorrect_password';
				}
			}else{
				return 'Check_User_Type';
			}
		}else{
			return 'email_not_found';
		}

	}


	private function set_session($session_data){
			$sess_data = array(
					'user_id' => $session_data['user_id'],
					'name' => $session_data['name'],
					'user_email' => $session_data['user_email'],
					'user_type' => $session_data['user_type'],
					'logged_in' => 1
				);
			$this->session->set_userdata($sess_data);
	}

	function check_user(){
			$query = $this->db->get("users");

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


	function admin_insert(){

		$activated_admin_email = $this->session->userdata('admin_email');
		$username = $this->input->post('username');
		$password = sha1($this->config->item('salt') . $this->input->post('password'));
		$name = $this->input->post('name');
		$user_number = $this->input->post('user_number');
		$user_email = $this->input->post('user_email');
		$types_ac = $this->input->post('types_ac');
				
		$query_sql = "INSERT INTO users (username, password, name, activated_admin_email, user_number, user_email, user_type) VALUES (".$this->db->escape($username).", ".$this->db->escape($password).", ".$this->db->escape($name).", ".$this->db->escape($activated_admin_email).", ".$this->db->escape($user_number).", ".$this->db->escape($user_email).", ".$this->db->escape($types_ac).")";
	
		$result = $this->db->query($query_sql);

		if ($this->db->affected_rows() == 1) {

			return TRUE;

		}else{
			$this->load->library('email');
			$this->email->from($user_email, 'Slim');
			$this->email->to('emailofimran1992@gmail.com');
			$this->email->subject('Problem inserting user in database.');
			$this->email->send();
			return false;
		}




	}


	function admin_delete($user_id){


		$this->db->where('user_id', $user_id);
		$this->db->delete('users');


	}


	function admin_edit($user_id){

	  $query = $this->db->select('*')
		                ->where('user_id', $user_id)
		                ->limit(1)
		                ->get('users');

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

	function admin_update(){

		$activated_admin_email = $this->session->userdata('admin_email');
		$username = $this->input->post('username');
		$name = $this->input->post('name');
		$user_number = $this->input->post('user_number');
		$user_email = $this->input->post('user_email');

		$array = array( 'username' => $username, 'name' => $name ,'user_number' => $user_number, 'activated_admin_email' => $activated_admin_email, 'user_email' => $user_email );

		$this->db->where('user_email', $user_email);
		$this->db->update('users', $array);
		//print_r($array);
		return TRUE;
		

	}


}

