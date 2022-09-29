<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\" style=\"text-align:center\"> You need to login first! </div> ";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('components/header');
		// 不知道数据库要改
		$this->load->model('article_comment_model');
		$this->load->model('user_model');
		$this->load->model('favorite_model');


		// if ($this->session->userdata('logged_in'))//check if user already login
		// {	
					$db_data = $this->user_model->get_data("jing");

					$data['username'] = $db_data->username;
					$data['email'] = $db_data->email;
					$data['phone'] = $db_data->phone;
					$data['membership'] = $db_data->membership;
					$data['profile_photo'] = $db_data->profile_photo;
					$data['birthday'] = $db_data->birthday;
					$data['verify_status'] = $db_data->email_status;

					if ( $this->user_model->check_expert('jing') ) {
						// username = jing 以下是专家页面
						$artical_list = $this->article_comment_model->get_infor("jing");
						$data['comment'] = $this->article_comment_model->count_comment("jing");

						$verified = '';
						foreach($artical_list as $artical){
					
							$verified .= '
							<div class="row">
								<div class="col-md-5">
									<a href="#">
									<img class="img-fluid rounded mb-3 mb-md-0" style="height:300px; width:700px" src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/02/dark-chocolate-bar-732x549-thumbnail-732x549.jpg?w=304" alt="">
									</a>
								</div>
								<div class="col-md-7">
									<h4 style="color:#C6643D">'.$artical->category.'</h4>
									<br>
									<h3>'.$artical->title.'</h3>
									<p style="font-size:25px"> Rating: '.$artical->rating.' </p>
									<br>
									<a class="btn btn-primary" href='.$artical_list->link.'>View Article</a>
								</div>
							</div>
							<hr>';
						}
						$data['verified'] = $verified;

						foreach($artical_list as $artical){
					
							$commented .= '
							<div class="row">
								<div class="col-md-10 offset-1">
									<h4 style="color:#C6643D">'.$artical->category.'</h4>
									<a class="text-black" href='.$artical_list->link.'> <p style="font-size:25px">'.$artical->title.'</p></a>
									<br>
									<h3 class="text-black"> Comment: '.$artical->comment.' </h3>
								</div>
							</div>
							<hr>';
						}
						$data['commented'] = $commented;

						// username = jing 以下是收藏夹页面
						$wish_list = $this->favorite_model->get_infor("jing");
						$data['fav'] = $this->favorite_model->count_fav("jing");

						$favorited = '';
						foreach($wish_list as $wish){

							$favorited .= '
							<div class="row">
								<div class="col-md-5">
								<img class="img-fluid rounded mb-3 mb-md-0" style="height:300px; width:700px" src="https://fmcggurus.com/wp-content/uploads/2019/06/apple-blue-background-close-up-1353366.jpg" alt="">
								</div>

								<div class="col-md-7 text-left" style="marign-top:30px">
									<br>

									<h4 style="color:#C6643D; marign-top:100px">'.$wish->category.'</h4>
									<br>
									<h3>'.$wish->title.'</h3>
									<p style="font-size:25px"> Rating: '.$artical->rating.' </p>
									<br>
									<a class="btn btn-primary" href='.$wish_list->link.'>View Article</a>
								</div>
							</div>
							<hr>';
						}
						$data['favorited'] = $favorited;

						// username = jing 以下是billing页面
						$bank_saved = $this->user_model->check_bank("jing");
						$data['bank_saved'] = $bank_saved;

						// load 专家view
						$this->load->view('profile1', $data);
					} 
					else {
						// username = jing 以下是普通用户页面
						$artical_list = $this->article_comment_model->get_infor("jing");

						$fav_list = '';
						foreach($artical_list as $artical){
						
							$fav_list .=' <div class="col-lg-4 col-md-6">
									<div class="card card-blog">
										<div class="card-image">
											<a href="#pablo">
												<img class="img" src="<?php echo base_url(); ?>assets/images/food1.png">
											</a>
										</div>
										<div class="card-body">
											<h6 class="card-category text-info">'.$artical->article_category.'</h6>
											<h4 class="card-title">
												<a href='.$artical_list->article_link.'>'.$artical->article_title.'</a>
											</h4>
											<p class="card-description">
												This is description
											</p>
										</div>
									</div>
								</div>';
						}
						$data['fav_list'] = $fav_list;
					}
			// }
			// else{
			// 	redirect('login'); // 没登陆回login
			// }
		
	}
}
				
			
		


		
		

		// // 这边是检查用户是否登录 用session来获取用户信息
		// if (!$this->session->userdata('logged_in'))//check if user already login
		// {	
		// 	if (get_cookie('remember')) { // check if user activate the "remember me" feature  
		// 		$username = get_cookie('username'); //get the username from cookie
		// 		$password = get_cookie('password'); //get the username from cookie
		// 		if ( $this->user_model->login($username, $password) )//check username and password correct
		// 		{
		// 			$user_data = array(
		// 				'username' => $username,
		// 				'logged_in' => true 	//create session variable
		// 			);
		// 			$this->session->set_userdata($user_data); //set user status to login in session
		// 			$session_username = $this->session->userdata('username');
		// 			$db_data = $this->user_model->get_data($session_username);

		// 			$data['username'] = $db_data->username;
		// 			$data['email'] = $db_data->email;
		// 			$data['phone'] = $db_data->phone;
		// 			$data['name'] = $db_data->name;
		// 			$data['membership'] = $db_data->membership;
		// 			$data['country'] = $db_data->country;
		// 			$data['profile_photo'] = $db_data->profile_photo;
		// 			$data['verify_status'] = $db_data->verify_status;
		// 			$this->load->view('profile', $data); //if user already logined show payment page
		// 		}
		// 	}else{
		// 		$data['error']= "<div class=\"alert alert-danger\" role=\"alert\" style=\"text-align:center\"> You need to login first! </div> ";
		// 		$this->load->view('login', $data);	//if username password incorrect, show error msg and ask user to login
		// 	}
		// }else{
		// 	$session_username = $this->session->userdata('username');
		// 	$db_data = $this->user_model->get_data($session_username);

		// 	$data['username'] = $db_data->username;
		// 	$data['email'] = $db_data->email;
		// 	$data['phone'] = $db_data->phone;
		// 	$data['membership'] = $db_data->membership;
		// 	$data['profile_photo'] = $db_data->profile_photo;
		// 	$data['birthday'] = $db_data->birthday;
		// 	$data['verify_status'] = $db_data->is_expert;
			

			// $this->load->view('profile1', $data); //if user already logined show payment page
		// }
		// $this->load->view('template/footer');
?>
