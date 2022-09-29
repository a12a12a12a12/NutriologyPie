<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//put your code here
class Verify_model extends CI_Model{

    // email not in "email" database, insert
    public function verify_code($email){
        $code = mt_rand(100000,999999);
        $data = array(
            'email_address' => $email,
            'email_token' => $code
        );
        $this->db->insert('email',$data, array('email_address' => $email));
        return $code;
    }

    // email in "email" database, update
    public function verify_code_2($email){
        $code = mt_rand(100000,999999);
        $data = array(
            'email_address' => $email,
            'email_token' => $code
        );
        $this->db->update('email',$data, array('email_address' => $email));
        return $code;
    }

    public function check_email_in_verify($email){
        $this->db->where('email_address',$email);
        $result = $this->db->get('email');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function check_email_in_users($email){
        $this->db->where('email',$email);
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function get_token($email) {
        $email_info = "SELECT * FROM email where email_address = '$email' ";
        $query = $this->db->query($email_info);
        $user_data = $query->row();
        return $user_data->email_token;
    }
}