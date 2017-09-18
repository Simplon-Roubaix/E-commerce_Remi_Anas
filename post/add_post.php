<?php

  include('connexionSQL.php');



  $req=$bdd->prepare('INSERT INTO Listing_Enfants(nom_enfant,id_image,age_enfant,pays_enfant,don_enfant,info_supp,garantie,conseil,ref_enfant) VALUES(:nom_enfant,:id_image,:age_enfant,:pays_enfant,:don_enfant,:info_supp,:garantie,:conseil,:ref_enfant)');
  $req->execute(array(
    'nom_enfant'=>$_POST['nom_enfant'],
    'id_image'=>$_POST['id_image'],
    'age_enfant'=>$_POST['age_enfant'],
    'pays_enfant'=>$_POST['pays_enfant'],
    'don_enfant'=>$_POST['don_enfant'],
    'info_supp'=>$_POST['info_supp'],
    'garantie'=>$_POST['garantie'],
    'conseil'=>$_POST['conseil'],
    'ref_enfant'=>$_POST['ref_enfant']
  ););

 ?>
