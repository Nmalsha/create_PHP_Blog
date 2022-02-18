<?php 
namespace controllers;
use models\Posts;
class PostController extends Posts{
    private $userid;
    private $postTitle;
    private $postChapo;
    private $postContent;
    private $postImage;
    private $filename;
    private $templateName;

    public function __construct($userid,$postTitle,$postChapo,$postContent,$postImage,$filename,$templateName){
      
        $this->userid = $userid;       
$this->postTitle = $postTitle;
$this->postChapo = $postChapo;
$this->postContent = $postContent;
$this->postImage =$postImage;
$this->filename = $filename;
$this->templateName = $templateName;


    }
   
public function createPost(){
   
   
    if($this->emptyInputSignup()===false){
        // echo "emptyInput"
                header("location:../createPost.php?error=emptyInput");
               
        throw new \Exception('Empty input');
            }
            if ($this-> uploadImage()===false)  {
                echo "Image did not save to the folder";
             }
             // saving in the DB
            $this->setPost($this->userid,$this->postTitle,$this->postChapo,$this->postContent,$this->filename);  
}
//checking if the fields are empty
    private function  emptyInputSignup(){
$result;

if(empty($this->postTitle)||empty( $this->postChapo)||empty($this->postContent) ||empty($this->filename)){
   
    $result= false;

}else{
    $result= true;
}

return $result;
    }
// saving the image in images folder
    private function uploadImage(){
        $result;
        $msg;
         //move image file to the image folder 
        if($this->filename && $this->templateName){
           
           
           $image= move_uploaded_file($this->templateName, "images/".$this->filename);
          
            $msg = "Image uploaded successfully";
            $result= true;
        } else{
            $result= false;
            $msg = "Failed to upload image";
      }
      return $result;
      
      
    }
}