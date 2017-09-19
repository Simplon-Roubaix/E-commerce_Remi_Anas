<?php session_start();
  if (isset($_SESSION['connexion'])) {
  }
  else {
    $_SESSION['user']='User';
    $_SESSION['admin']=false;
    $_SESSION['connexion']=false;
  };
 ?>
<!doctype html>
<html class="no-js" lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Le Plaisir d'Adopter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Font family -->

        <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Satisfy" rel="stylesheet">


	      <link rel="icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    </head>
    <?php include ("prods.php");?>
    <body>
      <header class="">
        <nav id="navheader" class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <h2><strong><a class="navbar-brand ml-1 navbar-brand" href="index.php">Le Plaisir d'Adopter</a></strong></h2>

          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mr-auto">
              <?php
              // SI non connecté
              if ($_SESSION['connexion']!=true) {
                ?>
              <li class="nav-item">
                <a class="nav-link" href="connexion.php?connexion=connexion">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connexion.php?connexion=creer">Créer un compte</a>
              </li>
              <?php
            }
            // SI connecté
            else {
              // SI ADMIN
              if ($_SESSION['admin']==true) {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="add.php">Ajouter un enfant</a>
                </li>
                <?php
              };
              ?>
              <li class="nav-item">
                <a class="nav-link" href="post/deconnexion.php">Deconnexion</a>
              </li>
              <li>
                <strong class="nav-link text-white">Bonjour <?php echo $_SESSION['user'] ?></strong>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </nav>
      </header>
