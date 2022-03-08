
             <section class="container-fluid ">
  <div class="container p-5">
    <div class="row ">

      <h2>Details de Post</h2>
        <div class="row justify-content-center">
        

            <div class="card" style="width: 40%;"  >
              <img class="card-img-top img_style" src="../../public/images/<?php echo $post['postImage']?>" alt="card image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $post['postTitle']?></h5>
                      <p class=""><?php echo $post['postCreatedOn']?></p>
                      <p class="card-text"><?php echo $post['postChapo']?></p>
                      <p class=""><?php echo $post['postContent']?></p>
                      <di class="bg-white">
<div class ="d-flex-row fs-12">
    <div class ="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</div>
</div>
                      </div>
                     <div class="bg-light p-2">
<div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post Comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button> </div>
                     </div>
                </div>
            </div>
             
      </div>
  </div>
</section>

                     
          