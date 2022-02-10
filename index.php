<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
<!-- meta -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Blog Post</title>
    <!-- boostrap-->
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >

    <!-- fontawesome -->
    <script      src="https://kit.fontawesome.com/15024a0798.js"      crossorigin="anonymous"     ></script>
    <!-- styles -->
    <link rel="stylesheet" href="inclueds/style.css" />
</head>
<body class="d-flex flex-column min-vh-100">
<div class=" text-center">

    <?php include_once("header.php"); ?>
</div>
<section class="container-fluid actualite">
      <div class="container">
        <div class="row">
    <article class="col-6">
        <h5>Bienvenue dans le site de Blog Post développer par SINHALAGE Malsha</h5>
</article>
    <aside class="col-6"> 
    <h5>Mon lien social</h5>/
    <ul>
   <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
   <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
   <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>

</aside>
</div>
</div>
</section>
<section class="container-fluid contact_form">
      <div class="container">
        <div class="row">
    <article class="col-3">
</article>
    <aside class="col-9"> 
       
        <form >
        <h1 class="form_action">Contactez nous</h1>
        <div class="formwrapp">
        <div class="col-8 width ">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control"  name="nom" aria-describedby="nom-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control"  name="prenom" aria-describedby="prenom-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                
            </div>
            <br>
            <div class="col-8 width">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn_style">Envoyer</button>
</div>
        </form>

</aside>
</div>
</div>
</section>

      

    <?php include_once("footer.php"); ?>
</body>
</html>
