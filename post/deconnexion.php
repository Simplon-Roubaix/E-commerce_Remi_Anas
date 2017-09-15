<?php
session_start();
$_SESSION['connexion']=false;
session_destroy();
  header('Location:../index.php')
 ?>
