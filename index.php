<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css" type="screen" />
  <title>ajout de membre</title>
</head>

<body>
  <div id="header">
    <a href="form.html"> Rajouter un membre</a><br>
    <?php
    include "config.php";
    include "database.fn.php";
    $link = database_connect($db);
    $dir = 'images/';

    /**** on va chercher la boucle afin d'afficher la gallery*/
    include "gallery.php";

    ?>
  </div><!–fermeture header –>
</body>

</html>
