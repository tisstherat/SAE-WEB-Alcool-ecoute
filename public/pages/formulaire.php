<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Alcool Ecoute</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/formulaire.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="../script/navbar-mobile.js" type="module" defer></script>
    <script src="../script/formulaire.js" type="module" defer></script>
</head>
<?php
if(!session_id())
    session_start();

require_once '../../private/app/flash.php';

messageFlash();

?>
<body class="formulaire-page">
<header class="row">
    <div class="col-2"><img src="../media/logo_AE.png" id="logo" alt="Logo Alcool Ecoute"/></div>
    <div class="col-8 container">
        <h1 class="col">ALCOOL ECOUTE</h1>
        <h2 class="col">Joie & Santé</h2>
    </div>
    <div class="col-2"><img src="../media/mobileNav.png" id="menu" alt="Menu"></div>

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
<body>

<div class="form-container">
    <h1 class="form-title">Formulaire </h1>
    <form action="../php/submit.php" method="post">

        <!-- Âge -->
        <div class="form-group">
            <label for="age" class="question">Âge</label>
            <input class="block" type="number" min="18" id="age" name="age" placeholder="Entrez votre âge" required>
        </div>

        <!-- Région -->
        <div class="form-group">
            <label for="region" class="question">Région :</label>
            <select id="region" name="region" class="block" required>
                <option value="">Sélectionnez votre région</option>
                <option value="Auvergne Rhône-Alpes">Auvergne Rhône-Alpes</option>
                <option value="Bourgogne Franche-Comté">Bourgogne Franche-Comté</option>
                <option value="Bretagne">Bretagne</option>
                <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                <option value="Corse">Corse</option>
                <option value="Grand-Est">Grand-Est</option>
                <option value="Hauts-de-France">Hauts-de-France</option>
                <option value="Île-de-France">Île-de-France</option>
                <option value="Normandie">Normandie</option>
                <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                <option value="Occitanie">Occitanie</option>
                <option value="Pays de la Loire">Pays de la Loire</option>
                <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guyane">Guyane</option>
                <option value="Martinique">Martinique</option>
                <option value="Mayotte">Mayotte</option>
                <option value="La Réunion">La Réunion</option>
                <option value="Je vis à l'étranger">Je vis à l'étranger</option>
            </select>
        </div>

        <!-- Activité professionnelle -->
        <div class="form-group">
            <label for="activite-pro" class="question">Activité professionnelle :</label>
            <select id="activite-pro" name="activite-pro" class="block" required>
                <option value="">Sélectionnez votre activité</option>
                <option value="Scolarité en milieu ordinaire">Scolarité en milieu ordinaire</option>
                <option value="Scolarité en dispositif spécialisé de l'Éducation Nationale">Scolarité en dispositif spécialisé de l'Éducation Nationale</option>
                <option value="Instruction en famille">Instruction en famille</option>
                <option value="Scolarité dans un établissement médico-social (IME, IMPRO…)">Scolarité dans un établissement médico-social (IME, IMPRO…)</option>
                <option value="Formation professionnelle">Formation professionnelle</option>
                <option value="Études supérieures">Études supérieures</option>
                <option value="Activité professionnelle en milieu ordinaire">Activité professionnelle en milieu ordinaire</option>
                <option value="Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)">Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)</option>
                <option value="Sans aucune activité scolaire ou professionnelle">Sans aucune activité scolaire ou professionnelle</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <!-- Lieu de vie -->
        <div class="form-group">
            <label for="lieu-de-vie" class="question">Lieu de vie :</label>
            <select id="lieu-de-vie" name="lieu-de-vie" class="block" required>
                <option value="">Sélectionnez votre lieu de vie :</option>
                <option value="Dans la famille en permanence">Dans la famille en permanence</option>
                <option value="Dans la famille avec une solution d'accueil ou des activités en journée">Dans la famille avec une solution d'accueil ou des activités en journée</option>
                <option value="Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement">Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement</option>
                <option value="Dans un logement indépendant">Dans un logement indépendant</option>
                <option value="Dans un habitat inclusif">Dans un habitat inclusif</option>
                <option value="Dans un foyer d'accueil médicalisé (FAM)">Dans un foyer d'accueil médicalisé (FAM)</option>
                <option value="Dans une maison d'accueil spécialisée (MAS)">Dans une maison d'accueil spécialisée (MAS)</option>
                <option value="Dans un foyer de vie ou de foyer d'hébergement">Dans un foyer de vie ou de foyer d'hébergement</option>
                <option value="En IME avec internat">En IME avec internat</option>
                <option value="Hospitalisation en psychiatrie">Hospitalisation en psychiatrie</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <!-- Lieu de vie - Orientation CDAPH -->
        <div class="form-group">
            <label class="question">Lieu de vie - Orientation CDAPH</label>
            <div class="qcm-options">
                <label class="qcm-option"><input type="radio" name="cdaph" value="Oui" required>Oui</label>
                <label class="qcm-option"><input type="radio" name="cdaph" value="Non" required>Non</label>
                <label class="qcm-option"><input type="radio" name="cdaph" value="Aucune" required>Aucune</label>
            </div>
        </div>

        <!-- Lieu de vie - Choix (QCM) -->
        <div class="form-group">
            <label class="question">Lieu de vie - Choix</label>
            <div class="qcm-options">
                <label class="qcm-option"><input type="radio" name="lieu-de-vie-choix" value="Oui" required> Oui</label>
                <label class="qcm-option"><input type="radio" name="lieu-de-vie-choix" value="Non" required> Non</label>
            </div>
        </div>


        <!-- Besoin (QCM) -->
        <div class="form-group">
            <label class="question">Besoin de soutien :</label>
            <div class="besoinsoutien">
                <label>
                    <input type="checkbox" name="besoin-soutien" value="Autonome">
                    La personne est totalement autonome
                </label>
                <label>
                    <input type="checkbox" name="besoin-soutien" value="Soutien-autonomie">
                    Un soutien à l'autonomie (logement, santé, loisirs, démarches administratives)
                </label>
                <label>
                    <input type="checkbox" name="besoin-soutien" value="Stimulations-ponctuelles">
                    Des interventions et stimulations ponctuelles (toilette, sorties, repas, communication)
                </label>
                <label>
                    <input type="checkbox" name="besoin-soutien" value="Aide-24h">
                    Une aide 24h/24 pour les actes de la vie quotidienne
                </label>
                <label>
                    <input type="checkbox" name="besoin-soutien" value="Autre">
                    Autre
                </label>
            </div>
        </div>

        <!-- Besoin commentaire -->
        <div class="form-group">
            <label for="besoin-commentaire" class="question">Besoin - Commentaire :</label>
            <textarea type="text" class="block" id="besoin-commentaire" name="besoin-commentaire" rows="4" placeholder="Décrivez votre besoin"></textarea>
        </div>
        <!-- Bouton de soumission -->
        <div class="submit">
            <button type="submit" class="btn-submit">Soumettre</button>
        </div>
    </form>
</div>

</body>
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
