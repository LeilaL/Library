<?php
include("template/header.php")
?>
<main id="main">

  <!-- ================ BOOK CARD ==================== -->
  <div class="container-fluid">
    <div class="row">
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Voir les utilisateurs</a>
      <!-- <?php foreach ($clients as $infosAccount) {
        ?> -->
        <div class="col s12 m4 l4">
          <div class="card teal darken-4">
            <div class="card-content white-text">
              <!-- <span class="card-title"><strong>titre<?php echo $infosAccount->getId()?></strong></span> -->
              <!-- <span class="card-title">auteur<em> <?php echo $infosAccount->getName()?></em></span> -->
              <!-- <span class="card-title">année<?php echo $infosAccount->getName()?></span> -->
            </div>
            <div class="card-action">
              <!-- <a href="single.php?join=<?php echo $infosAccount->getId()?>">Consulter</a><br> -->
           </div>
          </div>
        </div>
        <!-- <?php
      }
      ?> -->
    </div>
  </div>
  <!-- ======================================================== -->



</main>

<?php
include("template/footer.php");
?>
