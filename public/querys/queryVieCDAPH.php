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
$nbOui = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = "Oui"');
$nbNon = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = "Non"');
$nbAucun = querySQL('SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = "Aucune"');

$propOui = $nbOui/$nbUserEnquete*100;
$propNon = $nbNon/$nbUserEnquete*100;
$propAucun = $nbAucun/$nbUserEnquete*100;

$propOui = round($propOui, 1);
$propNon = round($propNon, 1);
$propAucun = round($propAucun, 1);

// Données pour le camembert
$data = [
  'labels' => ["Pas d'orientation", 'Oui', 'Non'],
  'datasets' => [
    [
      'data' => [$propAucun, $propOui, $propNon],
      'backgroundColor' => ["#FF6384", "#36A2EB", "#FFCE56"],
    ]
  ]
];

echo json_encode($data);