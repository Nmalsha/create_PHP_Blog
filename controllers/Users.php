<?php
class Users extends BaseController{

public function index(){

  $this->loadModel('Post');
 //$posts= $this->Post->getAllPostsForOneUser($userid);
 // $template = $this->twig->load('posts/index.html');
 // echo $template->render([]);
  //$posts= $this->Post->getAllPosts();

  //calling the index views  to display the posts
 
$this->render('index',['posts'=>$posts]);
}
}