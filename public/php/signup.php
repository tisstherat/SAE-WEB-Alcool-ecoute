<?php

use Gestion\AlcoolEcoute\Authentification;
use Gestion\AlcoolEcoute\BddConnect;
use Gestion\AlcoolEcoute\MariaDBUserRepository;

require_once "../includes/startSession.php";
require_once '../../vendor/autoload.php';

$bdd = new BddConnect();

$pdo = $bdd->connexion();
$trousseau = new MariaDBUserRepository($pdo);
$auth = new Authentification($trousseau);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  try {
    $retour = $auth->register($_POST['lastname'],$_POST['firstname'],$_POST['email'], $_POST['password'], $_POST['repassword']);
    $message = "Vous êtes enregistré. Vous pouvez vous authentifier";
    $code = "success";
  }
  catch(Exception $e) {
    $retour = false;
    $message = "Enregistrement impossible : " . $e->getMessage();
    $code = "warning";
  }


  $_SESSION['flash'][$code] = $message;

  $direction = $_SERVER['HTTP_ORIGIN'];
  header("Location: $direction/public/pages/connexion.php");
}