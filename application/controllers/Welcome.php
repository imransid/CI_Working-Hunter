<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
	}

	
	function index(){

		$this->load->view('components/page_head',$this->data);
		$this->load->view('page/Test');
		$this->load->view('components/page_tail');
	}

	function upload_checking(){
        $result = $this->welcome_model->upload_audio();
        if ($result) {
        	redirect('index.php/welcome/success_page', location); //go to any controller
        	//$this->success_page();
        	
        }
	}

	function success_page(){

		$data_Action["quick_data"] = $this->welcome_model->checking_updater();
		$data_on = $data_Action["quick_data"];

		if ($data_on) {
			$this->load->view('components/page_head',$this->data);
			$this->load->view('page/Welcome',$data_Action);
			$this->load->view('components/page_tail');
		}
		else{

			$this->index();

		}

	}
        
}