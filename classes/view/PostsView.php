<?php

namespace view;
use models\Posts;

class PostsView extends Posts{

    public function showPosts($userid)
    
    {
        
        $results = $this->getAllPostsForOneUser($userid);

       
            foreach ($results as $result);

        echo $results[0]['userId'] . "" .$results[0]['postTitle'] . "" .$results[0]['postChapo'];
        
    }


}