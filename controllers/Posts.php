<?php


class Posts extends BaseController{

    public function index(){

      $this->loadModel('Post');
     
     // $template = $this->twig->load('posts/index.html');
     // echo $template->render([]);
      $posts= $this->Post->getAllPosts();

      //calling the index views  to display the posts
     
    $this->render('index',['posts'=>$posts]);
    }


public function read($id)
{
  echo $id;
// var_dump($id);
//  die;

  $this->loadModel('Post');
   $post = $this->Post->getOnePost($id);

   //calling to readpost view
   $this->render('read',['post'=>$post]);
}




}