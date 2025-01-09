<?php

use Gestion\AlcoolEcoute\BddConnect;

// return un json
header('Content-Type: application/json');
require_once "../includes/startSession.php";
require_once '../../vendor/autoload.php';

function querySQL($codeSql) {
  // récupération de données
  try {
    $bdd = new BddConnect();
    $pdo = $bdd->connexion();

    $query = $pdo->prepare($codeSql);
    $query->execute();
    $resultat = $query->fetchColumn();

    if (!$resultat) {
      throw new Exception("Aucun utilisateur trouvé avec l'ID 1.");
    }
  }
  catch(Exception $e) {
    $message = "Query impossible : " . $e->getMessage();
    $code = "warning";
    $_SESSION['flash'][$code] = $message;
  }
  // Code à exécuter
  return $resultat; // (Optionnel) Retourne un résultat
}
$nbUserEnquete = querySQL('SELECT COUNT(*) as total from enquete',);

$nbAutre = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Autre"');
$nbFamAcc = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans la famille avec une solution accueil"');
$nbFamPerm = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans la Famille en permanence"');
$nbFamPrin = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans la famille principalement"');
$nbFoyer = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans un foyer"');
$nbHabitInclu = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans un habitat inclusif"');
$nbLogeInde = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans un logement indépendant"');
$nbFAM = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans une FAM"');
$nbMAS = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Dans une MAS"');
$nbIME = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "En IME avec internat"');
$nbHP = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie = "Hospitalisation en psychiatrie"');



$propOui = $nbAutre/$nbUserEnquete*100;
$propNon = $nbAutre/$nbUserEnquete*100;
$propAucun = $nbAutre/$nbUserEnquete*100;

$propOui = round($propOui, 1);
$propNon = round($propNon, 1);
$propAucun = round($propAucun, 1);

// Données pour le camembert
$data = [
  'labels' => ["Autre", "Famille d'accueil", 'En famille en permanence', 'Famille principalement', 'En Foyer',
    'Habitat Inclusif', 'Logement indépendant', 'En FAM', 'En MAS', 'En IME', 'En Hôpital Psychiatrique'],
  'datasets' => [
    [
      'data' => [$nbAutre, $nbFamAcc, $nbFamPerm, $nbFamPrin, $nbFoyer,
        $nbHabitInclu, $nbLogeInde, $nbFAM, $nbMAS, $nbIME, $nbHP],
      'backgroundColor' => [
        "#4CAF50", // Vert
        "#FF9800", // Orange
        "#2196F3", // Bleu vif
        "#E91E63", // Rose vif
        "#9C27B0", // Violet
        "#FFC107", // Jaune doré
        "#00BCD4", // Cyan
        "#8BC34A", // Vert clair
        "#FF5722", // Rouge orangé
        "#607D8B", // Gris bleu
        "#795548"  // Brun
      ],
    ]
  ]
];

echo json_encode($data);