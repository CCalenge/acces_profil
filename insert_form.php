<?php
include "config.php";
include "database.fn.php";
$link = database_connect($db);
// ***** ici on récupère les données et on les stocke dans mysql
$nom = $_POST['nom'];
$note = $_POST['note'];

//******* On renomme l'image de manière aléatoire pour éviter un conflit dans le dossier (2 fois le même nom par exemple
$dir = 'images/';
$ext = strtolower( pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION) );
$file=uniqid().'.'.$ext;

 //**** on bouge l'image
move_uploaded_file($_FILES['image']['tmp_name'], $dir.$file);

$photo = $file;

// on enregistre les données
$result = mysql_query("INSERT INTO trombi VALUES
(
 '',
'".mysql_real_escape_string($nom)."',
'".mysql_real_escape_string($note)."',
'".mysql_real_escape_string($photo)."'
)
");
//Si il y a une erreur, on crie ^^
if (!$result) {
 die('Requête invalide : ' . mysql_error());
}
// on ferme la connection mysql donc ci-dessous plus de sql
mysql_close($link);
?>
