<?php
include("template/header.php")
?>
<main id="main">

  <a id="button" class="waves-effect btn deep-orange lighten-2 right" href="form.php">Ajouter un livre</a>
  <a id="button" class="waves-effect btn deep-orange lighten-2 right" href="users.php">Voir les utilisateurs</a>
  <div class="container-fluid">
    <div class="row">
      <div class="input-field col s12 m5 l2">
        <!-- ================ DROPDOWN ==================== -->
        <form action="index.php" method="post">
          <select name="category">
            <option value="" disabled selected>Catégorie</option>
            <option value="roman">Roman</option>
            <option value="bande dessinée">Bande Dessinée</option>
            <option value="nouvelle">Nouvelle</option>
            <option value="histoire">Histoire</option>
          </select>
          <input class="waves-effect btn waves-light deep-orange lighten-2"type="submit" name="search" value="Rechercher">
        </form>

        <!-- ==================================== -->

      </div>
    </div>
  </div>
  <a id="button" class="waves-effect btn deep-orange lighten-2" href="../controllers/index.php">Voir tout les Livres</a>
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($books as $infosBook) {
        ?>
        <!-- ================ BOOK CARD ==================== -->
        <div class="col s12 m4 l4">
          <div class="card deep-orange">
            <div class="card-content white-text">
              <span class="card-title"><strong><?php echo $infosBook->getTitle()?></strong></span>
              <span class="card-title"><em> <?php echo $infosBook->getAuthor()?></em></span>
              <span class="card-title"><?php echo $infosBook->getYear()?></span>
              <span class="card-title"><?php echo $infosBook->getCategory()?></span>
              <span ><?php if ($infosBook->getState() == 1) {
                echo 'Disponible';
              } else {
                echo 'Prêté';
              } ?></span>
            </div>

            <div class="card-action" id="link">
              <a class="white-text right" href="single.php?join=<?php echo $infosBook->getId()?>">Consulter</a><br>
            </div>
          </div>
        </div>
        <!-- ======================================================== -->
        <?php
      }
      ?>
    </div>
  </div>



</main>

<?php
include("template/footer.php");
?>
