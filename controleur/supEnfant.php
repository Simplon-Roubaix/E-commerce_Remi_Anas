<?php

require_once("../modele/data.php");

if (isset($_GET['idEnfant'])){
  $idEnfant=htmlspecialchars($_GET['idEnfant']);
  echo $idEnfant;
  supChild($idEnfant);
}
else {
  header("Location:list.php");
}


header("Location:list.php");

 ?>
