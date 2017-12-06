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
        <p><?php echo $book->getCategory()?></p><br>
        <br>
        <span ><?php if ($book->getState() == 1) {
          echo 'Disponible';
        } else {
          echo 'Prêté';
        }?></span><br>
        <br>
        <p><?php echo $book->getResume()?></p>
      </div>

      <!-- <div class="card-action <?php if ($book->getState() == 0) {
      echo "hide";
    } ?>" id="link">
    <ul class="mz-collapsible" data-collapsible="accordion">
    <li>
    <div class="mz-collapsible-item-header white-text deep-orange lighten-2">
    <i class="white-text material-icons">info</i> Pour l'emprunter veuillez saisir l'identifiant de l'utilisateur
  </div>
  <div class="mz-collapsible-item-body">
  <form class="card-action" action="index.php" method="post">
</div>
<input name="user_id" type="number" class="validate" required>
<input class="waves-effect waves-teal btn deep-orange lighten-2 white-text" type="submit" name="submit" value="Emprunter">
<input type="hidden" name="id" value="<?php echo $book->getId()?>">
<input type="hidden" name="state" value="0">
</form>
</li>
</ul>
</div> -->
</div>
</div>
</div>
<!-- ======================================================== -->


<?php

include("template/footer.php");

?>
