<?php

namespace view;
use models\Posts;

class PostsView extends Posts{

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
 

}