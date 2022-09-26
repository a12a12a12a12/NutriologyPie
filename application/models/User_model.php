<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table;

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'users';
    }

    public function get_all()
    {
        $query = "select * from users";
        $information_query = $this->db->query($query);
        $user_data = $information_query->row();
        return $user_data;

    }

    public function check_exist($username, $email)
    {
        $this->db->where('name', $username)->or_where('email', $email);
        $res = $this->db->get($this->table);

        return $res->num_rows() > 0 ? TRUE : FALSE;
    }


    public function insert($username, $email, $password, $token) 
    {
        if (!$this->check_exist($username, $email))
        {
            $data = array(
                'id' => uniqid(),
                'name' => $username,
                'email' => $email,
                'passwd' => $password,
                'role' => 0,
                'image' => 'uploads/default.png',
                'verify_token' => $token,
                'created_at' => time(),
                'updated_at' => time()
            );

            return $this->db->insert($this->table, $data);
        }
        return FALSE;
    }

    public function select($query)
    {
        $count = 0;
        foreach ($query as $key => $value) {
            if ($count == 0) $this->db->where($key, $value);
            else $this->db->or_where($key, $value);
        }
        $res = $this->db->get($this->table);
        return $res->result();
    }

    public function update($data, $query)
    {
        return $this->db->update($this->table, $data, $query);
    }

    public function update_verify($username, $token='')
    {
        $query = array('name' => $username);
        $user = $this->select($query)[0];
        $user->verify_token = $token;
        return $this->db->update($this->table, $user, array('name' => $username));
    }

    public function get_logged_user()
    {
        $in_session = $this->session->userdata('logged_in') ? $this->session->userdata('username') : FALSE;
        if ($in_session) return $in_session;

        // if (get_cookie('token')) {
        //     // $token = get_cookie('token');
        //     $token = explode('-', $token);
        //     $id = $token[0];
        //     $token = $token[1];

        //     $query = array(
        //         'id' => $id
        //     );
        //     $res = $this->user_model->select($query);
        //     if (count($res) <= 0) {
        //         return FALSE;
        //     }
        //     else {
        //         if ($token == sha1($res[0]->email . $res[0]->passwd)) {
        //             $user_data = array(
        //                 'username' => $res[0]->name,
        //                 'logged_in' => TRUE
        //             );
        //             $this->session->set_userdata($user_data);
        //             return $res[0]->name;
        //         } else {
        //             return FALSE;
        //         }
        //     }
        // }
        // return FALSE;
    }

    public function get_logged_user_info()
    {
        $username = $this->session->userdata('logged_in') ? $this->session->userdata('username') : FALSE;
        $query = array(
            'name' => $username
        );
        $res = $this->user_model->select($query);
        return $res[0];
    }

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