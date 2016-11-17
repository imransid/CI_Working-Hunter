<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_admin extends Admin_Controller{



	function __construct()
	{

		parent::__construct();
		$this->load->model('crud_admin_models');

	}

	function index(){

		$this->_check_on();

	}

	function _check_on(){


		if($this->logged_in){

			$this->load->model('welcome_model');
			$this->data["quick_data"] = $this->welcome_model->checking_updater();
			$this->data["quick_data_1"] = $this->welcome_model->timeline_updater();
			$this->load->model('crud_admin_models');
			$this->data["user_list"] = $this->crud_admin_models->check_user();

			$this->data['logged_admin'] = "admin_logged";
			$this->load->view('components/page_head',$this->data);
			$this->load->view('page/Admin_panel', $this->data);
			$this->load->view('components/page_tail');
		}
		else{
			$this->data['logged_admin'] = "admin_log_in_form";
			$this->load->view('components/page_head',$this->data);
			$this->load->view('page/Admin_panel', $this->data);
		}

	}

	function admin_cheker(){

				$this->form_validation->set_rules('wd_admin_login', 'Username', 'trim');
                $this->form_validation->set_rules('wd_password', 'Password', 'trim|min_length[8]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->index();
                }
                else
                {
                		$result = $this->crud_admin_models->admin_cheker();	

                		switch ($result) {
					case 'logged_in':
						
						///redirect('upload_me','location'); use go to controller
						
						if($user_type = 'admin'){
							redirect('index.php/crud_admin', location);
						}else{
							redirect('index.php/users_panel', location);
						}
						break;
					
					case 'incorrect_password':

						$this->data['incorrect_password'] = 'incorrect_password';
						echo "incorrect_password";
						$this->index();
						break;

					case 'Check_User_Type':

						echo "Check_User_Type";
						$this->index();
						break;
						
					case 'email_not_found':

						echo "email_not_found";

						$this->index();
						break;
						}

			
				}

            }

            function _admin_main(){

            $this->data['logged_admin'] = "admin_logged";
			$this->load->view('components/page_head',$this->data);
			$this->load->view('page/Admin_panel', $this->data);



            }



            function logout(){
				$this->session->sess_destroy(); //session destroy..
				redirect('index.php/crud_admin','location');
			}

			function admin_insert(){

				$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[12]');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
				$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
				$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[users.user_email]');

                if ($this->form_validation->run() == FALSE)
                {
                        
                        echo "error";

                        //$this->load->view('myform');
                }
                else
                {
                        $this->load->model('crud_admin_models');
						$result = $this->crud_admin_models->admin_insert();
						if($result){
							redirect('index.php/crud_admin', location);
						}{
							echo "database error";
						}
                }

			}

			function admin_delete($user_id = NULL){

				if($user_id != NULL){
					$this->crud_admin_models->admin_delete($user_id);
					redirect('');
				}

			}

			function admin_edit($user_id){

				if ($user_id != NULL) {
					
				$this->load->model('crud_admin_models');
				$this->data['editing_user'] = $this->crud_admin_models->admin_edit($user_id);

				$this->data['logged_admin'] = "admin_edit";
				$this->load->view('components/page_head',$this->data);
				$this->load->view('page/Admin_panel', $this->data);

				}
			}



			function admin_update(){

				$this->form_validation->set_rules('username', 'Username', 'trim|min_length[5]');
                $this->form_validation->set_rules('user_email', 'Email', 'trim|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                    echo "wrong";    
                }
                else
                {
                	$this->load->model('crud_admin_models');
					$result = $this->crud_admin_models->admin_update();
					if ($result) {

						redirect('index.php/crud_admin', location);

					}
					else{

						echo "database error";

					}
                }


			}
		

}