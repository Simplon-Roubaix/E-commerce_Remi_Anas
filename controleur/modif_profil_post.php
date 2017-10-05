<?php
session_start();
require_once("../modele/data.php");
if ($_SESSION['user']=="Admin") {
  header("Location:index.php");

}

if (isset($_POST['name']) AND isset($_POST['mdp']) AND isset($_POST['mdpV']) ) {
  if (isset($_POST['mdp']) == isset($_POST['mdpV'])) {

    $newName = htmlspecialchars($_POST['name']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdp = password_hash($mdp,PASSWORD_BCRYPT);
    $id= $_SESSION['ID'];

    modif_profil($newName,$mdp,$id);
    header("Location:index.php");
  }
  else {
    header("Location:modif_profil.php");
  }
}
else{
  header("Location:modif_profil.php");
}



 ?>
