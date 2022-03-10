<?php
class Comment extends Dbh
{
    public function __construct()
    {

        $this->table = "comments";
        $this->connect();
    }

    public function createComment($userId, $username, $postid, $comment)
    {
        //To display error
        $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //creating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO comments ( userId,username,postId,comment) VALUES (?,?,?,?);');

        if (!$stmt->execute(array($userId, $username, $postid, $comment))) {

            print_r($stmt->errorInfo());

            $stmt = null;
            throw new \PDOException($stmt->errorInfo()[2]);

        }

        $stmt = null;
    }
    //get All Published Comments

    public function getAllPublishedComment($id)
    {
        $sql = "SELECT * FROM comments WHERE published=1 AND postId=$id ORDER BY createdOn DESC";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        $comments = $stmt->fetchAll();

        return $comments;

    }

}
