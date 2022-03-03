<?php

class Users extends BaseController{

public function index($userid){
  //load model/post.php file
    $this->loadModel('Post');
// and get the function
    $posts = $this->Post->getAllPostsForOneUser($userid);
  //rending the log user view
$this->render('index',['posts'=>$posts]);
  
}

}
