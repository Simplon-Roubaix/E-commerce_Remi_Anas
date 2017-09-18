<?php
  include ('connexionSQL.php');
  session_start();

  if ($_POST['addOrSign']=='connexion') {
    $reponse=$bdd->query('SELECT * FROM comptes');
    while ($donnees=$reponse->fetch()) {
      if ($donnees['mdp']==$_POST['mdp']) {
        // ADMMIN
        if ($_POST['compte']=='Anass' OR $_POST['compte']=='Remi') {
          if ($donnees['compte']==$_POST['compte']) {
            $_SESSION['connexion']=true;
            $_SESSION['admin']=true;
          }
        }

        // USER
        elseif ($donnees['compte']==$_POST['compte']) {
          $_SESSION['connexion']=true;
        }
      }
    }
  }
  if ($_POST['addOrSign']=='creer') {
    $_SESSION['connexion']=true;
    $req=$bdd->prepare('INSERT INTO comptes(compte, mdp) VALUES(:compte,:mdp)');
    $req->execute(array(
      'compte'=> $_POST['compte'],
      'mdp'=> $_POST['mdp']
    ));
  };
  header('Location:../index.php');

 ?>
