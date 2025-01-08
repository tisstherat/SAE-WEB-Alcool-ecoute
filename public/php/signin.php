<?php

use Gestion\AlcoolEcoute\Authentification;
use Gestion\AlcoolEcoute\BddConnect;
use Gestion\AlcoolEcoute\MariaDBUserRepository;

if(!session_id())
  session_start();


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

    $message = "Authentification réussie connecté avec l'id : " . $_SESSION['ID'] .
      " admin : " . $_SESSION['isAdmin'];
    $code = "success";
  }
  catch(Exception $e) {
    $retour = false;
    $message = "Authentification impossible : " . $e->getMessage();
    $code = "warning";
  }


  $_SESSION['flash'][$code] = $message;

  $direction = $_SERVER['HTTP_ORIGIN'];
  header("Location: $direction/public/pages/stats.php");
}