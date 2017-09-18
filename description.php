<body>
  <?php
  include ("header.php");
  include ("prods.php");

  $enfant = $_POST['enfant'];


  ?>
  <main class="MainEnfant card">
    <div class="row description" >

      <!-- description -->

      <div class="col-sm-12 col-md-6 col-lg-6">


        <h1>

          <?php Echo $prods[$enfant]['Nom']." ". $prods[$enfant]['Prenom'];
          ?>

        </h1><br>

        <h2>Caractéristques de l'enfant:</h2><br>

        <ul>
          <li>Agé de: <?php Echo $prods[$enfant]['Age'];
          ?></li><br>
          <li>Nationalité: <?php Echo $prods[$enfant]['Pays'];
          ?></li><br>
          <li>Petit don de cet enfnant: <?php Echo $prods[$enfant]['Description'];
          ?>
        </li><br>
        <li>
          Infos supplémentaires: <?php Echo $prods[$enfant]['Infos supplementaire'];
          ?>
        </li><br>
        <li>
          Modalités de garantie: <?php Echo $prods[$enfant]['Garantie'];
          ?>
        </li><br>
        <li>
          Conseil d'éducation: <?php Echo $prods[$enfant]['Conseil d\'éducation'];
          ?>
        </li><br>
        <li>
          Réference produit: <span class="CodeBarre"><?php Echo $prods[$enfant]['Reference produit'];
          ?></span>
        </li><br>


      </ul>
    </div>



    <!-- Photo de l'enfance -->

    <div class="col-sm-12 col-md-6 col-lg-6">

      <img src=" <?php Echo $prods[$enfant]['img']; ?>  " alt="">

    </div>

  </div>
</main>


<?php
include ("footer.php");
?>

</body>
