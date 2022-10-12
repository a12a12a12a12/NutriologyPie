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

	// 爬虫入口
	public function getUrl() {
		return "888";
	}


	//return json data
	public function articleList(){
		$this->load->model('Article_model');
		$art_infor = $this->Article_model->get_all_article();
		if($art_infor != null){
			echo json_encode($art_infor); //send result back
		}else{
			echo  ""; // no result found
		}

	}

	//save the comment
	public function testing()
	{	
		$category = $this->input->get('category');
		$comment = $this->input->get('content');
		$rate = $this->input->get('rate');
		$abc = $this->getUrl();
	}

	//number of click add++
	public function clickIncrease()
	{	
		//判断当前url是否存在在article表如果存在click++
		echo "click++";
	}
}
?>