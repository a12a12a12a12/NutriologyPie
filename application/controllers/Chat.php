<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends CI_Controller {
    public function index() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('chat');
        $this->load->view('template/footer');
    }
}