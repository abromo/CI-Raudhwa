<?php
 class Posts extends  CI_Model{
     function get_latest_posts (){
         $q = "SELECT * FROM POSTS P,ARTICLES A WHERE P.post_id=A.post_id ORDER BY P.created_date DESC";
         $posts = $this->db->query($q);
         return $posts->result_array();
     }

     function get_random_article(){
         $q = "SELECT * FROM POSTS P,ARTICLES A WHERE P.post_id = A.post_id ORDER BY RAND() limit 1";
         $posts = $this->db->query($q);
         $post = $posts->result_array();
         return $post[0];
     }

     function get_post($id){
         $q = "SELECT * FROM POSTS P,ARTICLES A WHERE P.post_id='$id' AND A.post_id ='$id'";
         $posts = $this->db->query($q);
         $post = $posts->result_array();
         return $post[0];
     }
 }