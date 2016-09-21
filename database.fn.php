<?php /** * fonction de connexion de base de donnee * @param $db (array) &gt; mes identifiants de base * @return lien de base */
// function database_connect($db){
// $link = mysql_connect($db['host'],$db['user'],$db['pass']);
// if(!$link) die("erreur de connexion a la base de donnee".mysql_error());
// if(!mysql_select_db($db['base'])) die ("selection de la base impossible");
// return $link; }/** * fonction de deconnexion de base de donnee * @param $link lien de base * @return rien */
// function database_disconnect($link){ mysql_close($link); }

// connexion à la base de données

try {
  $bdd = new PDO ('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  die ('Erreur:'. $e->getMessage());
}







 ?>
