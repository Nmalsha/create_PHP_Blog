<?php
class PostsView extends Posts{

    public function showPosts($userid)
 
    {
        
        $results = $this->getAllPostsForOneUser($userid);
        var_dump( $results);
        die;
echo $results;
echo $results[0]['username'] . "" .$results[0]['email'];
    }


}