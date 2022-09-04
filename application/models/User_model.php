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

    public function regular_signup($username, $password, $email) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('regular_user');
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        if($result->num_rows() == 1){
            return false;
        } else {
            $data = array(
                'username' => $username,
                'password' => $encrypted_password,
                'email' => $email,
            ); 
            $this->db->insert('regular_user', $data);
            return true;
        }
    }

    public function check($username) {
        $this->db->where('username', $username);
        $result = $this->db->get('regular_user');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function password_strength($password) {
        if (!empty($password)) {
            if (preg_match("/[0-9]+/",$password)){
                if (preg_match("/[a-z]+/",$password) || preg_match("/[A-Z]+/",$password)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_data($username){
        // 获取数据库中的数据
		$sql = "SELECT * FROM regular_user where username = '$username'";
        $query = $this->db->query($sql);
        $user = $query->row();
        return $user;
	}
}
?>
