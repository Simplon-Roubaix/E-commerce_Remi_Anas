<?php include('template/header.php') ?>
<main id="mainList" class="container pt-5">
  <div class="tableBg mb-5">
    <div class="card-header"><strong>Liste des enfants</strong></div>
    <div class="p-0">
      <table class="table table-bordered table-sm m-0 ">
        <thead class="">
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Pays</th>
            <th>Don</th>
            <th>Infos supp</th>
            <th>Conseil</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="modif">
          <?php
            while ($enfant = $enfants->fetch()) {
              if(isset($_POST["IdEnfantModif"]) AND $_POST["IdEnfantModif"]== $enfant['id_enfant']) {
                ?>
            <tr>
              <form action="listModifPost.php" method="post">
                <td>
                  <input class="form-control"  type="text" name="name" value="<?php echo $enfant['nom_enfant']?>">
                </td>
                <td>
                  <input class="form-control" type="text" name="age" value="<?php echo $enfant['age_enfant']?>">
                </td>
                <td>
                  <input class="form-control" type="text" name="pays" value="<?php echo $enfant['pays_enfant']?>">
                </td>
                <td>
                  <input class="form-control" type="text" name="don" value="<?php echo $enfant['don_enfant']?>">
                </td>
                <td>
                  <input class="form-control" type="text" name="infos" value="<?php echo $enfant['infos_supp']?>">
                </td>
                <td>
                  <input class="form-control" type="text" name="conseil" value="<?php echo $enfant['conseil']?>">
                </td>
                <td class="d-flex">
                  <input type="hidden" name="IdEnfantModif" value="<?php echo $enfant['id_enfant']?>">
                  <input class="btn btn-primary mx-1" type="submit" value="Valider">
                  <a class"pl-1 supr" href="supEnfant.php?idEnfant=<?php echo $enfant['id_enfant']?>">
                    Supprimer
                  </a>
                </td>
              </form>
            </tr>
            <?php
              }
              else {
              ?>
              <tr>
                <form class="" action="list.php" method="post">
                <td>
                  <?php echo $enfant['nom_enfant']?>
                </td>
                <td>
                  <?php echo $enfant['age_enfant']?>
                </td>
                <td>
                  <?php echo $enfant['pays_enfant']?>
                </td>
                <td>
                  <?php echo $enfant['don_enfant']?>
                </td>
                <td>
                  <?php echo $enfant['infos_supp']?>
                </td>
                <td>
                  <?php echo $enfant['conseil']?>
                </td>
                <td class="d-flex">
                  <input type="hidden" name="IdEnfantModif" value="<?php echo $enfant['id_enfant']?>">
                  <input class="btn btn-primary mx-1" type="submit" value="Modifier">
                  <a class"pl-1 supr" href="supEnfant.php?idEnfant=<?php echo $enfant['id_enfant']?>">
                    Supprimer
                  </a>

                </td>
              </form>
              </tr>
              <?php
                }
              }
              ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


<?php include('template/footer.php') ?>
