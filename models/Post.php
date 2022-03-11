<?php

class Post extends Dbh
{

    public function __construct()
    {

        $this->table = "posts";
        $this->connect();
    }

//setting values to the database
    public function setPost($userid, $postTitle, $postChapo, $postContent, $filename)
    {
        $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//creating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO posts( userId,postTitle,postChapo,postContent,postImage) VALUES (?,?,?,?,?);');

        if (!$stmt->execute(array($userid, $postTitle, $postChapo, $postContent, $filename))) {

            $stmt = null;
            throw new \PDOException($stmt->errorInfo()[2]);

        }

        $stmt = null;
    }

//get All Posts

    public function getAllPosts()
    {
        $sql = "SELECT * FROM posts   ORDER BY postCreatedOn DESC";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute()) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            throw new \Exception('User not found');

        }
        $posts = $stmt->fetchAll();

        return $posts;

    }

//get All Published Posts

    public function getAllPublishedPosts()
    {
        $sql = "SELECT * FROM posts WHERE published=1  ORDER BY postCreatedOn DESC";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute()) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            throw new \Exception('User not found');

        }
        $posts = $stmt->fetchAll();

        return $posts;

    }

//get All Posts for spesific user Id

    public function getAllPostsForOneUser($userid)
    {

//get data from DB for display latest post on top
        $sql = "SELECT * FROM posts WHERE userId=$userid ORDER BY postCreatedOn DESC";
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($userid))) {
            $stmt = null;

            throw new \Exception('statement failled');

        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            throw new \Exception('User not found');

        }
        $posts = $stmt->fetchAll();

        return $posts;

    }

//get One Post

    public function getOnePost($id)
    {
        $sql = "SELECT * FROM posts WHERE postId=$id ";

        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute()) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            throw new \Exception('User not found');

        }
        $posts = $stmt->fetch();

        return $posts;

    }

//Function to Public the post
    public function publicPost($id)
    {
        $sql = "UPDATE  posts SET published = 1   WHERE postId=$id ";

        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {

            $stmt = null;

            throw new \Exception('statement failled');

        }
        $posts = $stmt->fetch();

        return $posts;

    }
//Function to delete the post
    public function deletePost($id)
    {

        $sql = "DELETE FROM  posts WHERE postId=$id ";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {
            $stmt = null;

            throw new \Exception('statement failled');

        }
        $posts = $stmt->fetch();

        return $posts;

    }
//Function to edit the post
    public function editPost($id, $newPostTitle, $newPostChapo, $newPostContent, $newFilename)
    {
        $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE  posts  SET  postTitle='$newPostTitle' ,postChapo='$newPostChapo' ,postContent='$newPostContent', postImage='$newFilename' WHERE postId=$id ";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($id, $newPostTitle, $newPostChapo, $newPostContent, $newFilename))) {

            $stmt = null;

            throw new \PDOException($stmt->errorInfo()[2]);

        }
        $posts = $stmt->fetch();

        return $posts;

    }

}
