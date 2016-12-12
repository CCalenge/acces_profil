<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../images/favicon.png"/>
  <link rel="stylesheet" href="../css/style.css" media="screen" title="no title"/>
  <title>Modification du profil</title>

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

  <form class="" action="modifprofil.php" method="post" enctype="multipart/form-data">

    <?php
    // Connexion BDD
      require_once '../bdd/connect.php';

    ?>


    <label for="pseudo">Pseudo&#8239;:  </label><input type="text" name="pseudo">
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>
<p>
  <?php


  if(isset($_POST["submit"])){

      $req = $bdd->prepare("UPDATE trombi SET pseudo = ? WHERE id = ?");
      $req->execute(array('pseudo', $user['id']));
      $req->closeCursor();

        header("Location:profil.php");
    }
   ?>
</p>


    <label for="nom">Nom&#8239;:  </label><input type="text" name="nom"/>
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>

    <label for="prenom">Prénom&#8239;:  </label><input type="text" name="prenom">
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>

    <label for="naissance">Date de naissance&#8239;:  </label><input type="text" name="naissance">
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>

    <label for="ville">Ville&#8239;:  </label><input type="text" name="ville">
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>


    <label for="password">Mot de passe&#8239;: </label><input type="password" name="password" value="">
    <input class="bouton" type="submit" name="submit" value="Valider" /></br>

    <label for="password">Nouveau mot de passe&#8239;: </label><input type="password" name="passwd" value="">
    <input class="bouton" type="submit" name="submit" value="Valider" /></br>

    <label for="password">Confirmation du mot de passe&#8239;: </label><input type="password" name="confpasswd" value="">
    <input class="bouton" type="submit" name="submit" value="Valider" /></br>

    <label for="annee">Année d'entrée à la MOS&#8239;:  </label><input type="text" name="annee"><br/>

    <label for="presentation">Présentation&#8239;:  </label><textarea name="presentation" rows="8" cols="40"></textarea><br/>
    <input class="bouton" type="submit" name="submit" value="Valider" />

    <label for="emploi">Emploi&#8239;:  </label><input type="text" name="emploi">
    <input class="bouton" type="submit" name="submit" value="Valider" /><br/>

    <label for="photo">Ajouter une trombine&#8239;:
    </label><input class="bouton" type="file" name="photo"/>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />

    <input class="bouton" type="submit" name="submit" value="Valider" />
  </form>




</body>
</html>
