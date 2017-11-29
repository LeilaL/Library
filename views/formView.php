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
        <input id="year" name="year" type="number" class="validate">
        <label for="year">Année</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="text2" name="name" type="text" class="validate">
        <label for="text2">Author</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="text3" name="resume" type="text" class="validate">
        <label for="text3">Résumer</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="text4" name="category" type="text" class="validate">
        <label for="text4">Catégorie</label>
      </div>

      <div class="input-field col s10">
        <input class="waves-effect btn deep-orange lighten-2" value="Envoyer" type="submit" >
      </div>

    </form>

  </div>
</div>

<!-- ======================================================== -->


<?php
include('template/footer.php');
?>
