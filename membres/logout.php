<?php
// mise à dispo de $_SESSION
session_start();
// suppression de la session

session_destroy();

// Redirection vers la page de login
header('Location: /index.php');
?>
