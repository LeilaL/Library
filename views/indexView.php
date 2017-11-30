<?php
include("template/header.php")
?>
<main id="main">

  <!-- ================ BOOK CARD ==================== -->
  <div class="container-fluid">
    <div class="row">
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="form.php">Ajouter un livre</a>
      <a id="button" class="waves-effect btn deep-orange lighten-2" href="users.php">Voir les utilisateurs</a>
      <div class="input-field col s12 m10 l2">
        <select name="choix">
          <option value="" disabled selected>Catégorie</option>
          <option value="roman">Roman</option>
          <option value="bande dessinée">Bande Dessinée</option>
          <option value="nouvelle">Nouvelle</option>
          <option value="histoire">Histoire</option>
        </select>
      </div>

      <!-- <?php foreach ($books as $infosBook) {
        ?> -->
        <div class="col s12 m4 l4">
          <div class="card teal darken-4">
            <div class="card-content white-text">
              <!-- <span class="card-title"><strong>titre<?php echo $infosBook->getId()?></strong></span> -->
              <!-- <span class="card-title">auteur<em> <?php echo $infosBook->getName()?></em></span> -->
              <!-- <span class="card-title">année<?php echo $infosBook->getName()?></span> -->
            </div>
            <div class="card-action">
              <!-- <a href="single.php?join=<?php echo $infosBook->getId()?>">Consulter</a><br> -->
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
