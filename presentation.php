<main class="container" id="main">
  <section class="intro row">
    <div class="">
      <h2>Introduction</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut turpis quis ipsum consequat sollicitudin at vitae ligula. Nullam gravida metus eget urna vulputate pellentesque. Suspendisse aliquet justo eget nulla porta scelerisque. Curabitur vestibulum.<br><br>Ut consequat massa lacus, luctus eleifend ipsum suscipit nec. Cras metus tellus, vehicula facilisis leo et, convallis eleifend orci. Curabitur tristique urna sed velit finibus varius. Suspendisse pharetra eu dui quis feugiat. Donec finibus lacus blandit mauris feugiat dignissim.</p>
    </div>
  </section>

  <hr>

  <section class="prods">
    <?php
      include ("prods.php");
      for ($i=0; $i <6 ; $i++) {
        echo '
        <div class="child col-5">

        ';
        foreach ($prods[$i] as $key => $value) {

          if ($key=='img') {
            echo '
              <figure class="childImg">
                <img src="'. $value .'" alt="">
              </figure>
              <ul class="description">
            ';
            $key='Description';
            $value='';

          }
          echo '
            <li><strong>'. $key .'</strong>: <span>' . $value . '</span></li>
          ';
        }

        echo '
          </ul>
           <form action="description.php" method="post">
             <input type="hidden" name="Nenfant" value="'.$i.'">
             <input type="submit" value="Voir l\'enfant">
           </form>

        </div>

        ';
      }
     ?>





  </section>
</main>
