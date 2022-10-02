<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends CI_Controller {
    public function index() {
        redirect(base_url().'home');
    }

    public function with($with_who=Null) {
        urldecode($with_who);
        // session_start();
        $data['error']= "";
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('components/header');
        if ($with_who == Null) {
            redirect(base_url().'home');
        }else{
            $username = "john";
            $this->load->model('chat_model');
            // $this->chat_model->send_message($username, $with_who, $message);
            $history_chat_users = $this->chat_model->get_history_chat_user($username,$with_who);
            $active_user = $this->chat_model->get_history_chat_user_active($username,$with_who);
            $history_chat_view = "";
            $data['active_user'] = $active_user[0];
            foreach ($history_chat_users as $users) {
                $history_chat_view = $history_chat_view.'
                <a class="expert" href="http://localhost/NutriologyPie/chat/with/'.$users->with_who.'">
                    <div class="expert-image">
                        <img class="h-20 w-20 rounded-full"
                            src="'.$users->path.'"
                            alt="profile images">
                    </div>
                    <div class="chart-infor">
                        <div class="expert-name text-[#BF6741] text-2xl font-bold pb-3">
                            '.$users->with_who.'
                        </div>
                        <div class="expert-job text-[#5C5C5C] text-base">
                            <p class="text-clip overflow-hidden ...">'.$users->message.'</p>
                        </div>
                    </div>
                    <div class="time">
                        <div class="time-text text-[#5C5C5C] text-xl">
                            '.explode(" ",$users->time)[1].'
                        </div>
                    </div>
                </a>
                ';
            }
            $data['chat_user_list'] = $history_chat_view;
            // $history_chat_message = $this->chat_model->get_history_chat_user($username,$with_who);
            $this->load->view('chat',$data);
        }
    }

    public function send_message() {
        // session_start();
        // $username = $this->session->userdata('username');
        $with_who = $this->input->get('with_who');
        $message = $this->input->get('message');
        urldecode($message);
        if ($with_who == Null) {
            redirect(base_url().'home');
        }
        if ($message == ""){
            redirect(base_url().'chat/with/'.$with_who);
        }
        $username = "john";
        echo $with_who;
        echo $message;
        $this->load->model('chat_model');
        $this->chat_model->send_message($username, $with_who, $message);
    }

    public function fetch_message() {
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('chat_model'); // load file_model 
        $with_who = $this->input->get('with_who');
        echo $with_who;
        $username = "john";
        // $with_who = "jerry";
        $data = $this->chat_model->get_message($username,$with_who); //send query to file_model and put result to $data
            if($data != null){
                echo json_encode ($data); //send result back
            }else{
                echo  ""; // no result found
            }

    }
}