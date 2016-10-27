<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../images/favicon.png"/>
    <title>profil</title>
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title"/>
  </head>
  <body>

    <!-- - un `<h1>` "Bienvenue " + login de l'utilisateur -->
    <h1>Bienvenue <?php echo $_SESSION['nom']; ?></h1>

        <!-- -une zone "Vos informations"
      - Afficher "Votre profil est " + public ou privé selon le champ `public` en BDD
      - Afficher l'avatar de l'utilisateur (rappelez-vous qu'on a renseigné une image par défaut avatar.jpg)
      - Afficher "Prénom: " + le prénom (`firstname`) de l'utilisateur. Si celui-ci est vide en BDD, afficher "Pas de prénom indiqué"
      - Afficher "Nom: " + le nom (`name`) de l'utilisateur. Si celui-ci est vide en BDD, afficher "Pas de nom indiqué"
      - Afficher un lien ou bouton "Modifier" -->

    <?php include 'footer.php'; ?>
    
  </body>
</html>
