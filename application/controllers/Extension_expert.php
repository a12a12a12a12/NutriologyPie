<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extension_expert extends CI_Controller {
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->view('components/header');
		$this->load->view('extension_expert');
	}

	public function getUrl() {
		return "888";
	}

	public function testing()
	{	

		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->view('components/header');
		// $this->load->view('extension_expert');
		$testing = $this->input->get('category');
		echo "999";
		echo $testing;
		$abc = $this->getUrl();
		echo $abc;

	}
}
?>