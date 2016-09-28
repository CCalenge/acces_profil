<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>galerie</title>
  </head>
  <body>

<?php
include 'connect.php';

// requête sql pour récupérer les photos
$reponse = $bdd->query("SELECT id, prenom, nom, annee, photo FROM trombi WHERE annee = '2016' ORDER BY nom ");
// on envoie la requête en faisant une boucle
while ($donnees = $reponse->fetch())
{ ?>

  <img src="uploads/<?php echo $donnees['photo'];?>" />
<?php
}
$reponse->closeCursor();

?>

</body>
</html>
