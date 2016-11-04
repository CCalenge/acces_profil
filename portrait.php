<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png"/>
  <title>portrait</title>
  <link rel="stylesheet" href="css/style.css" media="screen"/>
</head>
<body>
  <header>
      <a href="index.php"><img src="images/logo_mosstlo.svg" alt="logo de la mos saint-lo"/></a>

    <p class="lien">
      <a href="admin/log_admin.php">Espace administration</a><br/>
      <a href="membres/login.php">Espace membres</a>
    </p>
  </header>



  <div class="container1">


    <aside>
      <?php include 'section_galerie.php'; ?>
    </aside>

    <div class="portrait1">

      <?php
      include 'bdd/connect.php';
      //requête sql pour afficher le profil sélectionné sur le trombinoscope

      $req = $bdd->prepare('SELECT * FROM trombi WHERE id=?');

      $req->execute(array($_GET['portrait']));
      $donnees=$req->fetch();
      ?>

      <img src="uploads/<?php echo $donnees['photo'];?>" />

      <div class="nomportrait">
        <?php echo $donnees['prenom'];?>
        <?php echo $donnees['nom']; ?>
      </div>
      <div class="renseignement">
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

  <?php
  $req->closeCursor();
  ?>

  <p>
    <a href="index.php">Retour au trombinoscope</a>
  </p>
  <?php include 'footer.php'; ?>
</div>
</body>
</html>
