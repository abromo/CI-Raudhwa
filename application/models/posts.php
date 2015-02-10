<?php
 class Posts extends  CI_Model{
     function get_latest_posts (){
         $q = "SELECT * FROM POSTS";
         $posts = $this->db->query($q);
         return $posts->result_array();
     }
 }