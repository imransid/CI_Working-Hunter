<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './userfiles/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        
                        $data_a = 'project.jpg';

                        $this->load->model('upload_models');
                        
                        $return_data = $this->upload_models->do_upload($data_a);



                        if($return_data){
                                redirect('crud_admin', location);
                        }
                        else{
                                echo "wrong";
                        }
                        
                }
                else
                {
                        

                        $data_a = $this->upload->data('file_name');

                        $this->load->model('upload_models');
                        
                        $return_data = $this->upload_models->do_upload($data_a);



                        if($return_data){
                                redirect('index.php/crud_admin', location);
                        }
                        else{
                                echo "wrong";
                        }

                        
                }
        }



        public function do_upload_prog()
        {
                $config['upload_path']          = './userfiles/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        
                        echo "error";
                }
                else
                {
                        

                        $data_a = $this->upload->data('full_path');

                        $this->load->model('upload_models');
                        
                        $return_data = $this->upload_models->do_upload_prog($data_a);



                        if($return_data){
                                redirect('index.php/crud_admin', location);
                        }
                        else{
                                echo "wrong";
                        }

                        
                }
        }






}
?>
