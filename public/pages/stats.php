<!DOCTYPE html>
<html lang="fr">
<!-- head -->
<?php $pageActuelle = 'Formulaire'; // Définit la page active pour css navbar
require_once "../includes/head.html"?>

<body>
  <!-- header -->
  <?php require_once "../includes/header.html" ?>

  <h1>Indicateurs</h1>
  <div class="grilleIndic">
    <div class="indic"> <canvas id="camembert1"></canvas> </div>
    <div class="indic"> <canvas id="camembert2"></canvas> </div>
    <div class="indic"> <canvas id="camembert3"></canvas> </div>
    <div class="indic"> <canvas id="camembert4"></canvas> </div>
    <div class="indic"> <canvas id="camembert5"></canvas> </div>
    <div class="indic"> <canvas id="barres1"></canvas></div>

  </div>


  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../script/stats.js" defer></script>

  <!-- footer -->
  <?php require_once "../includes/footer.html"?>
</body>
</html>
