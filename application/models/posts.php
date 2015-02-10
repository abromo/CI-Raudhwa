<?php
 class Posts extends  CI_Model{
     function get_latest_posts (){
         $q = "SELECT * FROM POSTS P,ARTICLES A WHERE P.post_id=A.post_id";
         $posts = $this->db->query($q);
         return $posts->result_array();
     }
 }