<?php
require_once "../includes/startSession.php";

// Vérifier user connecté
if (!isset($_SESSION['ID'])) {
    header('Location: connexion.php');
    exit;
}

// Vérifier admin
if (!$_SESSION['isAdmin']) {
    echo "Accès refusé : Vous n'êtes pas autorisé à accéder à cette page.";
  exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<!-- head -->

<?php $pageActuelle = 'Stats'; // Définit la page active pour css navbar
require_once "../includes/head.html"?>

<body>
  <!-- header -->
  <?php require_once "../includes/header.html" ?>
  <?php require_once "../includes/navbarDynamique.php" ?>
  <?php require_once "../includes/sessionFlash.php"?>

  <h1>Indicateurs</h1>
  <div class="grilleIndic">
    <div class="indic"><h3>Le lieu de vie correspond-il à une orientation CDAPH ?</h3>
      <canvas id="camembert1"></canvas> </div>
    <div class="indic"><h3>Le lieu de vie correspond-il à votre choix ?</h3>
      <canvas id="camembert2"></canvas> </div>
    <div class="indic"><h3>De quel type d'interventions l'adhérent a t-il besoin ?</h3>
      <canvas id="camembert3"></canvas> </div>
    <div class="indic"> <canvas id="barres1"></canvas></div>
  </div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../script/stats.js" defer></script>

  <!-- footer -->
  <?php require_once "../includes/footer.html"?>
</body>
</html>
