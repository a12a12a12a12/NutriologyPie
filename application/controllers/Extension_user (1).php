<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extension_user extends CI_Controller {
	public function index()
	{
		session_start();
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');

		// $this->load->view('components/header');
		
		$profile_username = $this->session->userdata('username');
		$current_data = $this->user_model->get_data($profile_username);
		$data['username'] = $current_data->username;
		$data['profile_photo'] = $current_data->path;

		// 看效果 
		$link = 'https://www.healthline.com/nutrition/healthy-eating-on-the-go';
		$is_saved = $this->extension_model->check_article($link);

		$article_infor = $this->extension_model->get_article_by_link($link);
		$rates = $this->extension_model->get_article_rate($link);
		$article_rate='';
		// comment 区域
		if($is_saved){
			// 文章评分
			foreach($rates as $rate){
				$article_rate = $rates->avg_rating;
			}

			$article_comment='';
			foreach($article_infor as $article){
				$article_comment .='
				<div class="comment">
					<p>'.$article->comment.'</p>
				</div>
				';
			}
		}
		else{
			$article_rate = 'No rate for this article';

			$article_comment='
				<p>This article have no comment yet</p>
			';
		}
		$data['article_comment'] = $article_comment;
		$data['article_rate'] = $article_rate;

		// 推荐article区域
		// 如果没有推荐，把数据库前三扔出来
		$top_articles = $this->extension_model->get_top();
		$similar_article = '';
		foreach($top_articles as $article){
			$similar_article .='
			<div class="article">
					<div class="col-auto">
					<a href="'.$article->link.'">
						<img class="similar" src="https://deco3801-numpy.uqcloud.net'.$article->path.'" alt="information">
					</a>
					<p class="title text-center">'.$article->title.'</p>
				</div>
			</div>';
		}
		$data['similar_article'] = $similar_article;
		
		// load view
		$this->load->view('extension_user',$data);
	}
}
?>