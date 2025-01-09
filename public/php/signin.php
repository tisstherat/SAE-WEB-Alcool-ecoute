<?php

use Gestion\AlcoolEcoute\Authentification;
use Gestion\AlcoolEcoute\BddConnect;
use Gestion\AlcoolEcoute\MariaDBUserRepository;

require_once "../includes/startSession.php";
require_once "../includes/sessionFlash.php";
require_once '../../vendor/autoload.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);
$auth = new Authentification($trousseau);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  try {
    $retour = $auth->authenticate($_POST['email'], $_POST['password']);
    $_SESSION['ID'] = $trousseau->getIdByEmail($_POST['email']);

    $_SESSION['isAdmin'] = $trousseau->isAdminById($_SESSION['ID']);

    $message = "Authentification réussie vous êtes connecté";
    $code = "success";
  }
  catch(Exception $e) {
    $retour = false;
    $message = "Authentification impossible : " . $e->getMessage();
    $code = "warning";
  }


  $_SESSION['flash'][$code] = $message;

  $direction = $_SERVER['HTTP_ORIGIN'];
  header("Location: $direction/public/pages/accueil.php");
}