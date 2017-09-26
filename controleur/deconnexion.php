<?php
session_start();
$_SESSION['connexion']=false;
$_SESSION['admin']=false;

session_destroy();

setcookie('login', '');
setcookie('pass_hache', '');

header('Location:index.php')
 ?>
