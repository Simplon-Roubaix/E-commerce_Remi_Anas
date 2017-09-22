<?php



if ($_GET['connexion']) {
  if (isset($_GET['connexion'])) {
    $connexion=htmlspecialchars($_GET['connexion']);

    include_once("../vue/connexionVue.php");

  }
  else {
    header('index.php');
  }
}
else {
  header('index.php');
}

 ?>
