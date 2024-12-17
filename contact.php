<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacter AlcoolEcoute</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">

</head>
<body>
<header class = reset-this>
  <div><img src="./media/logo_AE.png" id="logo" alt="logoAE"/></div>
  <h1>ALCOOL ECOUTE</h1>
  <h2>Joie & Santé</h2>

  <img src="media/mobileNav.png" id="menu" alt="logoMenuDeroulant">
</header>

<div class="container my-5">
  <!-- Header Section -->
  <div class="contact-header mb-4">
    <h2>Contact</h2>
    <p>N’hésitez pas à nous contacter ! et pensez à regarder notre FAQ !</p>
  </div>

  <!-- Contact Form -->
  <div class="contact-form p-4">
    <h4 class="mb-4">Vos informations</h4>
    <form>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="prenom" class="form-label">Prénom*</label>
          <input type="text" class="form-control" id="prenom" required>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Votre email *</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="col-md-4">
          <label for="nom" class="form-label">Nom*</label>
          <input type="text" class="form-control" id="nom" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Votre message *</label>
        <textarea class="form-control" id="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>

  <!-- Footer Contact Information -->
  <div class="footer-contact mt-4 p-4 rounded">
    <div class="row">
      <div class="col-md-6">
        <h5>Contact Bureau</h5>
        <p>Tél : 09.71.53.36.14 (Présidente)<br>
          Email présidente : <a href="mailto:ALCOOL-ECOUTE-FNJS@wanadoo.fr">ALCOOL-ECOUTE-FNJS@wanadoo.fr</a><br>
          Tél : 04.50.30.80.51 (Secrétaire)<br>
          Email secrétaire : <a href="mailto:secretariat.fnjs@orange.fr">secretariat.fnjs@orange.fr</a><br>
          Tél/Fax : 04.56.44.21.60 (Trésorier)<br>
          Email trésorier : <a href="mailto:alcoolecoutefn@yahoo.fr">alcoolecoutefn@yahoo.fr</a><br>
          Tél/Fax : 06 09 89 45 08 (Trésorier adjoint)<br>
          Monsieur Bernard COLIN<br>
          93110 RONY Sous BOIS
        </p>
      </div>
      <div class="col-md-6">
        <h5>Contact Région</h5>
        <p>Centre / Auvergne 04 70 08 09 14<br>
          Mail : <a href="mailto:alcool-ecoute-c.pujol@wanadoo.fr">alcool-ecoute-c.pujol@wanadoo.fr</a><br>
          Champagne Ardennes 03 25 31 71 20<br>
          Mail : <a href="mailto:noel.mielle@orange.fr">noel.mielle@orange.fr</a><br>
          Rhône Alpes 04 56 44 21 60<br>
          Mail : <a href="mailto:alcoolecoutefn@yahoo.fr">alcoolecoutefn@yahoo.fr</a><br>
          Poitou Charente 09 71 53 36 14<br>
          Mail : <a href="mailto:ALCOOL-ECOUTE-FNJS@wanadoo.fr">ALCOOL-ECOUTE-FNJS@wanadoo.fr</a>
        </p>
      </div>
    </div>
    <div class="text-center mt-4">
      <p><strong>SIEGE SOCIAL</strong><br>3 Impasse des Alouettes<br>86190 AYRON</p>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php require_once "includes/footer.html"?>
</body>
</html>
