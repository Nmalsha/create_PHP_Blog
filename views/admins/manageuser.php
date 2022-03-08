<?php
session_start();
 // display user name on the profile page
        if(isset($_SESSION["id"])){
            $userid = $_SESSION["id"];
echo "<p class='welcome_msg'> BONJOUR ADMIN " . $_SESSION["username"]."  ".$_SESSION["id"]." </p>";

        } 
        
        ?>
<div class="loguserwrapper">
<!-- left side bar -->
  <div class="left_sidebar">
    <ul>
      <li><a href="/admins/index/">Manage Posts</a></li>
      <li><a href="/admins/manageuser/">Manage Users</a></li>
    </ul>
  </div>
<!-- Post contents-->
  <div class="admin_content">
    <div class="button-group">
      <a href="/admins/createpost/<?php echo $userid ?>"  class="btn btn-big button_style">Create User</a>
    </div> 
  <div class="content">
    <h3 class="page_title"> Users</h3>
  <table>
  <thread>
    <th>User Id</th>
   
    <th>User Name</th>
    <th>Email</th>
    <th colspan="3">Action</th>
  </thread>
  <tbody>

<?php 


foreach ($users as $user) { ?>

    <tr>
    <td><?php echo $user['userId']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['email'] ;?></td>
    
    <td><a href="/admins/edituser/<?php echo $user['userId']?>" class="edit">Edit</a></td>
   
    <td><a href="/admins/deleteuser/<?php echo $user['userId']?>" class="delete">Delete</a></td>
    </tr>
    <?php }?>    
    </tbody>
  </table>

  </div>
</div>
