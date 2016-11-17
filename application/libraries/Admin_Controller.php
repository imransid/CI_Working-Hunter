<?php 
class Admin_Controller extends MY_Controller{


	public $logged_in;

	function __construct(){
		parent::__construct();

		$this->data['meta_title'] = 'working hunter';
		//$this->load->model('Welcome');
		$this->load->helper(array('form', 'security', 'download'));
		$this->load->library('form_validation');
		$this->load->helper('array');
		
		if($this->session->userdata('logged_in')){
			$this->logged_in = true;
		}else{
			$this->logged_in = false;
		}
	}
}