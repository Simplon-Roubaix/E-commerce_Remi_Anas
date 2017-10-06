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

                <button type="submit" class="mx-2 btn btn-primary pull-right">
                  Modifier
                </button>
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
          <p>Aucun moyen de récuperer son mot de passe perdu ou son nom de compte préalablement modifié.<br>
            <hr>
          <h5>Supression</h5>
          Suprimer son compte Le plaisir d'adopter définitivement.</p>
          <!-- BUTTON MODALE -->
          <button type="button" class="btn btn-danger pull-left text-white" data-toggle="modal" data-target="#supCompte">
            Suprimer
          </button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="supCompte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suprimer son compte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Etes vous sûr de vouloir suprimer votre compte?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
        <a type="button" class="btn btn-danger text-white" href="sup_profilPost.php">oui</a>
      </div>
    </div>
  </div>
</div>

<?php include('template/footer.php') ?>
