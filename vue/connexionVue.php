<?php


include_once('template/header.php');
  if ($_SESSION['connexion']==false) {
    ?>
    <main class="container" id="mainConnexion">
    <?php

    // SI connexion
    if ($connexion=='connexion') {
      ?>
      <div >
        <div class="card card-container">
          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
          <p id="profile-name" class="profile-name-card"></p>
          <form class="form-signin" role="form" action="creer_compte.php" method="POST">
            <input type="hidden" name="addOrSign" value="connexion">
            <input type="text" name="compte" class="form-control" placeholder="Utilisateur" required autofocus>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>
          </form><!-- /form -->
        </div><!-- /card-container -->
      </div><!-- /container -->
      <?php
    }

    // SI CREER COMPTE
    elseif ($connexion=='creer') {
      ?>
      <div class="card">
        <form class="form-horizontal" role="form" method="POST" action="creer_compte.php">
          <input type="hidden" name="addOrSign" value="creer">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <h2>Créer un compte</h2>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-control-feedback float-right">
                <span class="text-danger ">
                  <!-- <i class="fa fa-close"></i> Erroné -->
                </span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group ">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                  <input type="text" name="compte" class="form-control"
                  placeholder="Utilisateur" required autofocus>
                </div>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-control-feedback float-right">
                <span class="text-danger">
                  <!-- <i class="fa fa-close"></i> Erroné -->
                </span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                  <input type="password" name="mdp" class="form-control"
                  placeholder="Mot de passe" required>
                </div>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Créer</button>
            </div>
          </div>
        </form>
      </div>
      <?php
      }
      else{
        ?>
        <div class="mt-5 mb-5 card">
          <h2><strong><?php echo "ERROR" ?></strong></h2>
        </div>
        <?php
      }
  ?>
  </main>
  <?php
    }
    include_once('template/footer.php');
?>
