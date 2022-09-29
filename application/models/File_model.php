<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class File_model extends CI_Model{

    // upload file
    public function upload($filename, $path, $username){
        $origin_username = $this->session->userdata('username'); //getting origin username from session

        $data = array(
            'filename' => $filename,
            'path' => $path
        );
        // $query = $this->db->update('users', $upload_data, array('username' => $origin_username));
        $query = $this->db->update('users', $data, array('username' => $origin_username));

        $data_path = array('path'=>$path);
        $query = $this->db->update('comment',$data_path,array('username'=>$origin_username));
    }

    public function upload_files($profile_username,$title,$category,$review,$email,$path,$location,$fileupload){
        $data_fileupload = array(
            'username' => $profile_username,
            'title' => $title,
            'category' => $category,
            'reviews' => $review,
            'email' => $email,
            'path' => $path,
            'location' => $location,
            'fileupload'=>$fileupload
        );
        $query = $this->db->insert('comment',$data_fileupload);
    }

    function fetch_data($query)
    {
        if($query == '')
        {
            return null;
        }else{
            $this->db->select("*");
            $this->db->from("files");
            $this->db->like('filename', $query);
            $this->db->or_like('username', $query);
            $this->db->order_by('filename', 'DESC');
            return $this->db->get();
        }
    }
}