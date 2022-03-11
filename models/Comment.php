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

    public function getAllComment()
    {
        $sql = "SELECT * FROM comments ORDER BY createdOn DESC";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        $comments = $stmt->fetchAll();

        return $comments;

    }

    //Function to Public the comment
    public function publicComment($id)
    {
        $sql = "UPDATE  comments SET published = 1   WHERE commentID=$id ";

        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {

            $stmt = null;

            throw new \Exception('statement failled');

        }
        $comments = $stmt->fetch();

        return $comments;

    }

    //Function to delete the comment
    public function deleteComment($id)
    {
        $sql = "DELETE FROM  comments WHERE commentID=$id ";

        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {

            $stmt = null;

            throw new \Exception('statement failled');

        }
        $comments = $stmt->fetch();

        return $comments;

    }

    //Function to delete the comments  when deleting the posts
    public function deleteCommentsWithPost($id)
    {
        $sql = "DELETE FROM  comments WHERE postId=$id ";

        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {

            $stmt = null;

            throw new \Exception('statement failled');

        }
        $comments = $stmt->fetch();

        return $comments;

    }

}
