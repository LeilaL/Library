<?php
include("template/header.php")
?>
<main id="main">

  <!-- ================ BOOK CARD ==================== -->
      <a href="index.php" id="return"><strong>Retour</strong></a>
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
      <div class="container-fluid">
        <div class="row">

      <?php foreach ($users as $user) {
        ?>
        <div class="col s12 m4 l4">
          <div class="card deep-orange">
            <div class="card-content white-text">
              <span class="card-title"><strong><?php echo $user->getLastName()?> <?php echo $user->getFirstName()?></strong></span>
              <span class="card-title"><?php echo $user->getCity()?></span>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <!-- ======================================================== -->



</main>

<?php
include("template/footer.php");
?>
