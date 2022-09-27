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

     // Sign up data insert to Phpmyadmin users table
     public function signup($email, $username, $password){
         $signup_data = array(
             'email' => $email,
             'username' => $username,
             'password' => $password
         );
         $this->db->insert('users', $signup_data);
     }
}
?>
