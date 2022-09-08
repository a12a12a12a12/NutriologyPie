<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regular_signup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->session->unset_userdata('logged_in');
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
        $this->load->view('template/header');
		$this->load->view('regular_signup', $data);
		echo "hello";
	}

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
     }

    public function user_information() {
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->model('user_model');
        $this->load->library('form_validation');
		$data['error']= "";
		if ($this->input->post('username') != NULL) {
			$username = $this->input->post('username'); //getting username from login form
			$password = $this->input->post('password'); //getting password from login form
			$confirm_password = $this->input->post('confirm_password'); 
			$email = $this->input->post('email');
			$phonenumber = $this->input->post('phonenumber');
			$answer1 = $this->input->post('answer1');
			$answer2 = $this->input->post('answer2');
			if (!$this->user_model->check($username)) {
                $this->form_validation->set_rules('username', 'Username', 'required|max_length[15]', 
                    array('required' => 'You must provide a %s', 'max_length[15]'  => 'Your %s must less than 15 characters'),
                );
                if ($this->user_model->password_strength($password)) {
                    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', 
                    array('required' => 'You must provide a %s', 'min_length[6]'  => 'Your %s must greater than or equal to 6 characters'),
                    );
                    $this->form_validation->set_rules('confirm_password', 'Confirmed password', 'required|matches[password]', 
                    array('required' => 'You must provide a %s', 'matches[password]' => 'The two password did not match!'),
                    );
                    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', 
                    array('required' => 'You must provide a %s', 'valid_email' => 'Please input a valid email!!'),
                    );
                    if ($this->form_validation->run() == FALSE){
                        $this->load->view('regular_signup', $data);
                    } else {
                        $this->user_model->regular_signup($username, $password, $email);
                        $this->load->view('login', $data);
                    }
                } else {
                    $data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> Your password must include numbers and letter a to z or A to Z!! </div>";
					$this->load->view('regular_signup', $data);
                }
            } else {
                $data['error']= "<div class=\"alert alert-danger\" role=\"alert\">The username is exist!! </div> ";
                $this->load->view('regular_signup', $data);
            }
        } else {
            redirect('signup');
        }
    }
                    
                    
            
}