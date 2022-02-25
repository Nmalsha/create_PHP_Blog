

    <section class="container-fluid ">
        <div class="container p-5">
          <div class="row ">

<h2>Blogs</h2>
          <div class="row justify-content-center">
          <?php 

 
    foreach ($posts as $post) {

 ?>



              <div class="card m-2 px-0 col-12 col-md-4 col-lg-3">
                  <img class="card-img-top img_style" src="images/imgactualites.jpg" alt="card image">
                  <div class="card-body">
                  <a  href= "/Posts/read/<?php echo $post['postId']?>" ><h5 class="card-title"><?php echo $post['postTitle']?></h5> </a>
                      <p class=""><?php echo $post['postCreatedOn']?></p>
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
    
