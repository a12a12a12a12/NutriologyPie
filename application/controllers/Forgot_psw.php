<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_psw extends CI_Controller{

    public function index()
    {
        session_start();
        $data['error']= "";
        $data['token_error'] = "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('template/header');
        $this->load->view('forgot_psw',$data);
        $this->load->view('template/footer');
    }

    public function send(){
        session_start();
        $data['error']= "";
        $data['token_error'] = "";
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->model('verify_model');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mailhub.eait.uq.edu.au',
            'smtp_port' => 25,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE ,
            'mailtype' => 'html',
            'starttls' => true,
            'newline' => "\r\n"
        );
        $email = $this->input->post('email');
        if (!$this->verify_model->check_email_in_users($email)){
            $data['error'] = "<div class=\"alert alert-danger\" role=\"alert\"> Your email is not correct </div> ";
            $this->load->view('forgot_psw',$data);
            $this->load->view('template/footer');
        } else {
            if ($this->verify_model->check_email_in_verify($email)){
                $this->email->initialize($config);
                $this->email->from('deco3801numpy@student.uq.edu.au','Pengrui Zeng');
                $this->email->to($email);
                $this->email->subject('Email Address Verify');
                $code = $this->verify_model->verify_code_2($email);
                $this->email->message("Your verify code is :".$code);
                $this->email->send();
                $this->load->view('forgot_psw',$data);
                $this->load->view('template/footer');

                $user_data = array(
                    'email' => $email,
                    'code' => $code
                );
                $this->session->set_userdata($user_data);
            } else {
                $this->email->initialize($config);
                $this->email->from('deco3801numpy@student.uq.edu.au','Pengrui Zeng');
                $this->email->to($email);
                $this->email->subject('Email Address Verify');
                $code = $this->verify_model->verify_code($email);
                $this->email->message("Your verify code is :".$code);
                $this->email->send();
                $this->load->view('forgot_psw',$data);
                $this->load->view('template/footer');

                $user_data = array(
                    'email' => $email,
                    'code' => $code
                );
                $this->session->set_userdata($user_data);
            }
        }
    }

    public function reset_password(){
        session_start();
        $data['error']= "";
        $data['token_error'] = "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('template/header');
        $this->load->model('verify_model');

        $profile_username = $this->session->userdata('username');
        $current_data = $this->user_model->get_data($profile_username);
        $username = $profile_username;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[25]|callback_password_strength',array('required' => 'You must provide a %s','min_length' => 'Your password is too short', 'max_length' => 'Your password is over max length','password_strength' => 'Your password is not strong enough, it must contain number(0-9) and letters(a-Z)'));
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]',array('required' => 'You must provide a %s', 'matches' => 'Please check your password'));
            
        $email = $this->session->userdata('email');
        $code = $this->verify_model->get_token($email);
        $codeinput = $this->input->post('verifycode');
        
        if ($codeinput == $code){
            if($this->form_validation->run()==TRUE){
                $password = $this->input->post('password');
                // encrypted password to hash code
                $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
                $this->user_model->reset_user_password($encryptedpassword); // put to database
                $user_data = array(
                    'username' => $username,
                );
                $this->session->set_userdata($user_data); //set user status to login in session

                $this->load->view('login',$data);
                $this->load->view('template/footer');
            } else {
                $this->load->view('forgot_psw',$data);
                $this->load->view('template/footer');
            }
        } else {
            $data['token_error'] = "Your verify code is not corrtect";
            $this->load->view('forgot_psw',$data);
            $this->load->view('template/footer');
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
