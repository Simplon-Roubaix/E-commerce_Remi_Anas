<?php include('header.php') ?>

<div id="add" class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="well well-sm">
          <form action="post/add_post.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">

                <?php
                  include('prods.php');
                  foreach($coordonnees as $cle => $element)
                  {
                    ?>
                    <div class="form-group">
                       <input name="<?php echo $element ?>" type="text" class="form-control" placeholder="<?php echo $cle?>" required="required" />
                     </div>
                    <?php
                  }
                 ?>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="conseil"  class="form-control" rows="9" cols="25" required="required"
                          placeholder="Conseil"></textarea>
                        </div>
                        <p><strong>Ajouter une photo</strong></p>
                        <input class="mb-3 btn btn-primary" name="image" type="file" value="Parcourir..">
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">
                          Ajouter</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Ajouter un enfant</legend>
                    <h5>Ordre</h5>
                    <p>La MAI veille au respect des engagements souscrits par la France dans le cadre de la convention de La Haye de 1993 sur la protection des enfants et la coopération internationale en matière d’adoption (CLH)..</p>
                    <hr>
                    <h5>Infos</h5>
                    <p>Actuellement, l'AFA travaille avec près de trente pays.<br>
                      La mission de l'AFA est de vous informer et vous accompagner dans votre projet d'adoption</p>
                    </form>
                  </div>
                </div>
              </div>
</div>

<?php include('footer.php') ?>
