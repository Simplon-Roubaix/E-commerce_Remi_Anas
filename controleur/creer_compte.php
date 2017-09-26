<?php
  require_once("../modele/data.php");

  session_start();


  // SECURITY TEST
  if (isset($_POST['compte']) AND isset($_POST['mdp'])) {
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['compte'])) {
      $name =$_POST['compte'];
      $mdp = $_POST['mdp'];
    }
    else {
      header('Location:index.php');
    }
  }
  else {
    header('Location:index.php');
  }


  // CONNEXION
  if ($_POST['addOrSign']=='connexion'){
    if ($name=='Admin') {
      $admin=true;
    }
    connection($name,$mdp,$admin);
  }

  // CREER COMPTE
  if ($_POST['addOrSign']=='creer') {

    // hash
    $mdp = password_hash($mdp,PASSWORD_BCRYPT);
    insert_new_compte($name,$mdp);
  };


  header('Location:index.php');
 ?>
