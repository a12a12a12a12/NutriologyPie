<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//put your code here
class Verify_model extends CI_Model{

    public function verify_code($email){
        $code = mt_rand(100000,999999);
        $data = array(
            'email' => $email,
            'code' => $code
        );
        $this->db->insert('email_verification',$data, array('email' => $email));
        return $code;
    }

    public function check_email_in_verify($email){
        $this->db->where('email',$email);
        $result = $this->db->get('email_verification');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function check_email($email){
        $this->db->where('email',$email);
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }
}