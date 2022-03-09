<?php
session_start();
var_dump($_SESSION['username'])
?>
             <section class="container-fluid ">
  <div class="container p-5">
    <div class="row ">

      <h2>Details de Post</h2>
        <div class="row justify-content-center">


            <div class="card" style="width: 40%; height:28rem;"  >
              <img class="card-img-top img_style" src="../../public/images/<?php echo $post['postImage'] ?>" alt="card image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $post['postTitle'] ?></h5>
                      <p class=""><?php echo $post['postCreatedOn'] ?></p>
                      <p class="card-text"><?php echo $post['postChapo'] ?></p>
                      <p class=""><?php echo $post['postContent'] ?></p>
                      <di class="bg-white">
                </div>
                <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">


            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">

                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>


                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">

                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>

                    </div>
                </div>

<?php if (isset($_SESSION["id"])){
echo "<div class='bg-light p-2'>
<form method='post' action='/posts/comment/<?php echo $post['postId'] ?>' >



";


}
?>
                <div class="bg-light p-2">

                <form method="post" action="/posts/comment/<?php echo $post['postId'] ?>" >
                    <div class="d-flex flex-row align-items-start"><textarea name="comment" class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <input  name="userid" type="hidden" value="<?php echo $_SESSION['id'] ?>">

                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button></div>
                </form>


                </div>

            </div>
        </div>
    </div>
</div>

            </div>
        </div>

    </div>
  </div>
</section>


