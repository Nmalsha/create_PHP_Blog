<?php
session_start();
 // display user name on the profile page
        if(isset($_SESSION["id"])){
            $userid = $_SESSION["id"];
echo "<p> BONJOUR " . $_SESSION["username"]."  ".$_SESSION["id"]." </p>";

        } 
        
        ?>
    <div class="loguserwrapper">
<!-- left side bar -->

<!-- log user contnt -->
<div class="admin_content">
<div class="button-group">
  <a href="/users/createpost/<?php echo $userid ?>"  class="btn btn-big button_style">Create Post</a>
 
</div> 
<div class="content">
  <h3 class="page_title">My Posts</h3>
<table>
  <thread>
    <th>CreatedOn</th>
    <th>Title</th>
    <th>Chapo</th>
    <th colspan="3">Action</th>
</thread>
<tbody>

<?php 


foreach ($posts as $post) { ?>

  <tr>
   
    <td><?php echo $post['postCreatedOn']; ?></td>
    <td><?php echo $post['postTitle'] ;?></td>
    <td><?php echo $post['postChapo']?></td>
    <td><a href="#" class="edit">Edit</a></td>
    <td><a href="#" class="delete">Delete</a></td>
 

</tr>
<?php }?>    
</tbody>
</table>

</div>
</div>
</div>