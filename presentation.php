<main class="" id="main">
  <section class=" prods col-sm-12 col-md-12 col-lg-12 mt-12">
    <?php
    include ("prods.php");
    foreach ($prods as $key => $value) {

      ?>

      <div style="background-image:url('<?php echo $value['img']?>')" class="childCard col-sm-3 col-md-3 col-lg-3 mt-3">
        <div class="colorBack" style='background-color:<?php echo $colorBack[$key]?>'>
          <h4 class="card-title"><?php echo $value['Prenom'] . ' ' . $value['Nom']?></h4>
          <p><?php echo $value['Pays'] ?> <?php echo $value['Age'] ?> ans  <?php echo $value['Description'] ?></p>
          <form class="" action="description.php" method="post">
            <input type="hidden" name="enfant" value="<?php echo $key ?>">
            <input class="viewChild" type="submit" value="Voir l'enfant">
          </form>
        </div>
      </div>

      <?php
    };
    ?>

  </section>

  <section class="intro ">
    <div class="card">
      <h2>Problème de fertilité ?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<strong> Vestibulum </strong>ut turpis quis ipsum consequat sollicitudin at vitae ligula. Nullam gravida metus <strong>eget urna vulputate</strong> pellentesque. Suspendisse aliquet justo eget nulla porta scelerisque. Curabitur vestibulum.<br><hr><br>Ut consequat massa lacus, luctus eleifend ipsum suscipit nec. Cras metustellus, vehicula facilisis leo et, convallis eleifend orci. Curabitur tristique urna sed velit finibus varius. Suspendisse pharetra eu dui quis feugiat. Donec finibus lacus blandit mauris feugiat dignissim.</p>
    </div>
  </section>
</main>
