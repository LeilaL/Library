<?php
include('template/header.php');
?>

<!-- ==================== FORM FOR ADD BOOK ================= -->

<h5 class="header center-align">Formulaire Ajout Livre</h5>
<a href="index.php" id="return"><strong>Retour</strong></a>
<div id="form" class="container">
  <div class="row">

    <form class="col s12" action="index.php" method="post">

      <div class="input-field col s12 m10 l7">
        <input id="text1" name="title" type="text" class="validate">
        <label for="text1">Titre</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="text2" name="author" type="text" class="validate">
        <label for="text2">Auteur</label>
      </div>

      <!-- <input type="hidden" name="state" value="disponible"> -->

      <div class="input-field col s12 m10 l7">
        <input id="year" name="year" type="number" class="validate">
        <label for="year">Année de parution</label>
      </div>

      <div class="input-field col s12 m10 l7">
          <select name="category">
            <option value="" disabled selected>Catégorie</option>
            <option value="roman">Roman</option>
            <option value="bande_dessinée">Bande Dessinée</option>
            <option value="nouvelle">Nouvelle</option>
            <option value="histoire">Histoire</option>
          </select>
        </div>


      <div class="input-field col s12 m10 l7">
        <textarea id="textarea1" name="resume" class="materialize-textarea"></textarea>
          <label for="textarea1">Résumé</label>
      </div>



      <div class="input-field col s10">
        <input class="waves-effect btn deep-orange lighten-2" value="Envoyer" name="add" type="submit" >
      </div>

    </form>

  </div>
</div>

<!-- ======================================================== -->


<?php
include('template/footer.php');
?>
