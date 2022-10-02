<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class Chat_model extends CI_Model{

    public function send_message($username, $with_who, $message){
        $message_data = array(
            'username' => $username,
            'with_who' => $with_who,
            'message' => $message
        );
        $this->db->insert('chat', $message_data);
    }

    public function get_message($username, $with_who)
    {
        $email_info = "SELECT * from (SELECT * FROM chat WHERE username = '${username}' or username = '${with_who}') as chat_infor
        WHERE chat_infor.with_who = '${username}' or chat_infor.with_who = '${with_who}' ORDER BY chat_infor.time ASC;";
        $query = $this->db->query($email_info);
        $message_data = $query->result();
        return $message_data;
    }

    public function get_history_chat_user($username,$with_who)
    {
        $chat_user_list ="SELECT chat.*,users.username,users.path FROM chat,users
        WHERE id IN ( 
            SELECT SUBSTRING_INDEX(group_concat( id ORDER BY `time` DESC ), ',', 1 ) 
            FROM chat
            WHERE username = '${username}' AND with_who != '${with_who}'
            GROUP BY with_who
        ) AND chat.with_who = users.username Order By chat.time DESC;";
        $query = $this->db->query($chat_user_list);
        $message_data = $query->result();
        return $message_data;
    }

    public function get_history_chat_user_not_exist($username)
    {
        $chat_user_list ="SELECT chat.*,users.username,users.path FROM chat,users
        WHERE id IN ( 
            SELECT SUBSTRING_INDEX(group_concat( id ORDER BY `time` DESC ), ',', 1 ) 
            FROM chat
            WHERE username = '${username}'
            GROUP BY with_who
        ) AND chat.with_who = users.username Order By chat.time DESC;";
        $query = $this->db->query($chat_user_list);
        $message_data = $query->result();
        return $message_data;
    }

    public function get_history_chat_user_active($username,$with_who)
    {
        $chat_user_list ="SELECT chat.*,users.username,users.path,users.tag FROM chat,users
        WHERE id IN ( 
            SELECT SUBSTRING_INDEX(group_concat( id ORDER BY `time` DESC ), ',', 1 ) 
            FROM chat
            WHERE username = '${username}' AND with_who = '${with_who}'
            GROUP BY with_who
        ) AND chat.with_who = users.username;";
        $query = $this->db->query($chat_user_list);
        $message_data = $query->result();
        return $message_data;
    }

    public function get_history_chat_user_active_first($with_who)
    {
        $chat_user_list ="SELECT users.username as with_who,users.path,users.tag FROM users
        WHERE username = '${with_who}';";
        $query = $this->db->query($chat_user_list);
        $message_data = $query->result();
        return $message_data;
    }

    public function check_exist($username, $with_who){
        // Validate
        $this->db->where('username', $username);
        $this->db->where('with_who', $with_who);
        $result = $this->db->get('chat');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }
}