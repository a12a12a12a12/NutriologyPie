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
		$this->load->model('article_&comment_model');
		$this->load->model('user_model');
		// expert id = 2
		$artical_list = $this->article_model->get_infor("2");

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

		// 这里是去单纯看效果
		$db_data = $this->user_model->get_data("HeyMiaaa");

		$data['username'] = $db_data->username;
		$data['email'] = $db_data->email;
		$data['phone'] = $db_data->phone;
		$data['membership'] = $db_data->membership;
		$data['profile_photo'] = $db_data->profile_photo;
		$data['birthday'] = $db_data->birthday;
		$data['verify_status'] = $db_data->is_expert;

		// 这边是检查用户是否登录 用session来获取用户信息
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
			

			$this->load->view('profile1', $data); //if user already logined show payment page
		// }
		// $this->load->view('template/footer');
	}
}
?>
