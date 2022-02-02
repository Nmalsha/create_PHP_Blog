<?php  

//session_start();

include_once("controllers/registre.php");

;?>
<!-- signup.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog - Formulaire de inscreption</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/style.css" />
</head>

<body >
    <div class="">

    <?php include_once("header.php"); ?>


    <section class="container-fluid actualite">
      <div class="container">
        <div class="row">
    <article class="col-3">
</article>
    <aside class="col-9"> 
       
        <form  method="post" action="controllers/registre.php">
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
            
           
            <button type="submit" name="signup" class="btn btn-primary btn_style">Signup</button>
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

    <?php include_once("footer.php"); ?>
</body>
</html>