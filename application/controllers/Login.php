<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		if (!$this->session->userdata('logged_in'))//check if user already login
		{
			$this->load->view('login', $data); //if user has not login ask user to login
		}else{
			$this->load->view('welcome_message'); //if user already logined show main page
		}
		$this->load->view('template/footer');
	}
	public function check_login()
	{
		$this->load->model('user_model');		//load user model
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> Incorrect username or passwrod!! </div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$username = $this->input->post('username'); //getting username from login form
		$password = $this->input->post('password'); //getting password from login form
		$remember = $this->input->post('remember'); //getting remember checkbox from login form
		$name = $this->user_model->get_data($username); 
		if(!$this->session->userdata('logged_in')){	//Check if user already login
			if ($this->user_model->check($username)){
				if (password_verify($password, $name->password))//比较用户输入的密码和数据库中存的密码比对
				{
					$user_data = array(
					'username' => $username,
					'logged_in' => true, 	//create session variable
					);
					if($remember) { // if remember me is activated create cookie
						set_cookie("username", $username, '300'); //set cookie username
						set_cookie("password", $name->password, '300'); //set cookie password
						set_cookie("remember", $remember, '300'); //set cookie remember
					}
					$this->session->set_userdata($user_data); //set user status to login in session
					$this->load->view('welcome_message'); // direct user home page
				} else {
					$this->load->view('login', $data);
				}
		}else{
			{
				redirect('login'); //if user already logined direct user to home page
			}
		$this->load->view('template/footer');
		}
	}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in'); //delete login status
		redirect('login'); // redirect user back to login
	}
}
?>

