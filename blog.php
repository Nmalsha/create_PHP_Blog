
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
</body>
</html>
