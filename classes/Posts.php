
<?php
class Posts extends Dbh{
    
//setting values to the database
    protected function setPost ($userid,$postTitle,$postChapo,$postContent,$filename){
        
        $stmt = $this->connect()->prepare('INSERT INTO posts( userId,postTitle,postChapo,postContent,postImage) VALUES (?,?,?,?,?);'); 
        if(!$stmt->execute(array($userid,$postTitle,$postChapo,$postContent,$filename))){
            $stmt=null;
           
    
        }
   
    $stmt=null;
   
    }
  //get All Posts

  Protected function getAllPostsForOneUser($userid){
    

    $sql="SELECT * FROM posts WHERE userId=$userid ORDER BY postCreatedOn" ;
  
    $stmt = $this->connect()->prepare($sql);
    var_dump($stmt);
    die;
    if(!$stmt->execute(array($userid,$postTitle,$postChapo,$postContent,$filename))){
        $stmt=null;
        header("location:../logUserView.php?error=statment failed");
        exit();

    }

    if($stmt->rowCount() == 0){
        $stmt=null;
        header("location:../logUserView.php?error=usernotfound");
                exit();
    
       }
       $posts = $stmt->fetchAll();
       return $posts;
       

}




}
