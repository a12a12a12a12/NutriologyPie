<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
	public function index(){
		session_start();
		$this->load->helper('cookie');
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('cookie_helper');
		$this->load->view('template/header');
		$this->load->view('login', $data);
		if (!$this->session->userdata('logged_in'))//check if user already login
		{
			echo $this->session->userdata('logged_in');
			if (get_cookie('remember')) { // check if user activate the "remember me" feature
				$username = get_cookie('username'); //get the username from cookie
				$password = get_cookie('password'); //get the username from cookie
				if ($this->user_model->login($username, $password))//check username and password correct
				{
					$user_data = array(
						'username' => $username,
						'logged_in' => true    //create session variable
					);
					$this->session->set_userdata($user_data); //set user status to login in session
					redirect('homepage'); //if user already logined show main page
				} else {
					$this->load->view('login', $data);    //if username password incorrect, show error msg and ask user to login
				}
			}
		}
		else{
			redirect('homepage'); //if user already logined show main page
		}
	}

	public function check_login()
	{
		session_start();
		$this->load->model('user_model');		//load user model
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> Incorrect username or passwrod!! </div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('cookie_helper');
		$this->load->view('template/header');
		$username = $this->input->post('username'); //getting username from login form
		$password = $this->input->post('password'); //getting password from login form
		$remember = $this->input->post('remember'); //getting remember checkbox from login form

		// log in without hash code
		$current_data = $this->user_model->get_data($username);
		if(!$this->session->userdata('logged_in')){	//Check if user already login
			if ($this->user_model->check_username_indb($username)){
				if(password_verify($password,$current_data->password)){
					$user_data = array(
						'username' => $username,
						'logged_in' => true 	//create session variable
					);
					$this->session->set_userdata($user_data); //set user status to login in session
					if($remember) { // if remember me is activated create cookie
						set_cookie("username", $username, '300'); //set cookie username
						set_cookie("password", $password, '300'); //set cookie password
						set_cookie("remember", $remember, '300'); //set cookie remember
					}
					redirect('homepage'); // direct user home page
				} else {
					$this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
				}
			} else {
				$this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
			}
		}else{
			redirect('login'); //if user already logined direct user to home page
		}
	}

	public function logout(){
		session_start();
		$this->session->unset_userdata('logged_in'); //delete login status
		set_cookie("username", $username, ''); //set cookie username
        set_cookie("password", $password, ''); //set cookie password
        set_cookie("remember", $remember, ''); //set cookie remember
		redirect('login'); // redirect user back to login
	}
}
?>

