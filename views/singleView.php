<?php
include("template/header.php");
?>


<!-- ================ BOOK CARD DETAILS ==================== -->
<a href="index.php" id="return"><strong>Retour</strong></a>
<div class="row">
  <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
  <a id="button" class="waves-effect btn deep-orange lighten-2" href="users.php">Voir les utilisateurs</a><br>
  <br>
  <div class="col s12 m7 offset-m3 l6 offset-l3">
    <div class="card deep-orange">
      <div class="card-content white-text">
        <span class="card-title"><strong><?php echo $book->getTitle()?></strong></span>
        <span class="card-title"><em><?php echo $book->getAuthor();?></em></span>
        <span class="card-title"><?php echo $book->getYear()?></span>
        <p><?php echo $book->getCategory()?></p>
        <br>
<p><?php echo $book->getResume()?></p>
      </div>
    </div>
  </div>
</div>
<!-- ======================================================== -->


<?php

include("template/footer.php");

?>
