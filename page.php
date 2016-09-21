<!DOCTYPE html PUBLIC>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <title></title>
</head>

<body>
  <?php
  //On récupère la variable transmit par l'url
  $id_transmit=$_GET['id'];
  $dir = 'images/';
  // on se connecte à la base de données
  include "config.php";
  include "database.fn.php";
  echo "<div id='membre'>";
  // on affiche les données en fonction de l'id transmis
  include "infos.php";
  echo "</div>";
  ?>
</body>

</html>
