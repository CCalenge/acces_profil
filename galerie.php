<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>galerie</title>
  <link rel="stylesheet" href="css/style.css" media="screen"/>
</head>
<body>
  <h2>Année 2016</h2>
  <?php
  include 'connect.php';

  // requête sql pour récupérer les photos
  $reponse = $bdd->query("SELECT id, prenom, nom, annee, photo FROM trombi ORDER BY nom ");
  // on envoie la requête en faisant une boucle
  ?>
  <div class="container">
    <?php
    while ($donnees = $reponse->fetch())
    { ?>

      <div class="portrait">

        <img src="uploads/<?php echo $donnees['photo'];?>" />

        <h3 class="nom"><?php echo $donnees['prenom'];?> <?php echo $donnees['nom']; ?></h3>

        <p class="lien2">
          <a href="portrait.php?portrait=<?php echo $donnees['id'];?>">+ d'infos</a>
        </p>

      </div>

      <?php
    }
    $reponse->closeCursor();

    ?>


  </div>
</body>
</html>
