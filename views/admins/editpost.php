
<div class="content">
  <h3 class="page_title">Edit Posts</h3>
<form action="" method="post"  enctype="multipart/form-data" >

<div class="formwrapp">
<div class="col-8 width ">
<?php 
echo '<img class="card-img-top img_style" src="../../public/images/'.$post["postImage"].'" alt="card image">'
     ?>          
            </div>

        <div class="col-8 width ">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" class="form-control"  name="postTitle" placeholder="<?php echo $post['postTitle']?>">
               
            </div>
            <br>
            <div class="col-8 width">
                <label for="chapo" class="form-label">Le chapo</label>
                <input type="text" class="form-control"  name="chapo" placeholder="<?php echo $post['postChapo']?>">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="contenue" class="form-label">Contenue</label>
                <textarea class="form-control" placeholder="<?php echo $post['postContent']?>"  name="contenue"></textarea>
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="file" class="form-label">Image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn_style">Add Post</button>
</div>
</form>

</div>
</div>
</div>
      

</body>
</html>