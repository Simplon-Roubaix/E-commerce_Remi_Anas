<?php
  include ("header.php");
  include ("prods.php");

  $enfant = $_POST['enfant'];
  echo $enfant;

  ?>
  <div class="childCard">
    <figure>
      <img src="<?php echo $prods[$enfant]['img']?>" alt="">
      <h2>oui</h2>
    </figure>

  </div>
<?php
include ("footer.php");
 ?>
