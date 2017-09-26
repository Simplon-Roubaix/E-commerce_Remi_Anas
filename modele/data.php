<?php
require_once("connexionSQL/connexionSQL.php");

function get_enfants(){
  global $bdd;
  $enfants=$bdd->query('SELECT *
    FROM Listing_Img_Enfant img
    INNER JOIN Listing_Enfants enfant
    ON enfant.id_enfant = img.id_img
    ORDER BY id_enfant DESC LIMIT 0,8');

  return $enfants;
}

function get_enfant(){
  global $bdd;
  global $enfant_select;
  $enfant=$bdd->query('SELECT *
    FROM Listing_Img_Enfant img
    INNER JOIN Listing_Enfants enfant
    ON enfant.id_enfant = img.id_img
    WHERE id_enfant = ' . $enfant_select . '');

  return $enfant;
}

function get_comptes(){
  global $bdd;
  $comptes=$bdd->query('SELECT * FROM comptes');

  return $comptes;
}


// CONNEXION
function connection($name,$mdp,$admin){
  // ramene la connection
  global $bdd;

  // ON FAIT UNE QUERY AVEC WHERE LE NAME RENTRE, PUIS ON MET LE MDP DE CETTE ENTRE DANS UNE VARIABLE , PUIS QUON FAIT UN PASSWORD_VERIFY AVEC LE MDP RENTRE ET LA VARIABLE , ON PEUT ARRIVER A QUELQUE CHOSE

  $req=$bdd->prepare('SELECT * FROM comptes WHERE compte=:name');
  $req->execute(array(
    'name'=>$name
  ));
  $resultat = $req->fetch();

  // on met la ligne dans la variable resultat (si il y en a une);
  // si resultat est vide (par ce qu'il na trouvé aucune entrée similaire dans le SELECT)
  if (!$resultat) {
    return "Nom erroné";
  }
  // sinon
  else{
    $mdpBDD = $resultat['mdp'];
    if (password_verify($mdp,$mdpBDD)) {
      session_start();
      $_SESSION['connexion']=true;
      $_SESSION['user']=$_POST['compte'];
      $_SESSION['admin']=$admin;
      return "Connecté";
    }
    else {
      return "Nom erroné";
    }
  }
}


function insert_new_compte($compte,$mdp){
  global $bdd;

  $req=$bdd->prepare('INSERT INTO comptes(compte, mdp) VALUES(:compte,:mdp)');
  $req->execute(array(
    'compte'=> $compte,
    'mdp'=> $mdp
  ));

  $_SESSION['connexion']=true;
  $_SESSION['user']=$_POST['compte'];
}



function insert_img($nom,$age,$pays,$don,$infos,$conseil,$file){
  global $bdd;

  // TRAITEMENT DE L IMAGE
  $img='../img/' . basename($file['name']);
  $imgBDD='img/' . basename($file['name']);

  $req=$bdd->prepare('INSERT INTO Listing_Enfants(nom_enfant,age_enfant,pays_enfant,don_enfant,infos_supp,conseil) VALUES(:nom_enfant,:age_enfant,:pays_enfant,:don_enfant,:infos_supp,:conseil)');
  $req->execute(array(
    'nom_enfant'=>$nom,
    'age_enfant'=>$age,
    'pays_enfant'=>$pays,
    'don_enfant'=>$don,
    'infos_supp'=>$infos,
    'conseil'=>$conseil
  ));

  move_uploaded_file($file['tmp_name'], $img );

  $req=$bdd->prepare('INSERT INTO Listing_Img_Enfant(source_img, alt_img) VALUES(:image, :alt)');
  $req->execute(array(
    'image'=> $imgBDD,
    'alt'=> '0'
  ));
}

 ?>
