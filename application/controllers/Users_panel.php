<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_panel extends Admin_Controller{



	function __construct()
	{

		parent::__construct();
		//$this->load->model('crud_admin_models');

	}

	function index(){

		$this->_check_on();
	}

	function _check_on(){

		if($this->logged_in){

			$this->load->view();
			$this->load->view();
			$this->load->view();

		}
		else{

			redirect('index.php/crud_admin', location);

		}

	}

	function comming_project(){

				$config['upload_path']          = './userfiles/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $new = $this->upload->data('file_name');
                        echo $new; 
                        //$this->load->view('upload_success', $data);
                }		

	}



}