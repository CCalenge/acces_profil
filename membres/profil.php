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

        <?php
        include '../bdd/connect.php';

        //requête sql pour afficher le profil sélectionné sur le trombinoscope

        $req = $bdd->prepare('SELECT * FROM trombi WHERE id= ?');

        while($donnees=$req->fetch());
        ?>

        <img src="../uploads/<?php echo $donnees['photo'];?>" />

        <div class="nomportrait">
          <?php echo $donnees['prenom'];?>
          <?php echo $donnees['nom']; ?>
        </div>
        <div class="renseignement">
          <p> Pseudo : <?php echo $donnees['pseudo'] ?>
          <p>
            Né(e) le : <?php echo $donnees['date_naissance']; ?>
          </p>
          <p>
            Ville : <?php echo $donnees['ville']; ?>
          </p>
          <p>
            email : <?php echo $donnees['email']; ?>
          </p>
        </div>
        <p class="formation">
          En formation à la MOS en <?php echo $donnees['annee']; ?>
        </p>
      </div>

      <div class="renseignement">

        <p>
          Présentation : <?php echo $donnees['presentation']; ?>
        </p>
        <p>
          Emploi : <?php echo $donnees['travail']; ?>
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
