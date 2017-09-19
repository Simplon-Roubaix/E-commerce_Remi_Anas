<?php

  include('connexionSQL.php');

  echo $_POST['nom_enfant'];
  echo $_POST['id_image'];
  echo $_POST['age_enfant'];
  echo $_POST['pays_enfant'];
  echo $_POST['don_enfant'];
  echo $_POST['infos_supp'];
  echo $_POST['garantie'];
  echo $_POST['conseil'];
  echo $_POST['ref_enfant'];


  $req=$bdd->prepare('INSERT INTO Listing_Enfants(nom_enfant,id_image,age_enfant,pays_enfant,don_enfant,infos_supp,garantie,conseil,ref_enfant) VALUES(:nom_enfant,:id_image,:age_enfant,:pays_enfant,:don_enfant,:infos_supp,:garantie,:conseil,:ref_enfant)');
  $req->execute(array(
    'nom_enfant'=>$_POST['nom_enfant'],
    'id_image'=>$_POST['id_image'],
    'age_enfant'=>$_POST['age_enfant'],
    'pays_enfant'=>$_POST['pays_enfant'],
    'don_enfant'=>$_POST['don_enfant'],
    'infos_supp'=>$_POST['infos_supp'],
    'garantie'=>$_POST['garantie'],
    'conseil'=>$_POST['conseil'],
    'ref_enfant'=>$_POST['ref_enfant']
  ));

  header('Location:../index.php');
 ?>
