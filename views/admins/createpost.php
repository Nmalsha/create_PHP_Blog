
<div class="content">
  <h3 class="page_title">Create Posts</h3>
<form action="" method="post"  enctype="multipart/form-data" >

<div class="formwrapp">

        <div class="col-8 width ">
                <label for="postTitle" class="form-label">Post Title</label>
                <input type="text" class="form-control"  name="postTitle" aria-describedby="nom-help">
                <input type="hidden" class="form-control"  name="userid" value="<?php $userid=($_GET["id"]) ; echo $userid;?>">
            </div>
            <br>
            <div class="col-8 width">
                <label for="chapo" class="form-label">Le chapo</label>
                <input type="text" class="form-control"  name="chapo" aria-describedby="prenom-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="contenue" class="form-label">Contenue</label>
                <textarea class="form-control" placeholder="Exprimez vous"  name="contenue"></textarea>
                
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
