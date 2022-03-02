<?php
session_start();
var_dump($_SESSION["username"]);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <metaname="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="PHP blog post"/>
    <title>MY BLOG POST</title>
    <!---Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >
    <script src="https://kit.fontawesome.com/15024a0798.js" crossorigin="anonymous"></script>
    <!--Styles -->
   
    <link rel="stylesheet" href="/public/style.css" />
  </head>


<nav class="navbar  sticky-top navbar-expand-lg navbar-dark  bg_color">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="/images/logo.png" width="200" alt="logo de la site"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse list" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="" href="/posts">Accueil !!!</a>
        </li>
        <?php 
         if (isset ( $_SESSION["id"]) ){
          $admin = $_SESSION["id"];
          var_dump($admin);
          if($admin ===1 ){

            echo "<li class='nav-item'><a class='nav-link' href='#'><i class='fa fa-user' aria-hidden='true'></i> " . $_SESSION["username"]." 
            </a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='public/logout.php'>logout </a></li>";  
    
           
          }if($admin !== 1) {
         
            echo "<li class='nav-item'><a class='nav-link' href='logUserView.php'><i class='fa fa-user' aria-hidden='true'></i> " . $_SESSION["username"]." 
            </a></li>";
       echo "<li class='nav-item'><a class='nav-link' href='public/logout.php'>logout </a></li>";
          }
        }else{
          // if not log in display signup ans connection
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='/signups'>Inscrez vous </a>
                  </li>";
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='/logins'>Se Conneté </a>
                  </li>";
                  }
        
        ?>
          
             
      </ul>
    </div>
  </div>
</nav>
<main>

<?= $content?>

</main>

