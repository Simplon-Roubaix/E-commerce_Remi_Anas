<?php
session_start();

require_once("../modele/data.php");
if ($_SESSION['user']!="Admin") {
  sup_profil($_SESSION['ID']);
}

header("Location:deconnexion.php");






 ?>
