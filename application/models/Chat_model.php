<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class Chat_model extends CI_Model{

    public function save_send_message($username, $with_who, $message){
        $message_data = array(
            'username' => $username,
            'with_who' => $with_who,
            'message' => $message
        );
        $this->db->insert('chat', $message_data);
    }

    public function get_message($username, $with_who)
    {
        $email_info = "SELECT * FROM chat where username = '$username' and with_who = '$with_who' ";
        $query = $this->db->query($email_info);
        $message_data = $query->result();
        return $message_data;
    }
}