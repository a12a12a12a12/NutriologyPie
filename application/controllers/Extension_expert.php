<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extension_expert extends CI_Controller {
	public function index()
	{
		session_start();
		$data['error']= "999999";
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->view('components/header');

		$urlData = $this->input->get('urlData');

		$jsonData = json_decode($urlData, true);

		echo $this->input->get('urlData');
		echo $jsonData['username'];


		$profile_username = $this->session->userdata('username');
		// $current_data = $this->user_model->get_data($profile_username);
		// $data['username'] = $current_data->username;
		// $data['profile_photo'] = $current_data->path;

		// if取不到login的话 做一个login界面让用户login

		$data['profile_username']= $profile_username;

		// load view
		$this->load->view('extension_expert',$data);
	}

	// check if 有没有登录
	public function checkLogin() {
		$state = $this->session->userdata('logged_in');
		if ($state) {
			echo "Success Login";
		} else {
			echo "Please login to use our extension to have a better experience";
		}
	}


	// 爬虫入口
	public function getUrlData() {
		$session_write_close();
		$title = $this->input->post('message');
		echo $title;
		
		// 3个类似article
		return $title;
	}

	//save the comment
	public function testing()
	{	
		$category = $this->input->get('category');
		$comment = $this->input->get('content');
		$rating = $this->input->get('rate');
		$this->load->model('extension_model');
		$this->extension_model->expert_add_article($category, $comment, $rating, $rating, $rating);
		echo $category;
		echo $comment;
		echo $rating;
	}

	//return json data of all articleList
	public function articleList(){
		$title = $this->input->post('message');
		echo $title;
		echo "<br>";
		// echo $this->getUrlData();
		echo "<br>";
		echo "<br>";

		$this->load->model('Article_model');
		$art_infor = $this->Article_model->get_all_article();
		if($art_infor != null){
			echo json_encode($art_infor); //send result back
		}else{
			echo  ""; // no result found
		}
	}



	//number of click add++
	public function clickIncrease()
	{	
		//判断当前url是否存在在article表如果存在click++
		echo "click++";
	}
}
?>