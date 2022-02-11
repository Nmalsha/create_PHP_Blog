<!-- connect.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog - Formulaire de connection</title>
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
       
        <form method="post" action="inclueds/login.inc.php" >
        <div class="formwrapp">
        <div class="col-8 width">
        <h1 class="form_action">Connectez - vous</h1>
                <label for="identi" class="form-label">Identifiant</label>
                <input type="text" class="form-control" name="username" aria-describedby="id-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="password" class="form-label">Mot de Pass</label>
                <input type="password" class="form-control"  name="password" aria-describedby="password-help">
                
            </div>
            <br>
            
            
           
            <button type="login" name= "login" class="btn btn-primary btn_style">Envoyer</button>
            <p> pas inscrit ? <a href="signup.php">Inscrez-vous</a>
            <div>

            <?php
// error handling

if(isset($_GET["error"])){

if($_GET["error"]=="emptyInput"){
    echo"<p>Remplieez tous les champs</p>";

}else if($_GET["error"]=="wronglogin"){
    echo"<p>Indentifiant/motdepass invalide</p>";
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