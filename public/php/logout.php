<?php
session_start();
unset($_SESSION);
session_unset();
header("Location: ../../index.php");
exit();
?>
