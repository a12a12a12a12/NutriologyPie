<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class online_chat extends CI_Controller {
    public function index() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('online_chat');
        $this->load->view('template/footer');
    }

    public function chat_information(){
        session_start();
        $username = $this->session->userdata('username');
        $message = $_POST['message'];
        echo $message;
        $with_who = "Johnny";
        $this->load->model('chat_model');
        $this->chat_model->save_send_message($username, $with_who, $message);
        redirect('online_chat');
    }

    public function fatch_message() {
        $this->load->model('chat_model'); // load file_model 
        $username = $this->session->userdata('username');
        $with_who = "Johnny";
        echo 123; 
        $data = $this->chat_model->get_message($username, $with_who); //send query to file_model and put result to $data
            if(!$data == null){
                echo json_encode ($data->result()); //send result back
            }else{
                echo  ""; // no result found
            }
    }
}