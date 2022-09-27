<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller{
    public function index(){
        // when user forgotpassword, automatic log out
//        $username = get_cookie('username'); //get the username from cookie
//        $password = get_cookie('password'); //get the username from cookie
//        $remember = get_cookie('remember');
//        $this->session->unset_userdata('logged_in'); //delete login status
//        set_cookie("username", $username, ''); //set cookie username
//        set_cookie("password", $password, ''); //set cookie password
//        set_cookie("remember", $remember, ''); //set cookie remember

        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('signup',$data);
    }

    public function check_signup_information(){
        // when user forgotpassword, automatic log out
//        $username = get_cookie('username'); //get the username from cookie
//        $password = get_cookie('password'); //get the username from cookie
//        $remember = get_cookie('remember');
//        $this->session->unset_userdata('logged_in'); //delete login status
//        set_cookie("username", $username, ''); //set cookie username
//        set_cookie("password", $password, ''); //set cookie password
//        set_cookie("remember", $remember, ''); //set cookie remember

        $data['error']= "";
        $data['email_error'] = "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->library('form_validation');
        // set rules for check email required, validation and unique
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('required' => 'You must provide a %s', 'valid_email' => 'This Email is not valid Email address','is_unique' => 'This Email address has already been used'));
        // set rules for check username required and unique
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]',array('required' => 'You must provide a %s', 'is_unique' => 'This username has already been used'));
        // set rules for check password required and length
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[25]|callback_password_strength',array('required' => 'You must provide a %s','min_length' => 'Your password is too short', 'max_length' => 'Your password is over max length','password_strength' => 'Your password is not strong enough, it must contain number(0-9) and letters(a-Z)'));
        // set rules for check password is correct
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]',array('required' => 'You must provide a %s', 'matches' => 'Please check your password'));

        $this->load->model('user_model');
        if($this->form_validation->run()==TRUE){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            // encrypted password to hash code
            $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
            $this->user_model->signup($email,$username,$encryptedpassword); // put to database

            $user_data = array(
                'username' => $username,
                'logged_in' => false 	//get new username
            );
            $this->session->set_userdata($user_data);
//            $this->load->view('homepage',$data);
            echo "1111";
        }else{
            $this->load->view('signup',$data);
        }
    }

    public function password_strength($password){
        if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) { // password must contain number(0-9) and letters(a-Z)
            return TRUE;
        }
        return FALSE;
    }

}
?>
