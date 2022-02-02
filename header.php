<?php
session_start();
?>
<!-- header.php -->


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="inclueds/style.css" />
</head>
<nav class="navbar  sticky-top navbar-expand-lg navbar-dark  bg_color">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="200" alt="logo de la site"
      /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse list" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Inscrez vous </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connect.php">Se Conneté </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
