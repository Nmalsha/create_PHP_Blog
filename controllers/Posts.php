<?php


class Posts extends BaseController{

    public function index(){

      $this->loadModel('Post');
     
     // $template = $this->twig->load('posts/index.html');
     // echo $template->render([]);
      $posts= $this->Post->getAllPublishedPosts();

      //calling the index views  to display the posts
     
    $this->render('index',['posts'=>$posts]);
    }


public function read($id)
{

  $this->loadModel('Post');
   $post = $this->Post->getOnePost($id);
   
   //calling to read post view
   $this->render('read',['post'=>$post]);
}




}