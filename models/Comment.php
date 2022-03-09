<?php
class Comment extends Dbh
{
    public function __construct()
    {

        $this->table = "comments";
        $this->connect();
    }

    public function createComment($userId, $postid, $comment)
    {
        //To display error
        $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //creating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO comments ( userId,postId,comment) VALUES (?,?,?);');

        if (!$stmt->execute(array($userId, $postid, $comment))) {

            print_r($stmt->errorInfo());

            $stmt = null;
            throw new \PDOException($stmt->errorInfo()[2]);

        }

        $stmt = null;
    }

}
