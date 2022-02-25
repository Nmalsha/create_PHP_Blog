<!-- logUserView.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog Post - Admin View</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/adminStyle.css" />
</head>
<body >
<?php include_once("header.php"); ?>
<?php
 // display user name on the profile page
        if(isset($_SESSION["username"])){
echo "<p> BONJOUR ADMIN " . $_SESSION["username"]." </p>";

        } 
        
        ?>
    <div class="loguserwrapper">
 <!-- contents -->

    <div class="loguserwrapper">
<!-- left side bar -->
<div class="left_sidebar">
<ul>
  <li><a href="adminView.php">Manage Posts</a></li>
  <li><a href="adminViewManageUsers.php">Manage Users</a></li>
 
</ul>
</div>
<!-- log user contnt -->
<div class="admin_content">
<div class="button-group">
  <a href="createPost.php" class="btn btn-big button_style">Create Post</a>
  <a href="adminView.php" class="btn btn-big button_style">Manage Post</a>
</div> 
<div class="content">
  <h3 class="page_title">Manage Post</h3>
<table>
  <thread>
    <th>N</th>
    <th>Title</th>
    <th>Auther</th>
    <th colspan="3">Action</th>
</thread>
<tbody>
  <tr>
    <td>1</td>
    <td>This is first post</td>
    <td>auther of the post</td>
    <td><a href="#" class="edit">Edit</a></td>
    <td><a href="#" class="delete">Delete</a></td>
    <td><a href="#" class="publish">Publish</a></td>

</tr>
</tbody>
</table>

</div>
</div>
</div>
      

<?php include_once("footer.php"); ?>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
</body>
</html>
