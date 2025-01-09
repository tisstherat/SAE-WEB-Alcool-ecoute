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
$nbVivantChoix = querySQL('SELECT COUNT(*) AS nombreVivantCDAPH FROM enquete GROUP BY lieu_de_vie_choix ORDER BY 1');
$propOui = $nbVivantChoix/$nbUserEnquete*100;
$propOui = round($propOui, 2);
$propNon = 100-$propOui;

// Données pour le camembert
$data = [
  'labels' => ['Oui', 'Non'],
  'datasets' => [
    [
      'data' => [$propOui, $propNon],
      'backgroundColor' => ['#FF6384', '#36A2EB'],
    ]
  ]
];

echo json_encode($data);