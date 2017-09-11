<?php
  include ("prods.php");

  $enfant = $_POST['enfant'];
  echo $enfant;

  ?>

    <figure>
      <img src="<?php echo $prods[$enfant]['img']?>" alt="">
      <h2>oui</h2>
    </figure>
