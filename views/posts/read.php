<?php
session_start();

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

<?php
if (isset($comments)) {
    foreach ($comments as $comment) {

        ?>
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">

                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php echo $comment['username'] ?></span><span class="date text-black-50"><?php echo $comment['createdOn'] ?></span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text"><?php echo $comment['comment'] ?></p>
                    </div>
                </div>
                <?php
}
} else {
    echo "No comments yet";
}
?>

                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">

                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>

                    </div>
                </div>
  <!---Display comment section only for the logged users --->
<?php if (isset($_SESSION["id"])) {
    echo "<div class='bg-light p-2'>";
    echo '<form method="post" action="/posts/comment/' . $post["postId"] . '" >';
    echo " <div class='d-flex flex-row align-items-start'><textarea name='comment' class='form-control ml-1 shadow-none textarea'></textarea></div>";
    echo "<input  name='userId' type='hidden' value='" . $_SESSION['id'] . "'>";
    echo "<input  name='username' type='hidden' value='" . $_SESSION['username'] . "'>";
    echo "<div class='mt-2 text-right'><button class='btn btn-primary btn-sm shadow-none' type='submit'>Post comment</button></div>";
    echo "</form>";
    echo "</div>";
}
?>


            </div>
        </div>
    </div>
</div>

            </div>
        </div>

    </div>
  </div>
</section>


