<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png"/>
  <title>Trombinoscope</title>
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title"/>
</head>
<body>

  <header>
    <a href="index.php"><img src="images/logo_mosstlo.svg" alt="logo de la mos saint-lo"/></a>

    <p class="lien">
      <a href="admin/log_admin.php">Espace administration</a><br/>
      <a href="membres/login.php">Espace membres</a>
    </p>

  </header>


  <h1>Trombinoscope</h1>



  <div class="galerie">

    <!-- insertion des photos -->
    <?php include 'galerie.php'; ?>


  </div>

  <?php include 'footer.php'; ?>


</body>
</html>
