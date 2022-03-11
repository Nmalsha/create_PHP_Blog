<?php

class Posts extends BaseController
{

    public function index()
    {

        $this->loadModel('Post');

        // $template = $this->twig->load('posts/index.html');
        // echo $template->render([]);
        $posts = $this->Post->getAllPublishedPosts();

        //calling the index views  to display the posts

        $this->render('index', ['posts' => $posts]);
    }

    public function read($id)
    {

        $this->loadModel('Post');
        $post = $this->Post->getOnePost($id);

        $this->loadModel('Comment');
        $comments = $this->Comment->getAllPublishedComment($id);
        $this->loadModel('Login');
        // $users = $this->Login->getAllPublishedComment($id);
        // var_dump($comments);
        // die;
        //calling to read post view
        $this->render('read', ['post' => $post, 'comments' => $comments]);
    }

    public function comment($postid)
    {
        echo $postid;
        $this->loadModel('Comment');
        $comment = $_POST['comment'];
        $userId = $_POST['userId'];
        $username = $_POST['username'];

        $this->Comment->createComment($userId, $username, $postid, $comment);
        header("location:/posts/read/" . $postid);

    }

}
