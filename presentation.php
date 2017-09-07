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
        foreach ($prods as $key => $value) {
            echo '
              <div class="col-sm-5 col-md-5 col-lg-5 mt-5">
                   <div class="card card-inverse card-info">
                       <img class="card-img-top" src="img/enfant.jpg">
                       <div class="card-block">
                         <div class="card-text">

                           <h4 class="card-title">' . $value['Prenom'] . ' ' . $value['Nom'] . ' </h4>
                           <ul>
                             <li>'. $value['Pays'] .'</li>
                             <li>'. $value['Age'] .'ans</li>
                             <li>'. $value['Description'] .'</li>
                           </ul>

                         </div>
                       </div>
                       <form action="description.php" method="post">
                          <input type="hidden" name="child" value="'.$key.'">
                          <input type="submit" value="Voir enfant">
                       </form>
                   </div>
               </div>
        ';
      }
      // }
     ?>



  </section>
</main>
