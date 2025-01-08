<!DOCTYPE html>
<html lang="fr">

<?php $pageActuelle = 'Accueil'; // Définit la page active pour css navbar
require_once "../includes/head.html" ?>

<body>
<?php require_once "../includes/header.html" ?>
<?php require_once "../includes/navbarV.php" ?>
  <?php require_once "../includes/sessionFlash.php"; ?>

  <div id="page">
      <article>
          <h2>L’alcool est-il mauvais pour la santé ?</h2>
          <p>
              La consommation de l’alcool peut-être très dangeureuse et provoquer des dommages
              importants sur la santé.<br>A long terme, elle augmente le risque de développer un cancer,
              une maladie du foie, des maladies cardiovasculaires et des troubles sur le système nerveux.<br>
              L’alcool augmente le risque d’accident sur la route et la violence familiale, intime et sexuelle.
          </p>
      </article>

      <article class="row justify-content-center">
          <div class="col-12 col-md-6">
              <h2>Tout savoir sur l'alcool</h2>
              <ul>
                  <li>Sortir de l’addiction</li>
                  <li>Les témoignages</li>
                  <li>Comprendre l’addiction</li>
                  <li>Quelles complications ?</li>
                  <li>Addiction et société</li>
              </ul>
          </div>
          <div class="col-12 col-md-6 justify-content-center">
              <img src="../media/imgnon1.png">
          </div>
      </article>

      <article class="row justify-content-center">
          <h2>Qui sommes-nous ?</h2>
          <div class="col-12 col-md-6 justify-content-center">
              <img src="../media/rnoiquestion.png">
          </div>
          <div class="col-12 col-md-6">
              <p>
                  Fédération Nationale Joie et Santé dite « Alcool Ecoute FNJS »
              </p>
              <p>
                  Groupement d’Associations d’Aide aux personnes en Difficulté avec l’Alcool.<br>
                  Fondée en 1964, composée d’Associations régies par la loi du 1er juillet 1901.
              </p>
          </div>
      </article>

  </div>

<?php require_once "../includes/footer.html"?>
</body>
</html>

