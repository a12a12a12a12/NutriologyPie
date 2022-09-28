<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class information extends CI_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('article_model');
		$this->load->view('components/header');
		$article_list = $this->article_model->get_article('body health');
		$result="";
		foreach ($article_list as $article) {
			$result = $result.'
			<div class="more-topic">
				<a href="'.$article->link.'">
					<img class="ml-5 h-52 w-72 pb-2" src="http://localhost/NutriologyPie/assets/images/information.png" alt="information">
				</a>
				<h3 class="mt-2 text-left ml-4 text-[#0B6B2C] text-xl font-bold capitalize">'.$article->title.'</h3>
        	</div>
			';
		}
		$data['article_list'] = $result;
		$this->load->view('information',$data);
	}
}
?>