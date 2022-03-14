<?php

class Admins extends BaseController
{

    public function index()
    {
        //load model/post.php file
        $this->loadModel('Post');
        // and get the function
        $posts = $this->Post->getAllPosts();
        //rending the log user view
        $this->render('index', ['posts' => $posts]);

    }

    public function createpost($userid)
    {
        //load model/post.php file
        $this->loadModel('Post');

        if ($this->request->get('submit') !== null) {

            $postTitle = htmlspecialchars($this->request->get('postTitle'));
            $postChapo = htmlspecialchars($this->request->get('chapo'));
            $postContent = htmlspecialchars($this->request->get('contenue'));

            //image file
            $postImage = ($this->files->get["fileToUpload"]);
            var_dump($postImag);

            die;
            $filename = $postImage["name"];
            $templateName = $postImage["tmp_name"];

            if (empty($postTitle || $postChapo || $postContent)) {
                // check if the fields are empty
                header("location:/createpost?error=emptyInput");
                throw new \Exception('Empty input');
            }

            if ($filename && $templateName) {
                $image = move_uploaded_file($templateName, "public/images/" . $filename);

                echo 'image was successfully saved in image file';
            }

            $this->Post->setPost($userid, $postTitle, $postChapo, $postContent, $filename);
            echo 'post was successfully saved in the database';
            header("location:/admins/index/" . $userid);
        }

        $this->render('createpost');

    }
//Public the post
    public function publicpost($id)
    {

        //load model/post.php file
        $this->loadModel('Post');
        $post = $this->Post->publicPost($id);
        header("location:/admins/index/" . $userid);

    }
//Delete post with comments
    public function delete($id)
    {
        //load model/post.php file
        $this->loadModel('Post');
        $post = $this->Post->deletePost($id);
//load model/Comment.php file
        $this->loadModel('Comment');
        $comments = $this->Comment->deleteCommentsWithPost($id);
        header("location:/admins/index/" . $userid);

    }
//Edit post
    public function editpost($id)
    {

        $this->loadModel('Post');
        $post = $this->Post->getOnePost($id);
        //Catching edited infos
        if ($this->request->get('submit') !== null) {

            $newPostTitle = htmlspecialchars($this->request->get('postTitle'));
            $newPostChapo = htmlspecialchars($this->request->get('chapo'));
            $newPostContent = htmlspecialchars($this->request->get('contenue'));
            $oldImage = ($this->request->get('image'));

//if the user upload a image file
            if (isset($_FILES["fileToUpload"])) {
                $newPostImage = ($_FILES["fileToUpload"]);
                $newFilename = $newPostImage["name"];
                $newTemplateName = $newPostImage["tmp_name"];

            }
            // if the user dont update a new image , get the old image
            $oldImage = ($this->request->get('image'));
            $newFilename = $oldImage;
            //save new image to the DB
            $image = move_uploaded_file($newTemplateName, "public/images/" . $newFilename);

            echo 'image will be the old image';
            header("location:/admins/index/" . $userid);
// calling the function to edit the post
            $this->Post->editPost($id, $newPostTitle, $newPostChapo, $newPostContent, $newFilename);
            echo ' The post is successfullt updated';

        }

        $this->render('editpost', ['post' => $post]);
    }

    public function manageuser()
    {
        // load model/Login.php file
        $this->loadModel('Login');
        // and get the function
        $users = $this->Login->getAllUsers();

        //rending the log user view
        $this->render('manageuser', ['users' => $users]);

    }

    public function deleteuser($id)
    {
        // load model/Login.php file
        $this->loadModel('Login');
        // and get the function
        $user = $this->Login->deleteUser($id);
        echo "User successfully deleted";
        header("location:/admins/manageuser/");

    }

    public function managecomment()
    {
        // load model/Login.php file
        $this->loadModel('Comment');
        // and get the function
        $comments = $this->Comment->getAllComment();

        //rending the log user view
        $this->render('managecomment', ['comments' => $comments]);

    }

    //Public the post
    public function publicComment($id)
    {

        //load model/Comment.php file
        $this->loadModel('Comment');
        // and get the function
        $Comment = $this->Comment->publicComment($id);
        header("location:/admins/managecomment");

    }

    public function deletecomment($id)
    {
        echo $id;
        //load model/Comment.php file
        $this->loadModel('Comment');
        // and get the function
        $commente = $this->Comment->deleteComment($id);

        header("location:/admins/managecomment/");

    }

}
