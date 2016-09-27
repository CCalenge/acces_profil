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
$req = $bdd->prepare('SELECT id, prenom, nom, annee, photo FROM trombi ORDER BY nom');
// on envoie la requête en faisant une boucle
while ($donnees = $req->fetch())
{
 ?>

 <div class="portrait">
   <h3>
     <?php echo htmlspecialchars($donnees['prenom']); ?>
   </h3>

 </div>
}





</body>
</html>
