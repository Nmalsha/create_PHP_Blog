<?php
//session_start();
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
      <li><a href="">Manage Posts</a></li>
      <li><a href="/admins/manageuser">Manage Users</a></li>
      <li><a href="/admins/managecomment">Manage Comments</a></li>
    </ul>
  </div>
<!-- Post contents-->
  <div class="admin_content">
    <div class="button-group">
      <a href="/admins/createpost/<?php echo $userid ?>"  class="btn btn-big button_style">Create Post</a>
    </div>
  <div class="content">
    <h3 class="page_title"> Posts</h3>
  <table>
  <thread>
    <th>Post Id</th>
    <th>CreatedOn</th>
    <th>Title</th>
    <th>Chapo</th>
    <th colspan="3">Action</th>
  </thread>
  <tbody>

<?php
foreach ($posts as $post) {?>

    <tr>
    <td><?php echo $post['postId']; ?></td>
    <td><?php echo $post['postCreatedOn']; ?></td>
    <td><?php echo $post['postTitle']; ?></td>
    <td><?php echo $post['postChapo'] ?></td>
    <td><a href="/admins/editpost/<?php echo $post['postId'] ?>" class="edit">Edit</a></td>

    <?php
//showing public button if the post was not published by the admin
    if ($post['published'] === null) {

        //passing the id of the clicked post
        echo '<td><a href="/admins/publicpost/' . $post["postId"] . '" >Public</a></td>';
    }
    ?>
    <td><a href="/admins/delete/<?php echo $post['postId'] ?>" class="delete">Delete</a></td>
    </tr>
    <?php }?>
    </tbody>
  </table>

  </div>
</div>
