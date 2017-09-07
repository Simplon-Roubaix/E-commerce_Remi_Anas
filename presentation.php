<main class="container">
  <section class="intro row">
    <div class="">
      <h2>Introduction</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut turpis quis ipsum consequat sollicitudin at vitae ligula. Nullam gravida metus eget urna vulputate pellentesque. Suspendisse aliquet justo eget nulla porta scelerisque. Curabitur vestibulum.<br><br>Ut consequat massa lacus, luctus eleifend ipsum suscipit nec. Cras metus tellus, vehicula facilisis leo et, convallis eleifend orci. Curabitur tristique urna sed velit finibus varius. Suspendisse pharetra eu dui quis feugiat. Donec finibus lacus blandit mauris feugiat dignissim.</p>
    </div>
  </section>
  <section class="prods">

    <?php
      include ("prods.php");
      for ($i=0; $i <6 ; $i++) {
        foreach ($prods[$i] as $key => $value) {

          if ($key=='img') {
            echo '
            <figure>
              <img src="'. $value .'" alt="">
            </figure>
            ';
            $key='Description';
            $value='';

          }
          echo '
          <ul>
          <li><strong>'. $key .'</strong>: <span>' . $value . '</span></li>
          </ul>
          ';
        }
      }
     ?>


  </section>
</main>
