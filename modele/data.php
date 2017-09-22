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
 ?>
