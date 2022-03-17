<?php
use Symfony\Component\HttpFoundation\RedirectResponse;

class Posts extends BaseController
{

    public function index()
    {

        $this->loadModel('Post');

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

        //calling to read post view
        $this->render('read', ['post' => $post, 'comments' => $comments]);
    }

    public function comment($postid)
    {
        echo $postid;
        $this->loadModel('Comment');
        $comment = $this->request->get('comment');
        $userId = $this->request->get('userId');
        $username = $this->request->get('username');

        $this->Comment->createComment($userId, $username, $postid, $comment);
        $url = "http://localhost:8080/posts/read/$postid";
        $response = new RedirectResponse($url);
        $response->send();

    }

}
