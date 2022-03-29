

<h2 class='welcome_msg margins'>Blogs</h2>
  <div class="container p-5">
    <div class="row ">


        <div class="row justify-content-center ">
          <?php foreach ($posts as $post) {?>

            <div class="card" style="width: 18rem; margin-right: 15px;"  >
              <img class="card-img-top img_style" src="../../public/images/<?php
echo $post['postImage'] ?>" alt="card image">
                <div class="card-body">
                  <a  href= "/posts/read/<?php echo $post['postId'] ?>" ><h5 class="card-title"><?php
echo $post['postTitle'] ?></h5> </a>
                      <p class=""><?php
echo $post['lastUpdatedOn'] ?></p>
                      <p class="">Créer par : <?php echo $post['username'] ?></p>
                      <p class="card-text"><?php echo $post['postChapo'] ?></p>

                </div>
            </div>
            <?php }?>
      </div>
  </div>

