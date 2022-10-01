<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat2 extends CI_Controller {
    public function index() {
        session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('components/header');
        $this->load->view('chat2');
    }
}