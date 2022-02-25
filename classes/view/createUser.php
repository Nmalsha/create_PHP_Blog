<!-- logUserView.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog Post - Create User</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/adminStyle.css" />
</head>
<body >
<nav class="navbar  sticky-top navbar-expand-lg navbar-dark  bg_color">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="200" alt="logo de la site"
      /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse list" >
      <i class="fa fa-bars menue-toggle"></i>
      <ul class="nav">
      <li>
          <a  href="#" ><i class="fa fa-user"></i>
        user name
        <i class="fa fa-chevron-down" style="font-size: .8rem;"></i>
      
      </a>
      <ul >
      <li >
          <a class="logout" href="#">Logout</a>
        </li>
      </ul>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
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
  <a href="adminViewManageUsers.php" class="btn btn-big button_style">Go Back</a>
  <a href="adminViewManageUsers.php" class="btn btn-big button_style">Manage Users</a>
</div> 
<div class="content">
  <h3 class="page_title">Create User</h3>
<form action="controllers/createPost.php" method="post"  enctype="multipart/form-data" >

<div class="formwrapp">
<div class="col-8 width">
                <label for="username" class="form-label">Identifiant</label>
                <input type="text" class="form-control" name="username" aria-describedby="id-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="password" class="form-label">Mot de Pass</label>
                <input type="password" class="form-control"  name="password" aria-describedby="password-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn_style">Add User</button>
</div>
</form>

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
