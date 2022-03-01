<section class="container-fluid actualite">
      <div class="container">
        <div class="row">
    <article class="col-3">
</article>
    <aside class="col-9"> 
       
        <form  method="post" action="/Signups">
        <h1 class="form_action">Inscrez - vous</h1>
        <div class="formwrapp">
        <div class="col-8 width">
                <label for="username" class="form-label">Identifiant</label>
                <input type="username" class="form-control" name="username" aria-describedby="id-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="password" class="form-label">Mot de Pass</label>
                <input type="password" class="form-control"  name="password1" >
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="password2" class="form-label">Confirmez le Mot de Pass</label>
                <input type="password" class="form-control"  name="password2">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                
            </div>
            <br>
            
           
            <button type="signup" name="signup" class="btn btn-primary btn_style">Signup</button>
            <br>
            <p> Deja inscrit ? <a href="connect.php">se connecté</a>
            <div class="error_display">
            <?php
// error handling

if(isset($_GET["error"])){

if($_GET["error"]=="emptyInput"){
    echo"<p>Remplieez tous les champs</p>";

}else if($_GET["error"]=="IninvalidUid"){
    echo"<p>Indentifiant invalide</p>";
}else if($_GET["error"]=="IninvalidEmail"){
    echo"<p>email invalide</p>";
}else if($_GET["error"]=="passworddontmatched"){
    echo"<p>Les mots de passe ne correspondent pas</p>";
}else if($_GET["error"]=="Usernametaken"){
    echo"<p>L'utilisateur déjà existe </p>";
}else if($_GET["error"]=="noerrors"){
    echo"<p>Vous avez bien inscrit ! </p>";
}

}
?>
</div>
</div>
        </form>

</aside>
</div>
</div>

</section>