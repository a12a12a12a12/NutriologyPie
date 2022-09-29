<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class discuss extends CI_Controller {

    public function index() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');

        $profile_username = $this->session->userdata('username');
        $current_data = $this->user_model->get_data($profile_username); 
        
        $data['username'] = $current_data->username;
        $data['email'] = $current_data->email;
        $data['phone'] = $current_data->phone;
        $data['membership'] = $current_data->membership;
        $data['path'] = $current_data->path;
        $data['birthday'] = $current_data->birthday;
        
        $comment_data = $this->user_model->get_comment_data();
        $data['comment_data'] = $comment_data;

        if (!$this->session->userdata('logged_in')) { //check if user already login
            // 返回login
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
                    if ($data['membership'] != 'Pro') { //不是会员不能post
                        $data['post'] = 'disabled';
                        $this->load->view('discuss',$data);
                        $this->load->view('template/footer');
                    } else {
                        $data['post'] = '';
                        // access discuss page only if user login 
                        $this->load->view('discuss',$data);
                        $this->load->view('template/footer');
                    } 
                }
            }else{
                $this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
            }
        } else {
            if ($data['membership'] != 'Pro') {
                $data['post'] = 'disabled';
            } else {
                $data['post'] = '';
            }
            $this->load->view('discuss',$data);
            $this->load->view('template/footer');
        }
    }
}
?>