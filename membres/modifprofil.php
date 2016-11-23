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

    <label for="pseudo">Pseudo&#8239;:  </label><input type="text" name="pseudo"><br/>

    <label for="nom">Nom&#8239;:  </label><input type="text" name="nom"/><br/>

    <label for="prenom">Prénom&#8239;:  </label><input type="text" name="prenom"><br/>

    <label for="naissance">Date de naissance&#8239;:  </label><input type="text" name="naissance"><br/>

    <label for="ville">Ville&#8239;:  </label><input type="text" name="ville"><br/>


    <label for="password">Mot de passe&#8239;: </label><input type="password" name="password" value=""></br>

    <label for="password">Nouveau mot de passe&#8239;: </label><input type="password" name="passwd" value=""></br>

    <label for="password">Confirmation du mot de passe&#8239;: </label><input type="password" name="confpasswd" value=""></br>

    <label for="annee">Année d'entrée à la MOS&#8239;:  </label><input type="text" name="annee"><br/>

    <label for="presentation">Présentation&#8239;:  </label><textarea name="presentation" rows="8" cols="40"></textarea><br/>

    <label for="emploi">Emploi&#8239;:  </label><input type="text" name="emploi"><br/>

    <label for="photo">Ajouter une trombine&#8239;:
    </label><input class="bouton" type="file" name="photo"/>

    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" /><br/>

    <input class="bouton" type="submit" name="submit" value="Valider" />
  </form>






</form>




</body>
</html>
