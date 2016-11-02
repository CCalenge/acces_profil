<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>galerie</title>
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title"/>
</head>
<body>

  <?php include 'bdd/connect.php';

  // requête sql pour récupérer les photos
  $reponse = $bdd->query("SELECT * FROM trombi ORDER BY nom ");
  // on envoie la requête en faisant une boucle
  ?>
  <div class="divaside">
    <?php
    while ($donnees = $reponse->fetch())
    { ?>

      <div class="asideportrait">

        <img src="uploads/<?php echo $donnees['photo'];?>" />

        <p><?php echo $donnees['prenom'];?> <?php echo $donnees['nom']; ?></p>

        <p class="asidelien">
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
