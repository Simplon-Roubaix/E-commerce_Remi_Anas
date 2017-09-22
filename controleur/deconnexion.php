<?php
session_start();
$_SESSION['connexion']=false;
$_SESSION['admin']=false;

session_destroy();
  header('Location:index.php')
 ?>
