<!-- 只负责增改查  from article -->
<!-- Only use for extension -->

<!-- 为information页面拉取数据 -->


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
        $query = "SELECT * FROM articles where category = '$category'";
        $art_query = $this->db->query($query);
        $art_infor= $art_query->result();
        return $art_infor;
    }
 }

?>