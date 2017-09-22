<?php

require_once("../modele/data.php");



  if (isset($_POST['nom_enfant']),isset($_POST['age_enfant']),isset($_POST['pays_enfant']),isset($_POST['don_enfant']),isset($_POST['infos_supp']),isset($_POST['conseil']),isset($_FILES['image'])) {

    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
      // Testons si le fichier n'est pas trop gros
      if ($_FILES['image']['size'] <= 2000000){
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)){
          // On peut valider le fichier et le stocker définitivement
          insert_img($_POST['nom_enfant'],$_POST['age_enfant'],$_POST['pays_enfant'],$_POST['don_enfant'],$_POST['infos_supp'],$_POST['conseil'],$_FILES['image'])
        }
      }
    }
  }


  header('Location:index.php');
 ?>
