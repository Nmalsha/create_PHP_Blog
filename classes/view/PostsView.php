<?php

namespace view;
use models\Posts;

class PostsView extends Posts{
//function to show posts belongs to specific id
    public function showPosts($userid)
    
    {
        
        $results = $this->getAllPostsForOneUser($userid);
        $data = [
             'posts'=>$results
         ];

        // echo '<pre>';
        // var_dump($results);
        // echo '</pre>';
//require_once('logUserView.php');
              
        //     foreach ($results as $result);
//print_r( $results);
//
    //  echo $results[0]['userId'] . "" .$results[0]['postTitle'] . "" .$results[0]['postChapo'];
        return $data;
        
    }
 // function to show all posts
    public function showAllPosts()
    
    {
        
        $results = $this->getAllPosts();
        $data = [
             'posts'=>$results
         ];

        // echo '<pre>';
        // var_dump($results);
        // echo '</pre>';
//require_once('logUserView.php');
              
        //     foreach ($results as $result);
//print_r( $results);
//
    //  echo $results[0]['userId'] . "" .$results[0]['postTitle'] . "" .$results[0]['postChapo'];
        return $data;
        
    }  

}