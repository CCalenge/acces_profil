<?php
 // on crée la requête SQL : on va chercher id,nom,note,photo de la table "trombi" et on les ordonne par note
 $sql = 'SELECT id,nom,photo FROM trombi ORDER BY nom';
 // on envoie la requête
 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

 echo "<div id='wrapper'>";
 // on fait une boucle qui va faire un tour pour chaque enregistrement , en gros tant qu'il y aura encore un membre dans la table
 while($data = mysql_fetch_assoc($req))
 {
 // on affiche les informations de l'enregistrement en cours
 echo "<div class='membre'>";
 echo '<h2><a title="'.$data['nom'].'" href="page.php?id='.$data['id'].'">'.$data['nom'].'</a></h2>';
 echo "<img src='".$dir.$data['photo']."'width=200 height=150/>";
 echo "<br> <br>";
 echo "</div>";

 } ;
 echo "<div class='spacer'></div>";
 echo "</div>";
 mysql_close($link);
 ?>
