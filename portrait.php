<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>portrait</title>
  <link rel="stylesheet" href="css/style.css" media="screen"/>
</head>
<body>

  <?php
  include 'bdd/connect.php';
  ?>

  <!--requête sql pour afficher le profil sélectionné sur le trombinoscope -->


  <?php
  $req = $bdd->prepare('SELECT id,prenom, nom, annee, photo FROM trombi WHERE id=?');

  $req->execute(array($_GET['portrait']));
  $donnees=$req->fetch();
  ?>


  <div class="portrait">

  <img src="uploads/<?php echo $donnees['photo'];?>" />
</div>

<p class="nom">
  <?php echo $donnees['prenom'];?> <?php echo $donnees['nom']; ?>
</p>
<p class="nom">
  En formation à la MOS en <?php echo $donnees['annee']; ?>
</p>


<?php
$req->closeCursor();
?>


</div>
</body>
</html>
