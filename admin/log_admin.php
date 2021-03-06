<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../images/favicon.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TP</title>
  <link rel="stylesheet" href="../css/style.css" media="screen" title="no title"/>
</head>

<body>
  <header>
    <a href="./../index.php"><img src="../images/logo_mosstlo.svg" alt="logo de la mos saint-lo"/></a>

    <p class="lien">
      <a href="#">Espace administration</a><br/>
      <a href="./../membres/login.php">Espace membres</a>
    </p>

  </header>
  <form action="log_admin.php" method="POST">
    <!-- le <p> contient les messages. On affiche les retours ici -->
    <p>


      <?php
      // si l'utilisateur a cliqué sur submit, $_POST est créé.
      // $_POST["submit"] existe donc est n'est pas NULL
      // On peut faire nos verif
      if (isset($_POST["submit"])){
        // Si l'utilisateur n'a pas rentré de login OU de password
        if ($_POST["pseudo"] == "" || $_POST["pass"] == ""){
          // Affichage erreur
          echo "Les champs ne doivent pas être vides";
        }
        else {
          // Sinon, on verifie si le login existe et si le password est OK
          // Comme on veut afficher les eventuelles erreurs ici, dans le <p>
          // on affiche le résultat renvoyé par la fonction verify_login
          // On lui passe en paramètre le login et password entrés par l'utilsiateur
          echo verify_login($_POST["pseudo"], $_POST["pass"]);
        }
      }
      ?>
    </p>
    <!-- Formulaire pseudo/pass -->
    <label for="pseudo">Pseudo&#8239;:
      <input type="text" name="pseudo" />
    </label>
    <label for="pass">Mot de passe&#8239;:
      <input type="password" name="pass" />

    </label>
    <input class="bouton" type="submit" name="submit" value="Connexion" />
  </form>
  <p>
    <a href="../index.php">Retour au trombinoscope</a>
  </p>

  <?php include '../footer.php'; ?>

</body>

</html>
<?php
/**
* function verify_login
* Vérifie si le login existe et si le password correspond
*
* @param $login le login entré par l'utilisateur
* @param $password le password entré par l'utilisateur
*
* @return string, message d'erreur eventuel
*/
function verify_login($pseudo, $pass){

  // @TODO utiliser un require_once et global $bdd pour ne pas répeter
  // plusieurs fois le code de connexion à la BDD

  // Connexion BDD
  require_once '../bdd/connect.php';
  // Creation de la requete, on veut l'id, le nom,le prénom et le mot de passe
  // on cherche la ligne avec pseudo = le pseudo demandé par l'utilisateur (ici, $login)
  // Requetes préparées, voir doc PDO
  $req = $bdd->prepare('SELECT id, pseudo, nom, prenom, pass FROM admin WHERE pseudo = ?');
  $req->execute(array($pseudo));

  // On compte le nombre d'entrée retournée. Si 0, alors le pseudo n'existe pas
  if ($req->rowCount() < 1){
    $req->closeCursor();
    // Le message sera affiché par le "echo" ligne 29
    return ("Le pseudo n'existe pas");
  }
  else {
    // Si une ligne, le login existe, on verifie si password OK
    $user = $req->fetch();
    if ($user['pass'] != $pass){
      $req->closeCursor();
      return ("Pseudo ou mot de passe incorrect");
    }
    else {
      // si OK, on démarre la session
      session_start();
      // et on crée une variable user_id contenant l'id de l'utilisateur en BDD
      // Cette variable est stockée dans $_SESSION, et suit l'utilisateur sur les pages
      $_SESSION["user_id"] = $user['id'];
      $_SESSION["user_pseudo"] = $user['pseudo'];
      // Mise à jour de la date du dernier login
      $req = $bdd->prepare('UPDATE admin SET last_login = ? WHERE id = ?');
      $req->execute(array(date('Y-m-d H:i:s'), $user['id']));
      $req->closeCursor();

      // On envoie l'administrateur vers le formulaire d'ajout de photo pour le trombinoscope
      header("Location:form.php");
    }
  }
}
?>
