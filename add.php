<?php include('header.php') ?>

<div id="add" class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="well well-sm">
          <form action="post/add_post.php">
            <div class="row">
              <div class="col-md-6">
                <?php

                  $coordonnees = array (
                      'Nom' => 'nom',
                      'Prénom' => 'prenom',
                      'Age' => 'age',
                      'Pays' => 'pays',
                      'Infos' => 'infos',
                      'Conseil' => 'conseil'
                    );

                  foreach($coordonnees as $cle => $element)
                  {
                    ?>
                    <div class="form-group">
                       <input type="text" class="form-control" id="<?php echo $element?>" placeholder="<?php echo $cle?>" required="required" />
                     </div>
                    <?php
                  }
                 ?>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="description" id="description" class="form-control" rows="9" cols="25" required="required"
                          placeholder="Description"></textarea>
                        </div>
                        <p>Ajouter une photo</p>
                        <input class="btn btn-primary" type="submit" name="" value="Parcourir..">
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                          Ajouter</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Ajouter un enfant</legend>
                    <h5>Droit</h5>
                    <p>Inpunitate Isauri peius adulescentem iactitabant feris capiti excursibus motibus obiecti Namque Isauri oppidum amphitheatrali indignitate sunt eorum haec bella sunt.</p>
                    <hr>
                    <h5>Droit</h5>
                    <p>Inpunitate Isauri peius adulescentem iactitabant feris capiti excursibus motibus obiecti Namque Isauri oppidum amphitheatrali indignitate sunt eorum haec bella sunt.</p>
                    </form>
                  </div>
                </div>
              </div>
</div>

<?php include('footer.php') ?>