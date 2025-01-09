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
$nb2424 = querySQL('SELECT COUNT(*) AS nombre FROM enquete where besoin = "Aide-24h"');
$nbStimulPonctuel = querySQL('SELECT COUNT(*) AS nombre FROM enquete where besoin = "Stimulations-ponctuelles"');
$nbSoutien = querySQL('SELECT COUNT(*) AS nombre FROM enquete where besoin = "Soutien-autonomie"');
$nbAutonome = querySQL('SELECT COUNT(*) AS nombre FROM enquete where besoin = "Autonome"');

$prop2424 = $nb2424/$nbUserEnquete*100;
$propSP = $nbStimulPonctuel/$nbUserEnquete*100;
$propSoutien = $nbSoutien/$nbUserEnquete*100;
$propAutonome = $nbAutonome/$nbUserEnquete*100;

$prop2424 = round($prop2424, 1);
$propSP = round($propSP, 1);
$propSoutien = round($propSoutien, 1);
$propAutonome = round($propAutonome, 1);

// Données pour le camembert
$data = [
  'labels' => ["Besoin de la présence d'une tierce personne 24 heures sur 24",
    'Des interventions et stimulations ponctuelles mais quotidiennes',
    "Un soutien à l'autonomie pour le logement, la santé, les loisirs, l'administratif",
    "La personne est totalement autonome"],
  'datasets' => [
    [
      'data' => [$prop2424, $propSP, $propSoutien, $propAutonome],
      'backgroundColor' => ["#4CAF50", "#FF9800", "#2196F3", "#E91E63"],
    ]
  ]
];

echo json_encode($data);