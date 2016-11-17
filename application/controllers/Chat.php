<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends Admin_Controller{



	function __construct()
	{

		parent::__construct();
		$this->load->model('chat_models');

	}


	function index()
	{

		$this->view_data['chat_id'] = 1;
		$this->view_data['user_id'] = 52;
		$this->view_data['ac_type'] = "admin";//$this->session->userdata('admin_id');

		$this->load->view('components/page_head',$this->data);
		$this->load->view('elements/chaing_on',$this->view_data);
		$this->load->view('components/page_tail');
	}


	function ajax_add_chat_message()
	{


		$chat_id = $this->input->post('chat_id');
		$user_id = $this->input->post('user_id');
		$chat_message_content = $this->input->post('chat_message_content',TRUE);
		$ac_type = $this->input->post('ac_type');
		$name = $this->input->post('name');
			
		$this->chat_models->add_chat_message($chat_id, $user_id, $chat_message_content, $ac_type, $name);
		///passing (kjjkj,jkjk)

		echo $this->_chat_message($chat_id, $ac_type);


	}


	function get_chat_message(){

		$chat_id = $this->input->post('chat_id');
		$ac_type = $this->input->post('ac_type');
		echo $this->_chat_message($chat_id, $ac_type);

	}


	function _chat_message($chat_id, $ac_type){

			
		$chat_on = $this->chat_models->get_chat_message($chat_id);


		if ($chat_on)
		{

						$chat_messages_html = "<ul>";
			
						foreach ($chat_on->result() as $chat_message) {
							
							$chat_messages_html .= "<li>".$chat_message->name." : " . $chat_message->chat_message_content ."</li>";


						}
						$chat_messages_html .= "</ul>";

						$result = array('status' => 'ok', 'content' => $chat_messages_html);

						return json_encode($result); //print json
						exit();



		}
		else
		{
						
						$chat_messages_html = "NO CONVERSION";
						$result = array('status' => 'ok', 'content' => $chat_messages_html);
						return json_encode($result); //print json
						exit();

		}


	}
}