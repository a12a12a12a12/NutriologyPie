<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Article_model extends CI_Model{

    // MIa写的model用于收藏夹ranking_list

    // get art_infor from db by expert_id
    public function get_infor($expert_id) {
        $query = "select * from rating_list where expert_id = '$expert_id' ";
        $art_query = $this->db->query($query);
        $art_infor= $art_query->result();
        return $art_infor;
    }


    //                   ------------------ 南山 ------------------

    // get article from db by article_category
    public function get_article($category) {
        $query = "SELECT articles.link,articles.title,AVG(article_comment.rating) as avg_rating FROM articles,article_comment where category = '$category' and articles.article_id = article_comment.article_id GROUP BY articles.article_id ORDER BY avg_rating DESC";
        $art_query = $this->db->query($query);
        $art_infor= $art_query->result();
        return $art_infor;
    }

    // get top article from db by article_category
    // public function get_top_article($category) {
    //     $query = "SELECT articles.link,articles.title,AVG(article_comment.rating) FROM articles,article_comment where category = '$category' and articles.article_id = article_comment.article_id GROUP BY articles.article_id ORDER BY AVG(article_comment.rating) DESC LIMIT 1";
    //     $art_query = $this->db->query($query);
    //     $art_infor= $art_query->result();
    //     return $art_infor;
    // }
 }

?>