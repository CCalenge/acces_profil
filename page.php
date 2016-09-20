<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/
DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">

<head>
<link rel="stylesheet" type="text/css" href="templates/styles.css" type="screen" />
</head>

<body>
<?php
 //On récupère la variable transmit par l'url
 $id_transmit=$_GET['id'];
 $dir = 'images/';
 // on se connecte à la base de données
 include "config.php";
 include "database.fn.php";
 echo "<div id='membre'>";
 // on affiche les données en fonction de l'id transmis
 include "infos.php";
 echo "</div>";
?>
</body>

</html>
