<?php
namespace models;
 

class Posts extends Dbh{
    
//setting values to the database
    protected function setPost ($userid,$postTitle,$postChapo,$postContent,$filename){
        //crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO posts( userId,postTitle,postChapo,postContent,postImage) VALUES (?,?,?,?,?);'); 
        if(!$stmt->execute(array($userid,$postTitle,$postChapo,$postContent,$filename))){
            $stmt=null;
            throw new \Exception('statement failled');
    
        }
   
    $stmt=null;
   
    }
  //get All Posts for spesific user Id

  Protected function getAllPostsForOneUser($userid){
  
//get data from DB for display latest post on top
    $sql="SELECT * FROM posts WHERE userId=? ORDER BY postCreatedOn DESC" ;
  //crating statement to prevent SQL injections
    $stmt = $this->connect()->prepare($sql);
    
    if(!$stmt->execute(array($userid))){
        $stmt=null;
        
        throw new \Exception('statement failled');

    }

    if($stmt->rowCount() == 0){
        $stmt=null;
        throw new \Exception('User not found');
    
       }
       $posts = $stmt->fetchAll();
       
       return $posts;
       

}

//get All Posts 

Protected function getAllPosts(){
    $sql="SELECT * FROM posts WHERE published=1  ORDER BY postCreatedOn DESC" ;
    $stmt = $this->connect()->prepare($sql);
    if(!$stmt->execute()){
        $stmt=null;
        throw new \Exception('statement failled');

    }

    if($stmt->rowCount() == 0){
        $stmt=null;
        throw new \Exception('User not found');
    
       }
       $posts = $stmt->fetchAll();
       
       return    $posts;

}

}
