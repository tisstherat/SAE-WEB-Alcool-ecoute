

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact - Alcool Ecoute</title>
        <link rel="stylesheet" href="../style/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <script src="../script/navbar-mobile.js" type="module" defer></script>
    </head>
    <body class="contact-page">
    <header class="row">
        <div class="col-2"><img src="../media/logo_AE.png" id="logo" alt="Logo Alcool Ecoute"/></div>
        <div class="col-8 container">
            <h1 class="col">ALCOOL ECOUTE</h1>
            <h2 class="col">Joie & Santé</h2>
        </div>
        <div class="col-2"><img src="../media/mobileNav.png" id="menu" alt="Menu"></div>
        <div class="login"></div>
        <nav id="navbar">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="historique.php">Historique</a></li>
                <li><a href="#">Les associations</a></li>
                <li><a href="#">La prévention</a></li>
                <li><a href="#">L'accompagnement</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>

    </header>
    <?php
    if(!session_id())
        session_start();

    require_once '../../private/app/flash.php';

    messageFlash();

    ?>
    <main class="main-container">
        <div class="contact-section">
            <h2>Contact</h2>
            <p>N'hésitez pas à nous contacter ! Et pensez à regarder notre FAQ !</p>
        </div>

        <form>
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
                <textarea id="message" name="message" rows="5" required="required"></textarea>
            </div>
            <button type="submit">Envoyer</button>
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

    <footer class="">
        <div class="">
            ALCOOL ECOUTE F.N.J.S.
            Reconnue d’Utilité Publique
            Groupement d’Associations d’Aide aux Personnes en Difficulté avec l’Alcool
            Mouvement de Jeunesse et d’Education Populaire<br>
            Agrément National Ministère de la Santé
            SIEGE SOCIAL – 3 Impasse des Alouettes – 86190 AYRON
        </div>
        <img src="../media/logo_assurance_maladie.png">
        <img src="../media/logo_ministere_jeunesse.png">
        <img src="../media/logo_mildt.png">
        <img src="../media/logo_ministere_sante.png">
        <img src="../media/logo_msa.png">
    </footer>
    </body>
</html>
