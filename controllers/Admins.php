<?php

class Admins extends BaseController{

public function index(){
  //load model/post.php file
    $this->loadModel('Post');
// and get the function
    $posts = $this->Post->getAllPosts();
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


    if(empty($postTitle||$postChapo||$postContent )){
        // check if the fields are empty
                header("location:/createpost?error=emptyInput");
                      throw new \Exception('Empty input');
            }
    
            if ($filename && $templateName)  {
                $image= move_uploaded_file($templateName, "public/images/".$filename);
                echo 'image was successfully saved in image file';
             }
// var_dump($userid,$postTitle,$postChapo,$postContent,$filename);
// die;

             $this->Post->setPost($userid,$postTitle,$postChapo,$postContent,$filename); 
             echo 'post was successfully saved in the database';
             header("location:/admins/index/".$userid);
    }


$this->render('createpost');
}

// saving the image in images folder
private function uploadImage(){
    $result;
    $msg;
     //move image file to the image folder 
    if($this->filename && $this->templateName){
       
       
       $image= move_uploaded_file($this->templateName, "public/images/".$this->filename);
      
        $msg = "Image uploaded successfully";
        $result= true;
    } else{
        $result= false;
        $msg = "Failed to upload image";
  }
  return $result;
  
  
}

public function publicpost($id){

   //load model/post.php file
   $this->loadModel('Post');
   $post = $this->Post->publicPost($id);

   $this->render('publicpost');
}




}
