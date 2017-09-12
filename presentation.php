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

  <section class="intro row ">
    <div class="col-sm-12 col-md-12 col-lg-7 mt-7">
      <h2><?php echo $info['intro'] ?></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<strong> Vestibulum </strong>ut turpis quis ipsum consequat sollicitudin at vitae ligula. Nullam gravida metus <strong>eget urna vulputate</strong> pellentesque. Suspendisse aliquet justo eget nulla porta scelerisque. Curabitur vestibulum.<br><hr><br>Ut consequat massa lacus, luctus eleifend ipsum suscipit nec. Cras metustellus, vehicula facilisis leo et, convallis eleifend orci. Curabitur tristique urna sed velit finibus varius. Suspendisse pharetra eu dui quis feugiat. Donec finibus lacus blandit mauris feugiat dignissim.</p>
    </div>
    <div class=" col-sm-12 col-md-12 col-lg-5 mt-5">
      <figure class="dr float-left col-sm-5 col-md-5 col-lg-5">
        <img src="img/dr.jpg" alt="">
      </figure>
      <h2 class="">Dr.<?php echo $info['dr'] ?></h2>
      <p><strong>Cras metustellus, vehicula facilisis.</strong></p>
      <p class="">Suspendisse aliquet justo eget nulla porta scelerisque. Curabitur vestibulum.Ut consequat massa lacus, luctus eleifend ipsum suscipit nec. Cras metustellus, vehicula facilisis leo et.<br> Convallis eleifend orci. Curabitur tristique urna sed velit finibus varius. Suspendisse pharetra eu dui quis feugiat. Donec finibus lacus blandit</p>
    </div>
  </section>
</main>
