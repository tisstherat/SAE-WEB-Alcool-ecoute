<?php
require_once "../includes/startSession.php";

// Vérifier user connecté
if (isset($_SESSION['ID'])) {
  if ($_SESSION['isAdmin']) {
    require_once "../includes/adminNavbar.html";
  }
  else
    require_once "../includes/navBarUser.html";
}
else
  require_once "../includes/navbar.html";
?>
