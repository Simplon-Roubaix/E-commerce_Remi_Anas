<?php
  include ('connexionSQL.php');
  session_start();

  if ($_POST['addOrSign']=='connexion') {
    $reponse=$bdd->query('SELECT * FROM comptes');
    while ($donnees=$reponse->fetch()) {
      if ($donnees['compte']==$_POST['compte']) {
        // retourner compte erroné
        if ($donnees['mdp']==$_POST['mdp']) {
          // retourner mdp erroné
          $_SESSION['connexion']=true;
          header('Location:../index.php');
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
    header('Location:../index.php');
  };

 ?>
