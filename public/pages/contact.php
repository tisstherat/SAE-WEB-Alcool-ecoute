<!DOCTYPE html>
<html lang="fr">

<?php $pageActuelle = 'Contact'; // Définit la page active pour css navbar
require_once "../includes/head.html" ?>

<body>

<?php require_once "../includes/header.html" ?>
<?php require_once "../includes/navbar.html" ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php require_once "../includes/sessionFlash.php" ?>

<main class="main-container">
  <div class="contact-section">
    <h2>Contact</h2>
    <p>N'hésitez pas à nous contacter ! Et pensez à regarder notre FAQ !</p>
  </div>

  <form class="formulaire">
    <div>
        <?php
        if(!session_id())
            session_start();
        require_once "../php/signin.php";

        if(isset($_SESSION['ID'] )&& isset($_SESSION['isAdmin'])) {
            if($_SESSION['isAdmin']==0) {
                echo <<<HTML
                          <div class="form-group">
                            <label for="message">Votre message</label>
                            <textarea id="message" name="message" rows="5" required="required"></textarea>
                          </div>  
                        HTML;
            }
        }elseif (!isset($_SESSION['ID']) && !isset($_SESSION['isAdmin'])) {
            echo <<<HTML
                <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" required="required">
    </div>
    <div class="form-group">
      <label for="email">Votre email</label>
      <input type="email" id="email" name="email" required="required">
    </div>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" required="required">
    </div>
    <div class="form-group">
                            <label for="message">Votre message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                          </div> 
HTML;
        }
        require_once '../../private/app/flash.php';

        messageFlash();

        ?>
    </div>
    <button type="submit" id="send">Envoyer</button>
  </form>

  <section class="contact-info">
    <div class="contact-column">
      <h3>Contact Bureau :</h3>
      <p><strong>Tél :</strong> 09.71.53.36.14 (Présidente)</p>
      <p><strong>Email présidente :</strong> <a href="mailto:ALCOOL-ECOUTE-FNJS@wanadoo.fr">ALCOOL-ECOUTE-FNJS@wanadoo.fr</a></p>
      <p><strong>Tél :</strong> 04.50.03.80.51 (Secrétaire)</p>
      <p><strong>Email secrétaire :</strong> <a href="mailto:secretaire1.fnjs@orange.fr">secretaire1.fnjs@orange.fr</a></p>
      <p><strong>Tél/Fax :</strong> 04.56.44.21.60 (Trésorier)</p>
      <p><strong>Email trésorier :</strong> <a href="mailto:alcool.ecoutefn@yahoo.fr">alcool.ecoutefn@yahoo.fr</a></p>
      <p><strong>Adresse :</strong> Monsieur Bernard COLIN, 93110 RONY Sous BOIS</p>
    </div>

    <div class="contact-column">
      <h3>Contact Région :</h3>
      <p><strong>Centre / Auvergne :</strong> 04 70 08 09 14</p>
      <p>Email : <a href="mailto:alcool-ecoute-e.journal@wanadoo.fr">alcool-ecoute-e.journal@wanadoo.fr</a></p>
      <p><strong>Champagne Ardennes :</strong> 03 25 31 17 20</p>
      <p>Email : <a href="mailto:noel.melle@orange.fr">noel.melle@orange.fr</a></p>
      <p><strong>Rhône Alpes :</strong> 04 58 44 21 60</p>
      <p>Email : <a href="mailto:alcoolecoutefn@yahoo.fr">alcoolecoutefn@yahoo.fr</a></p>
      <p><strong>Poitou Charente :</strong> 09 71 53 36 14</p>
      <p>Email : <a href="mailto:ALCOOL-ECOUTE-FNJS@wanadoo.fr">ALCOOL-ECOUTE-FNJS@wanadoo.fr</a></p>
    </div>
  </section>
</main>

<?php require_once "../includes/footer.html" ?>
<script src="../script/contact.js"></script>
</body>
</html>
