<?php
include("template/header.php");
?>


<!-- ================ BOOK CARD DETAILS ==================== -->
<a href="index.php" id="return"><strong>Retour</strong></a>
<div class="row">
  <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
  <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Voir les utilisateurs</a>
  <div class="col s12 m7 offset-m3 l6 offset-l3">
    <div class="card teal darken-4">
      <div class="card-content white-text">
        <!-- <span class="card-title"><strong>titre<?php echo $client->getId()?></strong></span> -->
        <!-- <span class="card-title">auteur<em><?php echo $client->getName();?></em></span> -->
        <!-- <span class="card-title">année<?php echo $infosAccount->getName()?></span> -->
<!-- <p>résumé</p> -->
      </div>
    </div>
  </div>
</div>
<!-- ======================================================== -->


<?php

include("template/footer.php");

?>
