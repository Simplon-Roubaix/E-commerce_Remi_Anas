<?php include('header.php');
  if ($_SESSION['connexion']==false) {

  ?>
  <main class="container" id="mainConnexion">
    <div >
      <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin">
          <span id="reauth-email" class="reauth-email"></span>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->
      </div><!-- /card-container -->
    </div><!-- /container -->
  </main>

  <?php
}
?>
<?php include('footer.php') ?>
