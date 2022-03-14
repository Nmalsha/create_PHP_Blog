<?php
//session_start();

// display user name on the profile page
if (isset($_SESSION["id"])) {
    $userid = $_SESSION["id"];
    echo "<p class='welcome_msg'> BONJOUR " . $_SESSION["username"] . "  " . $_SESSION["id"] . " </p>"; // USER ID FOR TESTING DELETE LATER

}

?>
<section class="container-fluid ">
<h2 class='welcome_msg'>Blogs</h2>
  <div class="container p-5">
    <div class="row ">


        <div class="row justify-content-center ">
          <?php foreach ($posts as $post) {?>

            <div class="card" style="width: 18rem; margin-right: 15px;"  >
              <img class="card-img-top img_style" src="../../public/images/<?php echo $post['postImage'] ?>" alt="card image">
                <div class="card-body">
                  <a  href= "/posts/read/<?php echo $post['postId'] ?>" ><h5 class="card-title"><?php echo $post['postTitle'] ?></h5> </a>
                      <p class=""><?php echo $post['postCreatedOn'] ?></p>
                      <p class="card-text"><?php echo $post['postChapo'] ?></p>

                </div>
            </div>
            <?php }?>
      </div>
  </div>
</section>

