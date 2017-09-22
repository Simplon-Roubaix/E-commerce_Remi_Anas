<?php
  require_once("../modele/data.php");

  session_start();

  if ($_POST['addOrSign']=='connexion') {
    $comptes= get_comptes();
    while ($donnees=$comptes->fetch()) {
      if ($donnees['mdp']==$_POST['mdp']) {
        // ADMMIN
        if ($_POST['compte']=='Anass' OR $_POST['compte']=='Remi') {
          if ($donnees['compte']==$_POST['compte']) {
            $_SESSION['connexion']=true;
            $_SESSION['user']=$_POST['compte'];
            $_SESSION['admin']=true;
          }
        }

        // USER
        elseif ($donnees['compte']==$_POST['compte']) {
          $_SESSION['connexion']=true;
          $_SESSION['user']=$_POST['compte'];

        }
      }
    }
  }
  if ($_POST['addOrSign']=='creer') {
    $_SESSION['connexion']=true;
    $_SESSION['user']=$_POST['compte'];

    insert_new_compte($_POST['compte'],$_POST['mdp']);

  };
  header('Location:index.php');
 ?>
