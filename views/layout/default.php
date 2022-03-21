<?php
use Symfony\Component\HttpFoundation\Session\Session;
$session = new Session();
$sessionUsername = $session->get('username');
$sessionId = $session->get('id');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <metaname="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="PHP blog post"/>
    <title>MY BLOG POST</title>
    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">
    <!---Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"        rel="stylesheet"    >
    <script src="https://kit.fontawesome.com/15024a0798.js" crossorigin="anonymous"></script>
    <!--Styles -->

    <link rel="stylesheet" href="/public/style.css" />
    <link rel="stylesheet" href="/public//adminStyle.css" />
  </head>


<nav class="navbar  sticky-top navbar-expand-lg navbar-dark  bg_color">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="/public/images/logo.png" width="200" alt="logo de la site"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse list " id ="navbarSupportedContent"  >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link active" aria-current="" href="/accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="" href="/posts">Blogs</a>
        </li>
        <?php
if ($sessionId !== null) {
    $isAdmin = $session->get('isAdmin');

    if ($isAdmin == 1) {

        echo "<li class='nav-item'><a class='nav-link' href='/admins/index'><i class='fa fa-user' aria-hidden='true'></i> " . $sessionUsername . "
            </a></li>";
        echo "<li class='nav-item'><a class='nav-link' href='/logout/logout'>logout </a></li>";

    }if ($isAdmin === null) {

        echo "<li class='nav-item'><a class='nav-link' href='/posts'><i class='fa fa-user' aria-hidden='true'></i> " . $sessionUsername . "
            </a></li>";
        echo "<li class='nav-item'><a class='nav-link' href='/logout/logout'>logout </a></li>";
    }
} else {
    // if not log in display signup and connection
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
<body>
<main>
<?php

if ($sessionId !== null) {
    $isAdmin = $session->get('isAdmin');
    if ($isAdmin !== null) {
        $sessionUsername = $session->get('username');
        echo "<p class='welcome_msg'> BONJOUR ADMIN  " . $sessionUsername . "  " . $sessionId . " </p>";
    } else {
        echo "<p class='welcome_msg'> BONJOUR  " . $sessionUsername . "  " . $sessionId . " </p>";

    }

}
?>
<?=$content?>

</main>

<section class="footer margins">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Admistration</span>
          <a href="/logins" ><button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button></a>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://openclassrooms.com/fr/">openclassrooms.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

</body>

</html>