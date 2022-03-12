<?php
session_start();
// display user name on the profile page
if (isset($_SESSION["id"])) {
    $userid = $_SESSION["id"];
    echo "<p class='welcome_msg'> BONJOUR ADMIN " . $_SESSION["username"] . "  " . $_SESSION["id"] . " </p>";

}

?>
<div class="loguserwrapper">
<!-- left side bar -->
  <div class="left_sidebar">
    <ul>
      <li><a href="/admins/index/">Manage Posts</a></li>
      <li><a href="/admins/manageuser/">Manage Users</a></li>
      <li><a href="/admins/managecomment/">Manage comments</a></li>
    </ul>
  </div>
<!-- Post contents-->
  <div class="admin_content">

  <div class="content">
    <h3 class="page_title"> Comments</h3>
  <table>
  <thread>
    <th>Comment Id</th>
    <th>Created On</th>

    <th>User Name</th>
    <th>Post Id</th>
    <th>Comment</th>
    <th colspan="3">Actions</th>

  </thread>
  <tbody>

<?php

foreach ($comments as $comment) {?>

    <tr>
    <td><?php echo $comment['commentID']; ?></td>
    <td><?php echo $comment['createdOn']; ?></td>

    <td><?php echo $comment['username']; ?></td>
    <td><?php echo $comment['postId']; ?></td>
    <td><?php echo $comment['comment']; ?></td>


    <?php
//showing public button if the comment was not published by the admin
    if ($comment['published'] === null) {

        //passing the id of the clicked comment
        echo '<td><a href="/admins/publiccomment/' . $comment["commentID"] . '" >Public</a></td>';
    }
    ?>
    <td><a href="/admins/deletecomment/<?php echo $comment['commentID'] ?>" class="delete">Delete</a></td>
    </tr>
    <?php }?>
    </tbody>
  </table>

  </div>
</div>
