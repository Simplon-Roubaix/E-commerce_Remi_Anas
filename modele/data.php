<?php
require_once("connexionSQL/connexionSQL.php");

// LIST 8 ENFANTS
function get_enfants(){
  global $bdd;
  $enfants=$bdd->query('SELECT *
    FROM Listing_Img_Enfant img
    INNER JOIN Listing_Enfants enfant
    ON enfant.id_enfant = img.id_img
    ORDER BY id_enfant DESC LIMIT 0,8');

  return $enfants;
}

// LIST ENFANTS
function get_allEnfants(){
  global $bdd;
  $enfants=$bdd->query('SELECT * FROM Listing_Enfants');
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

// MODIF ENFANT
function modifChild($name,$age,$pays,$don,$infos,$conseil,$IdEnfantModif){
  global $bdd;

  $req=$bdd->prepare('UPDATE Listing_Enfants SET nom_enfant=:nom, age_enfant=:age, pays_enfant=:pays, don_enfant=:don, infos_supp=:infos, conseil=:conseil WHERE id_enfant=:ID');
  $req->execute(array(
    'nom'=> $name,
    'age'=> $age,
    'pays'=> $pays,
    'don'=> $don,
    'infos'=> $infos,
    'conseil' => $conseil,
    'ID'=>$IdEnfantModif
  ));
}


// SUPR ENFANT
function supChild($idEnfant){

  global $bdd;
  $supEnfant=$bdd->query('DELETE FROM Listing_Enfants WHERE id_enfant='.$idEnfant);

  $supEnfant=$bdd->query('DELETE FROM Listing_Img_Enfant WHERE id_img='.$idEnfant);
}

function get_comptes(){
  global $bdd;
  $comptes=$bdd->query('SELECT * FROM comptes');

  return $comptes;
}


// CONNEXION
function connexion($name,$mdp,$admin){
  // ramene la connection
  global $bdd;

  $req=$bdd->prepare('SELECT * FROM comptes WHERE compte=:name');
  $req->execute(array(
    'name'=>$name
  ));
  $resultat = $req->fetch();

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
      $_SESSION['ID']=$resultat['ID'];
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
  $req=$bdd->prepare('SELECT * FROM comptes WHERE compte=:name');
  $req->execute(array(
    'name'=>$compte
  ));
  $resultat = $req->fetch();

  session_start();
  $_SESSION['ID']=$resultat['ID'];
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

// MODIF PROFIL
function modif_profil($newName,$mdp,$id){
  global $bdd;

  $req=$bdd->prepare('UPDATE comptes SET compte=:newName ,mdp=:mdp WHERE ID=:ID');
  $req->execute(array(
    'newName'=> $newName,
    'mdp' => $mdp,
    'ID'=>$id
  ));

  $_SESSION['user']=$newName;
}

// SUPR PROFIL
function sup_profil($id){

  global $bdd;

  $supEnfant=$bdd->query('DELETE FROM comptes WHERE ID='.$id);
}


 ?>
