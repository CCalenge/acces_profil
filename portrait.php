<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png"/>
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

    <p class="nom">
      <?php echo $donnees['prenom'];?> <?php echo $donnees['nom']; ?>
    </p>
    <p class="nom">
      En formation à la MOS en <?php echo $donnees['annee']; ?>
    </p>
  </div>

  <?php
  $req->closeCursor();
  ?>

  <p>
    <a href="index.php">Retour au trombinoscope</a>
  </p>

</div>
</body>
</html>
