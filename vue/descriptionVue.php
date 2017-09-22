<body>
  <?php
  include ("template/header.php");
  ?>
  <main class="MainEnfant card">
    <div class="row description" >

      <!-- description -->

      <div class="col-sm-12 col-md-6 col-lg-6">

        <?php

          while ($donnees=$enfant->fetch()) {
         ?>

        <h1>

          <?php Echo $donnees['nom_enfant'];
          ?>

        </h1>

        <h2>Caractéristques de l'enfant:</h2>

        <ul>

          <li>Nationalité: <?php Echo $donnees['pays_enfant'];?></li>

          <li>Petit don de cet enfnant: <?php Echo $donnees['don_enfant'];?></li>

          <li>Infos supplémentaires: <?php Echo $donnees['infos_supp'];?></li>

          <li>Conseil d'éducation: <?php Echo $donnees['conseil'];?></li>

        </ul>
    </div>


    <!-- Photo de l'enfance -->

    <div class="col-sm-12 col-md-6 col-lg-6">

      <img src="../<?php echo $donnees['source_img'];?>" alt="">

    </div>
    <?php } ?>

  </div>
</main>


<?php
include ("template/footer.php");
?>

</body>
