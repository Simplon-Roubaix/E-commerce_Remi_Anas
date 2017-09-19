<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=Le_Plaisir_d_Adopter;charset=utf8', 'root', 'gesundheititit',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=Le_Plaisir_d_Adopter;charset=utf8', 'root', '1403ha729',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

 ?>
