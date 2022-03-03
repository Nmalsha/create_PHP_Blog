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

public function createpost($userid)
{
    //load model/post.php file
    $this->loadModel('Post');

    if(isset($_POST['submit'])){

        $postTitle = htmlspecialchars($_POST["postTitle"]);
        $postChapo = htmlspecialchars($_POST["chapo"]);
    
     $postContent = htmlspecialchars($_POST["contenue"]);
     //image file
     $postImage =($_FILES["fileToUpload"]);
    $filename= $postImage["name"];
    $templateName = $postImage["tmp_name"];    
    var_dump($_FILES);var_dump($userid);

    
    }


$this->render('createpost',['posts'=>$posts]);
}
}
