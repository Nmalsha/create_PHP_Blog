
             <section class="container-fluid ">
  <div class="container p-5">
    <div class="row ">

      <h2>Details de Post</h2>
        <div class="row justify-content-center">
        

            <div class="card" style="width: 18rem;"  >
              <img class="card-img-top img_style" src="../../public/images/<?php echo $post['postImage']?>" alt="card image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $post['postTitle']?></h5>
                      <p class=""><?php echo $post['postCreatedOn']?></p>
                      <p class="card-text"><?php echo $post['postChapo']?></p>
                      <p class=""><?php echo $post['postContent']?></p>
                      
                     
                </div>
            </div>
             
      </div>
  </div>
</section>

                     
          