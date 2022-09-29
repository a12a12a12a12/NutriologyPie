<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class expert extends CI_Controller {
    public function index() {
        // session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('expert');
        $this->load->view('template/footer');
    }
}
?>