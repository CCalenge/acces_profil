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
      Bonjour <?php echo $_SESSION['user_prenom']; ?>, vous êtes connecté(e)
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
    <input class="bouton" type="submit" name="submit1" value="Valider" /><br/>
    <p>
      <?php
      $pseudo = $_POST["pseudo"];

      if(isset($_POST["submit1"])){

        $req = $bdd->prepare("UPDATE trombi SET pseudo = '$pseudo' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $pseudo ;
      }
      ?>
    </p>


    <label for="nom">Nom&#8239;:  </label><input type="text" name="nom"/>
    <input class="bouton" type="submit" name="submit2" value="Valider" /><br/>

    <p>
      <?php
      $nom = $_POST["nom"];

      if(isset($_POST["submit2"])){

        $req = $bdd->prepare("UPDATE trombi SET nom = '$nom' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $nom ;
      }
      ?>
    </p>



    <label for="prenom">Prénom&#8239;:  </label><input type="text" name="prenom">
    <input class="bouton" type="submit" name="submit3" value="Valider" /><br/>

    <p>
      <?php
      $prenom = $_POST["prenom"];

      if(isset($_POST["submit3"])){

        $req = $bdd->prepare("UPDATE trombi SET prenom = '$prenom' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $prenom ;
      }
      ?>
    </p>


    <label for="naissance">Date de naissance&#8239;:  </label><input type="text" name="naissance">
    <input class="bouton" type="submit" name="submit4" value="Valider" /><br/>

    <p>
      <?php
      $naissance = $_POST["naissance"];

      if(isset($_POST["submit4"])){

        $req = $bdd->prepare("UPDATE trombi SET date_naissance = '$pnaissance' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $naissance ;
      }
      ?>
    </p>

    <label for="ville">Ville&#8239;:  </label><input type="text" name="ville">
    <input class="bouton" type="submit" name="submit5" value="Valider" /><br/>
    <p>
      <?php
      $ville = $_POST["ville"];

      if(isset($_POST["submit5"])){

        $req = $bdd->prepare("UPDATE trombi SET ville = '$ville' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $ville ;
      }
      ?>
    </p>


    <label for="password">Mot de passe&#8239;: </label><input type="password" name="password" value="">
    <input class="bouton" type="submit" name="submit6" value="Valider" /></br>

    <label for="password">Nouveau mot de passe&#8239;: </label><input type="password" name="passwd" value="">
    <input class="bouton" type="submit" name="submit7" value="Valider" /></br>

    <label for="password">Confirmation du mot de passe&#8239;: </label><input type="password" name="confpasswd" value="">
    <input class="bouton" type="submit" name="submit8" value="Valider" /></br>


    <label for="presentation">Présentation&#8239;:  </label><textarea name="presentation" rows="8" cols="40"></textarea><br/>
    <input class="bouton" type="submit" name="submit9" value="Valider" />

    <p>
      <?php
      $presentation = $_POST["presentation"];

      if(isset($_POST["submit9"])){

        $req = $bdd->prepare("UPDATE trombi SET presentation = '$presentation' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $presentation ;
      }
      ?>
    </p>

    <label for="emploi">Emploi&#8239;:  </label><input type="text" name="emploi">
    <input class="bouton" type="submit" name="submit10" value="Valider" /><br/>

    <p>
      <?php
      $emploi = $_POST["emploi"];

      if(isset($_POST["submit10"])){

        $req = $bdd->prepare("UPDATE trombi SET travail = '$emploi' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $emploi ;
      }
      ?>
    </p>

    <label for="photo">Ajouter une trombine&#8239;:
    </label><input class="bouton" type="file" name="photo"/>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />

    <input class="bouton" type="submit" name="submit11" value="Valider" />

    <p>
      <?php
      $pHOTO = $_POST["photo"];

      if(isset($_POST["submit11"])){

        $req = $bdd->prepare("UPDATE trombi SET pseudo = '$photo' WHERE id = ?");
        $req->execute(array($_SESSION['user_id']));
        $req->closeCursor();

        echo $photo ;
      }
      ?>
    </p>


  </form>




</body>
</html>
