
<?php
// affiche les infos individuelles de chaque membre

$link = database_connect($db);
// on récupère les informations dans la base en fonctionde l id transmis; en fonction du poney choisi quoi :p
$sql = mysql_query("SELECT * FROM trombinoscope WHERE id='".mysql_real_escape_string($id_transmit)."'");
while($data = mysql_fetch_assoc($sql))
 {
 // on affiche les informations de l'enregistrement en cours
 echo '<h2><a title="'.$data['nom'].'" href="page.php?id='.$data['id'].'">'.$data['nom'].'</a></h2><br><br>';
 echo "<img src='".$dir.$data['photo']."'width=200 height=150/><br><br>";
 echo 'Note :';

 // on affiche autant d'étoile que la note donnée
 for($i=0;$i < $data['note'];$i++){
 echo "<img src='images/etoile.png'/>";
 }
 echo '<br> <br><a href="index.php"> Retour à l\'accueil</a><br><br><br><br>';
 } ;
// Fermeture de la connexion à la base de données
mysql_close($link);
?>
