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

    // regular user register
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

    // expert register 还没写完
    public function expert_signup($username, $password, $email, $token) 
    {
        if (!$this->check($username, $email))
        {
            $data = array(
                'id' => uniqid(),
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'image' => 'uploads/default.png',
                'verify_token' => $token,
                'created_at' => time(),
                'updated_at' => time()
            );

            return $this->db->insert($this->table, $data);
        }
        return FALSE;
    }

    // Check username exists 修改了加了email,数据库改一下
    public function check($username, email) {
        $this->db->where('username', $username);
        $this->db->where('email', $email);
        $result = $this->db->get('regular_user');
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    // Check password_strength
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

    // 获取user全部信息
    public function get_all()
    {
        $query = "select * from users";
        $information_query = $this->db->query($query);
        $user_data = $information_query->row();
        return $user_data;

    }

    //检查 User 是否login
    public function get_logged_user()
    {
        $in_session = $this->session->userdata('logged_in') ? $this->session->userdata('username') : FALSE;
        if ($in_session) return $in_session;

        if (get_cookie('token')) {
            $token = get_cookie('token');
            $token = explode('-', $token);
            $id = $token[0];
            $token = $token[1];

            $query = array(
                'id' => $id
            );
            $res = $this->user_model->select($query);
            if (count($res) <= 0) {
                return FALSE;
            }
            else {
                if ($token == sha1($res[0]->email . $res[0]->passwd)) {
                    $user_data = array(
                        'username' => $res[0]->name,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($user_data);
                    return $res[0]->name;
                } else {
                    return FALSE;
                }
            }
        }
        return FALSE;
    }

    // 密码加密
    function encrypt($data, $key)  
    {  
        $key    =   md5($key);  
        $x      =   0;  
        $len    =   strlen($data);  
        $l      =   strlen($key);  
        $char   =   '';
        $str    =   '';
        for ($i = 0; $i < $len; $i++)  
        {  
            if ($x == $l)   
            {  
                $x = 0;  
            }  
            $char .= $key[$x];  
            $x++;  
        }  
        for ($i = 0; $i < $len; $i++)  
        {  
            $str .= chr(ord($data[$i]) + (ord($char[$i])) % 256);  
        }  
        return base64_encode($str);  
    }  

    // 密码解密
    function decrypt($data, $key)  
    {  
        $key = md5($key);  
        $x = 0;  
        $data = base64_decode($data);  
        $len = strlen($data);  
        $l = strlen($key); 
        $char   =   '';
        $str    =   ''; 
        for ($i = 0; $i < $len; $i++)  
        {  
            if ($x == $l)   
            {  
                $x = 0;  
            }  
            $char .= substr($key, $x, 1);  
            $x++;  
        }  
        for ($i = 0; $i < $len; $i++)  
        {  
            if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))  
            {  
                $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));  
            }  
            else  
            {  
                $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));  
            }  
        }  
        return $str;  
    }
}
?>

