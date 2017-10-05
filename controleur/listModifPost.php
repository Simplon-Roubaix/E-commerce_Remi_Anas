<?php

require_once("../modele/data.php");

if (isset($_POST['name']) AND isset($_POST['age']) AND isset($_POST['pays']) AND isset($_POST['don']) AND isset($_POST['infos']) AND isset($_POST['conseil']) AND isset($_POST['IdEnfantModif'])){
  $name=htmlspecialchars($_POST['name']);
  $age=htmlspecialchars($_POST['age']);
  $pays=htmlspecialchars($_POST['pays']);
  $don=htmlspecialchars($_POST['don']);
  $infos=htmlspecialchars($_POST['infos']);
  $conseil=htmlspecialchars($_POST['conseil']);
  $IdEnfantModif=htmlspecialchars($_POST['IdEnfantModif']);
  modifChild($name,$age,$pays,$don,$infos,$conseil,$IdEnfantModif);
}
else {
  header("Location:list.php");
}


header("Location:list.php");

 ?>
