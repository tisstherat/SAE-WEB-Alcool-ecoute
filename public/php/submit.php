<?php

use Gestion\AlcoolEcoute\BddConnect;
use Gestion\AlcoolEcoute\MariaDBUserRepository;
use Gestion\AlcoolEcoute\Soumission;

if(!session_id())
    session_start();


require_once '../../vendor/autoload.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);
$soum = new Soumission($trousseau);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $retour = $soum->submit($_SESSION['ID'], $_POST['age'], $_POST['region'], $_POST['activite-pro'], $_POST['lieu-de-vie'], $_POST['cdaph'], $_POST['lieu-de-vie-choix'] === "Oui", $_POST['besoin-soutien'],$_POST['besoin-commentaire']);
        $message = "Enquete envoyé";
        $code = "success";
    }
    catch(Exception $e) {
        $retour = false;
        $message = "erreur : " . $e->getMessage();
        $code = "warning";
    }


    $_SESSION['flash'][$code] = $message;

    $direction = $_SERVER['HTTP_ORIGIN'];
    header("Location: $direction/index.php");

}
