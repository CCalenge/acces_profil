<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/
DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">

<head>
<link rel="stylesheet" type="text/css" href="templates/styles.css" type="screen" />
</head>

<body>
<div id="header">
 <a href="form.html"> Rajouter un membre</a><br>
 <?php
 include "config.php";
 include "database.fn.php";
 $link = database_connect($db);
 $dir = 'images/';

 /**** on va chercher la boucle afin d'afficher la gallery*/
 include "gallery.php";

 ?>
</div><!–fermeture header –>
</body>

</html>
