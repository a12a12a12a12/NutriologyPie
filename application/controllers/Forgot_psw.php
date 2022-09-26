<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_psw extends CI_Controller
{
    public function index()
    {
//        $this->load->model('user_model');
        $this->load->view('template/header');
        $this->load->view('forgot_psw');
        $this->load->view('template/footer');
    }
}
?>
