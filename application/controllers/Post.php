<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {

    public function index() {
        session_start();
        $data['error']= "";
        $data['file_error'] = "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');

        if (!$this->session->userdata('logged_in')) { //check if user already login
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

					$this->load->view('post',$data);
				}
			}else{
                $data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> You need to log in to post reviews!! </div> ";
				$this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
                $this->load->view('template/footer');
			}
        } else {
            // access post page only if user login 
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

            $this->load->view('post',$data);
        }
    }

    public function post_review() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->library('form_validation');

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
                    $profile_username = $this->session->userdata('username');
                    $current_data = $this->user_model->get_data($profile_username);
                    $data['username'] = $current_data->username;
                    $data['email'] = $current_data->email;
                    $data['phone'] = $current_data->phone;
                    $data['membership'] = $current_data->membership;
                    $data['path'] = $current_data->path;
                    $data['birthday'] = $current_data->birthday;
                    $email = $current_data->email;
                    $path = $current_data->path;

                    // Upload files
                    $this->load->model('file_model');
                    $config['upload_path'] = 'uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = 100000;
                    $config['max_width'] = 10000;
                    $config['max_height'] = 10000;
                    $this->load->library('upload', $config);
            
                    // set rules for check title is required
                    $this->form_validation->set_rules('title', 'Title', 'required',array('required' => 'You must provide a title'));
                    // set rules for check category is required
                    $this->form_validation->set_rules('category', 'Category', 'required',array('required' => 'You must provide a title'));
                    // set rules for check review is required and length
                    $this->form_validation->set_rules('review', 'Review', 'required|min_length[10]|max_length[500]',array('required' => 'You must provide a review','min_length' => 'Your review must have 10 characters', 'max_length' => 'Your review at most have 500 characters'));
                    
                    if($this->form_validation->run()==TRUE){
                        $title = $this->input->post('title');
                        $category = $this->input->post('category');
                        $review = $this->input->post('review');
                        $location = $this->input->post('location');
                        
                        $countfiles = count($_FILES['userfile']['name']);
                        for ($i = 0; $i < $countfiles; $i++) {
                            if(!empty($_FILES['userfile']['name'][$i])) {
                                $_FILES['file']['name'] = $_FILES['userfile']['name'][$i];
                                $_FILES['file']['type'] = $_FILES['userfile']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
                                $_FILES['file']['error'] = $_FILES['userfile']['error'][$i];
                                $_FILES['file']['size'] = $_FILES['userfile']['size'][$i];
                                                                                            
                                if($this->upload->do_upload('file')){
                                $uploadData = $this->upload->data();
                                $file_name = $uploadData['file_name'];
                                $data['filenames'][] = '/NutriologyPie/assets/img/'.$file_name;
                                } else {
                                    $data['file_error'] = 'File upload failed. <br/>';
                                }
                            } else {
                                $data['file_error'] = 'No files';
                            }
                        }
                        $this->file_model->upload_files($profile_username,$title,$category,$review,$email,$path,$location,serialize($data['filenames']));
                
                        // $comment_data = $this->user_model->get_comment_data();
                        // $data['comment_data'] = $comment_data;
                        if ($data['membership'] != 'Pro') {
                            $data['post'] = 'disabled';
                        } else {
                            $data['post'] = '';
                        }
                        $this->load->view('discuss',$data);
                    }else{
                        $this->load->view('post',$data);
                        $this->load->view('template/footer');
                    }
				}
			}else{
				$data['error']= "<div class=\"alert alert-danger\" role=\"alert\"> You need to log in to post reviews!! </div> ";
				$this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
                $this->load->view('template/footer');
			}
		}else{
            $profile_username = $this->session->userdata('username');
            $current_data = $this->user_model->get_data($profile_username);
            $data['username'] = $current_data->username;
            $data['email'] = $current_data->email;
            $data['phone'] = $current_data->phone;
            $data['membership'] = $current_data->membership;
            $data['path'] = $current_data->path;
            $data['birthday'] = $current_data->birthday;
            $email = $current_data->email;
            $path = $current_data->path;

            // Upload files
            $this->load->model('file_model');
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 100000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;
            $this->load->library('upload', $config);
    
            // set rules for check title is required
            $this->form_validation->set_rules('title', 'Title', 'required',array('required' => 'You must provide a title'));
            // set rules for check category is required
            $this->form_validation->set_rules('category', 'Category', 'required',array('required' => 'You must provide a title'));
            // set rules for check review is required and length
            $this->form_validation->set_rules('review', 'Review', 'required|min_length[10]|max_length[500]',array('required' => 'You must provide a review','min_length' => 'Your review must have 10 characters', 'max_length' => 'Your review at most have 500 characters'));
            
            if($this->form_validation->run()==TRUE){
                $title = $this->input->post('title');
                $category = $this->input->post('category');
                $review = $this->input->post('review');
                $location = $this->input->post('location');

                $countfiles = count($_FILES['userfile']['name']);
                for ($i = 0; $i < $countfiles; $i++) {
                    if(!empty($_FILES['userfile']['name'][$i])) {
                        $_FILES['file']['name'] = $_FILES['userfile']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['userfile']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['userfile']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['userfile']['size'][$i];
                                                                                     
                        if($this->upload->do_upload('file')){
                        $uploadData = $this->upload->data();
                        $file_name = $uploadData['file_name'];
                        $data['filenames'][] = '/NutriologyPie/assets/img/'.$file_name;
                        } else {
                            $data['file_error'] = 'File upload failed. <br/>';
                        }
                    } else {
                        $data['file_error'] = 'No files';
                        $data['filenames'] = "";
                    }
                }
                $this->file_model->upload_files($profile_username,$title,$category,$review,$email,$path,$location,serialize($data['filenames']));                
                
                // $comment_data = $this->user_model->get_comment_data();
                // $data['comment_data'] = $comment_data;
                if ($data['membership'] != 'Pro') {
                    $data['post'] = 'disabled';
                } else {
                    $data['post'] = '';
                }
                $this->load->view('discuss',$data);
            }else{
                $this->load->view('post',$data);
            }

		}

    }
}
?>