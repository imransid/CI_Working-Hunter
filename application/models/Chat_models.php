<?php  

class Chat_models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function add_chat_message($chat_id, $user_id, $chat_message_content, $ac_type, $name){


		$query_str = "INSERT INTO add_chat_message (chat_id, user_id, chat_message_content, ac_type, name) VALUES (?, ?, ?, ?, ?)";

		$this->db->query($query_str, array($chat_id, $user_id, $chat_message_content, $ac_type, $name));



	}


	function get_chat_message($chat_id){
		
		$this->db->select('
			add_chat_message.create_date,
			add_chat_message.chat_message_content,
			users.name
			');
		$this->db->from('add_chat_message');
		$this->db->join('users', 'users.user_id = add_chat_message.user_id');
		$this->db->order_by('add_chat_message.create_date', 'ASC');
		$query = $this->db->get();
		return $query;

	}


}