<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here
 class User_model extends CI_Model{

    // Log in
    public function login($username, $password){
        // Validate
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    // get data from database by username
    public function get_data($username){
         $full_infor = "SELECT * FROM users where username = '$username' ";
         $query = $this->db->query($full_infor);
         $user_data = $query->row();
         return $user_data;
    }

    public function check_username_indb($username){
         $this->db->where('username',$username);
         $result = $this->db->get('users');
         if($result->num_rows() == 1){
             return true;
         } else {
             return false;
         }
    }

    // Sign up data insert to Phpmyadmin users table
    public function signup($email, $username, $password){
         $signup_data = array(
             'email' => $email,
             'username' => $username,
             'password' => $password
         );
         $email_information = array(
            'email_address' => $email,
        );
         $this->db->insert('users', $signup_data);
         $this->db->insert('email', $email_information);
    }
     
    public function reset_user_password($password) {
        $email = $this->session->userdata('email'); //getting origin username from session
        
        $reset_pass_change = array(
            'password' => $password
        );
        $this->db->update('users', $reset_pass_change,array('email' => $email));
    }

    public function get_comment_data(){
        $full_infor = "SELECT * FROM comment order by id desc";
        $query = $this->db->query($full_infor);
        $comment_data = $query->result(); 
        return $comment_data;
    }
}
?>
