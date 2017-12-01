<?php
include("template/header.php")
?>
<main id="main">

  <!-- ================ BOOK CARD ==================== -->
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="users.php">Voir les utilisateurs</a>
      <div class="container-fluid">
        <div class="row">
      <div class="input-field col s12 m10 l2">
        <select name="choix">
          <option value="" disabled selected>Catégorie</option>
          <option value="roman">Roman</option>
          <option value="bande dessinée">Bande Dessinée</option>
          <option value="nouvelle">Nouvelle</option>
          <option value="histoire">Histoire</option>
        </select>
      </div>
    </div>
  </div>

      <div class="container-fluid">
        <div class="row">
      <?php foreach ($books as $infosBook) {
        ?>
        <div class="col s12 m4 l4">
          <div class="card deep-orange">
            <div class="card-content white-text">
              <span class="card-title"><strong><?php echo $infosBook->getTitle()?></strong></span>
              <span class="card-title"><em> <?php echo $infosBook->getAuthor()?></em></span>
              <span class="card-title"><?php echo $infosBook->getYear()?></span>
            </div>

            <!-- <div class="card-action" id="link"> -->
            <form class="card-action" action="index.php" method="post">

                <input class="waves-effect waves-teal btn-flat white-text " type="submit" name="state" value="Emprunter">
              <input type="hidden" name="id" value="<?php echo $infosBook->getId()?>">
              <a class="white-text right" href="single.php?join=<?php echo $infosBook->getId()?>">Consulter</a><br>
            </form>

           <!-- </div> -->
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
