<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {

    public function index() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $data['disabled'] = '';

        if (!$this->session->userdata('logged_in'))//check if user already login
		{	
			if (get_cookie('remember')) { // check if user activate the "remember me" feature  
				$username = get_cookie('username'); //get the username from cookie
				$password = get_cookie('password'); //get the username from cookie
				if ( $this->user_model->login($username, $password) )//check username and password correct
				{
					$user_data = array(
						'username' => $username,
						'logged_in' => true 	//create session variable
					);
					$this->session->set_userdata($user_data); //set user status to login in session

                    $username = $this->session->userdata('username');
                    $current_data = $this->user_model->get_data($username); 
                    $member = $current_data->membership;
                    if ($member == 'Pro'){
                        $data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> You are already member! </div> ";
                        $data['disabled'] = 'disabled';
                        $this->load->view('member',$data);
                    } else {
                        $this->load->view('member',$data);
                    }
                    $this->load->view('template/footer');
				}
			}else{
				$this->load->view('member',$data);
			}
		}else{
            $username = $this->session->userdata('username');
            $current_data = $this->user_model->get_data($username); 
            $member = $current_data->membership;
            if ($member == 'Pro'){
                $data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> You are already member! </div> ";
                $data['disabled'] = 'disabled';
                $this->load->view('member',$data);
            } else {
                $this->load->view('member',$data);
            }
            $this->load->view('template/footer');
		}
    }
}
?>