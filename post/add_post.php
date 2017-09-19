<?php

  include('connexionSQL.php');

  $req=$bdd->prepare('INSERT INTO Listing_Enfants(nom_enfant,age_enfant,pays_enfant,don_enfant,infos_supp,conseil) VALUES(:nom_enfant,:age_enfant,:pays_enfant,:don_enfant,:infos_supp,:conseil)');
  $req->execute(array(
    'nom_enfant'=>$_POST['nom_enfant'],
    'age_enfant'=>$_POST['age_enfant'],
    'pays_enfant'=>$_POST['pays_enfant'],
    'don_enfant'=>$_POST['don_enfant'],
    'infos_supp'=>$_POST['infos_supp'],
    'conseil'=>$_POST['conseil']
  ));


// TRAITEMENT DE L IMAGE
$img='../img/' . basename($_FILES['image']['name']);
$imgBDD='img/' . basename($_FILES['image']['name']);

var_dump($img);
  if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
    // Testons si le fichier n'est pas trop gros

    if ($_FILES['image']['size'] <= 2000000){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['image']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

          if (in_array($extension_upload, $extensions_autorisees)){
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['image']['tmp_name'], $img );
          }
      }
  }

  $req=$bdd->prepare('INSERT INTO Listing_Img_Enfant(source_img, alt_img) VALUES(:image, :alt)');
  $req->execute(array(
    'image'=> $imgBDD,
    'alt'=> '0'
  ));

  header('Location:../index.php');
 ?>
