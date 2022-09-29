<!-- 只负责筛选文章和对应的comment（by Username) From Comment表 需要连表 -->
<!-- Username:是专家（is_expert=1) -->
<!-- 为View服务，不允许增删改查 -->

<!-- 可以根据article——id筛选某篇文章 -->


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Article_Comment_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // get all articles information
    // return an array of article objects- title, category, link, comment and rating
    public function get_infor($username){
        $query = "select * 
        from article_comment a, articles b 
        where a.article_id = b.article_id
         and a.username = '$username'";
        $article_query = $this->db->query($query);
        $article_data = $article_query->row();
        return $article_data;
    }
 }