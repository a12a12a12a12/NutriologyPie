<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function index()
    {
        $data['error'] = "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('signup', $data);
        $this->load->view('template/footer');
    }

}
?>
