<!-- 对于普通用户有收藏功能， From Favorite -->


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Favorite_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // get all articles information
    // return an array of article objects- title, category, link, comment and rating
    public function get_infor($username){
        $query = "select * 
        from wish_list a, articles b 
        where a.article_id = b.article_id
         and a.username = '$username'";
        $article_query = $this->db->query($query);
        $article_data = $article_query->result();
        return $article_data;
    }

    // count the number of records
    public function count_fav($username){
        $query = "select count(*) as count
        from wish_list a, articles b 
        where a.article_id = b.article_id
         and a.username = '$username'
         and a.status = 1";
        $article_query = $this->db->query($query);
        $article_data = $article_query->row();
        return $article_data->count;
    }

  
 }