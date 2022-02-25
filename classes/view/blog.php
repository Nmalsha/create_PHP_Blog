
<?php
require_once "inclueds/autoloader.mvc.php";
use view\PostsView;
?>
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/style.css" />
</head>

<body >

    <div class="">

    <?php include_once("header.php"); ?>
    <section class="container-fluid ">
        <div class="container p-5">
          <div class="row ">

<h2>Blogs</h2>
          <div class="row justify-content-center">
          <?php 
          //sow all blogs already published
$postObject = new  PostsView();

$data=$postObject->showAllPosts();
// echo '<pre>';
//     var_dump($data);
//     echo '</pre>';
 
    foreach ($data['posts'] as $post) {

 ?>



              <div class="card m-2 px-0 col-12 col-md-4 col-lg-3">
                  <img class="card-img-top img_style" src="images/imgactualites.jpg" alt="card image">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $post['postTitle']?></h5>
                      <p class="">Date dernier modification</p>
                      <p class="card-text">
                      <?php echo $post['postChapo']?>
                      </p>
                      <button class="btn btn-primary" type="submit">lien ver blog post</button>
                  </div>
              </div>
              <?php

}
?>          
</div>
</div>
</section>
    
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
