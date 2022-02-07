<!-- logUserView.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog Post - Create Post</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/adminStyle.css" />
</head>
<body >
<?php include_once("header.php"); ?>

<!-- log user contnt -->
<div class="admin_content">
<div class="button-group">
  <a href="logUserView.php" class="btn btn-big button_style">Go Back</a>
  <a href="editPost.php" class="btn btn-big button_style">Edit Post</a>
</div> 
<div class="content">
  <h3 class="page_title">Create Posts</h3>
<form action="controllers/createPost.php" method="post"  enctype="multipart/form-data" >

<div class="formwrapp">
        <div class="col-8 width ">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" class="form-control"  name="postTitle" aria-describedby="nom-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="chapo" class="form-label">Le chapo</label>
                <input type="text" class="form-control"  name="chapo" aria-describedby="prenom-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="contenue" class="form-label">Contenue</label>
                <textarea class="form-control" placeholder="Exprimez vous"  name="contenue"></textarea>
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="file" class="form-label">Image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary btn_style">Add Post</button>
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
