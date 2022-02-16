<?php

namespace view;

class PostsView extends Posts{

    public function showPosts($userid)
    
    {
        
        $results = $this->getAllPostsForOneUser($userid);
      
echo $results;
echo $results[0]['username'] . "" .$results[0]['email'];
    }


}