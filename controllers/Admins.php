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

        if (isset($_POST['submit'])) {

            $postTitle = htmlspecialchars($_POST["postTitle"]);
            $postChapo = htmlspecialchars($_POST["chapo"]);

            $postContent = htmlspecialchars($_POST["contenue"]);
            //image file
            $postImage = ($_FILES["fileToUpload"]);
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
//Delete post
    public function delete($id)
    {
        $this->loadModel('Post');
        $post = $this->Post->deletePost($id);
        header("location:/admins/index/" . $userid);

    }

    public function editpost($id)
    {

        $this->loadModel('Post');
        $post = $this->Post->getOnePost($id);
        //Catching edited infos
        if (isset($_POST['submit'])) {
            $newPostTitle = htmlspecialchars($_POST["postTitle"]);
            $newPostChapo = htmlspecialchars($_POST["chapo"]);
            $newPostContent = htmlspecialchars($_POST["contenue"]);
            $oldImage = ($_POST["image"]);

//if the user upload a image file
            if (isset($_FILES["fileToUpload"])) {
                $newPostImage = ($_FILES["fileToUpload"]);
                $newFilename = $newPostImage["name"];
                $newTemplateName = $newPostImage["tmp_name"];

            }
            // if the user dont update a new image , get the old image
            $oldImage = ($_POST["image"]);
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

        $this->loadModel('Login');
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

        //load model/post.php file
        $this->loadModel('Comment');
        $Comment = $this->Comment->publicComment($id);
        header("location:/admins/managecomment");

    }

}
