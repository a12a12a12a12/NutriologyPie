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
        $this->db->select("*");
        $this->db->from("message");
        $this->db->like('username', $username);
        $this->db->like('with_who', $with_who);
        $this->db->order_by('id', 'ASC');
        return $this->db->get();
    }
}