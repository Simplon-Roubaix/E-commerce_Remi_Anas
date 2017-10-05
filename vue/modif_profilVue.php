<?php include('template/header.php') ?>

<div id="add" class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="well well-sm">
          <form action="modif_profil_post.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-9">
                <h2>Modifier mon profil</h2>

                <div class="form-group">
                   <input name="name" type="text" class="form-control" value="<?php echo $_SESSION['user']?>" required="required" />
                 </div>
                 <div class="form-group">
                   <input name="mdp" type="password" class="form-control" placeholder="Nouveau mdp" required="required" />
                 </div>
                 <div class="form-group">
                   <input name="mdpV" type="password" class="form-control" placeholder="Vérification" required="required" />
                 </div>

                    </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">
                          Modifier</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <form>
                    <legend><span class="glyphicon glyphicon-globe"></span>Précaution</legend>
                    <h5>Mémorisez</h5>
                    <p>Mémorisez bien votre nouveau mdp, notez le si besoin</p>
                    <hr>
                    <h5>Infos</h5>
                    <p>Aucun moyen de récuperer sont mot de passe perdu où sont nom de compte modifier.<br>
                      <hr>
                    La mission de l'AFA est de vous informer et vous accompagner dans votre projet d'adoption</p>
                    </form>
                  </div>
                </div>
              </div>
</div>

<?php include('template/footer.php') ?>
