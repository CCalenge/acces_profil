<?php session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../images/favicon.png"/>
    <title>profil</title>
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title"/>
  </head>
  <body>
    <header>
      <a href="./../index.php"><img src="../images/logo_mosstlo.svg" alt="logo de la mos saint-lo"/></a>

      <p>
      Bonjour <?php echo $_SESSION['user_prenom']; ?>, vous êtes connecté
      </p>

      <p class="lien">
        <a href="./../admin/log_admin.php">Espace administration</a><br/>
        <a href="./../membres/login.php">Espace membres</a>
      </p>

    </header>
    <!-- - un `<h1>` "Bienvenue " + prénom de l'utilisateur -->
    <h1>Bienvenue <?php echo $_SESSION['user_prenom']; ?></h1>

        <!-- -une zone "Vos informations"
      - Afficher "Votre profil est " + public ou privé selon le champ `public` en BDD
      - Afficher l'avatar de l'utilisateur (rappelez-vous qu'on a renseigné une image par défaut avatar.jpg)
      - Afficher "Prénom: " + le prénom (`firstname`) de l'utilisateur. Si celui-ci est vide en BDD, afficher "Pas de prénom indiqué"
      - Afficher "Nom: " + le nom (`name`) de l'utilisateur. Si celui-ci est vide en BDD, afficher "Pas de nom indiqué"
      - Afficher un lien ou bouton "Modifier" -->

      <div class="">
        <h3>Vos informations</h3>

        <div class="">

        <img src="./../uploads/<?php echo $_SESSION["user_photo"];?>" />

        <div class="nomportrait">
          <?php echo  $_SESSION['user_prenom'];?>
          <?php echo $_SESSION['user_nom']; ?>
        </div>
        <div class="renseignement">
          <p> Pseudo : <?php echo $_SESSION['user_pseudo'] ?>
          <p>
            Né(e) le : <?php echo $_SESSION['user_date_naissance']; ?>
          </p>
          <p>
            Ville : <?php echo $_SESSION["user_ville"]; ?>
          </p>
          <p>
            email : <?php echo $_SESSION['user_email']; ?>
          </p>
        </div>
        <p class="formation">
          En formation à la MOS en <?php echo $_SESSION['user_annee']; ?>
        </p>
      </div>

      <div class="renseignement">

        <p>
          Présentation : <?php echo $_SESSION['user_presentation']; ?>
        </p>
        <p>
          Emploi : <?php echo $_SESSION['user_travail']; ?>
        </p>
      </div>

    </div>

    <a href="modifprofil.php">Modifiez vos infos</a>

    <?php
    $req->closeCursor();
    ?>
      </div>


    <?php include '../footer.php'; ?>

  </body>
</html>
