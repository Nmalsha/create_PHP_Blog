<?php

class Post extends Dbh{
   
    public function __construct()
    {
  
        $this->table = "posts";
        $this->connect();
    }



//get All Posts 

        public function getAllPosts()
        {
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

 //get All Posts for spesific user Id

        public function getAllPostsForOneUser($userid){
  
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

    //get One Post

    public function getOnePost($id){
        $sql="SELECT * FROM posts WHERE postId=$id ";
       
        $stmt = $this->connect()->prepare($sql);
            if(!$stmt->execute()){
                $stmt=null;
                throw new \Exception('statement failled');
    
            }
    
            if($stmt->rowCount() == 0){
                $stmt=null;
                throw new \Exception('User not found');
        
            }
           $posts = $stmt->fetch();
           
           return    $posts;
    
    } 



            }