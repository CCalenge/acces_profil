<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>administration</title>
      <link rel="stylesheet" href="../css/style.css" media="screen" title="no title"/>
  </head>
  <body>
<h1>Administration</h1>
  </body>

<form action="log_admin.php" method="post">

  <label for="pseudo">pseudo&#8239;:  </label><input type="text" name="pseudo"/><br/>

  <label for="pass">Mot de passe&#8239;: </label><input type="password" name="pass">

  <input type="submit" value="validez">

  <p>
    <?php

    ini_set ('display_error',1);

    // si l'utilisateur a cliqué sur submit, $_POST est créé.
    			// $_POST["submit"] existe donc est n'est pas NULL
    			// On peut faire nos verif
    			if (isset($_POST["submit"])){
    				// Si l'utilisateur n'a pas rentré de nom, prénom et de mot de passe
    				if ($_POST["pseudo"] == "" || $_POST["pass"] == ""){
    					// Affichage erreur
    					echo "Les champs ne doivent pas être vides";
    				}
    				else {
    					// Sinon, on verifie si le pseudo et le mot de passe sont OK
    					// Comme on veut afficher les eventuelles erreurs ici, dans le <p>
    					// on affiche le résultat renvoyé par la fonction verify_login
    					// On lui passe en paramètre les nom, prénom et password entrés par l'utilisateur
    					echo verify_login($_POST["pseudo"], $_POST["pass"]);

    				}
    			}

          function verify_login($pseudo, $pass)
          {

            // création de la requête pour récupérer l'id, les nom, prénom et mot de passe
            // on cherche la ligne avec nom et prenom demandé ($nom, $prenom)
            // requête préparée

            include 'bdd/connect.php';

            $req = $bdd->prepare('SELECT id,pseudo, nom, prenom, pass FROM admin WHERE pseudo = ?');
            $req->execute(array($pseudo));

            // on compte le nombre d'entrées retournées. Si 0, alors le login n'existe pas

            if ($req->rowCount() < 1) {
              $req->closeCursor();
              // le message sera affiché par le "echo" ligne 23
              return ("Personne inconnue");
            }

            else {
              // si la ligne existe, on vérifie le mot de passe
              $user = $req->fetch();
              if ($user['pass'] != $pass){
                $req->closeCursor();
                return ("pseudo ou mot de passe incorrect");
              }
              else{
                // si OK, ouverture de la page form.php
                header ("Location:form.php");
              }
            }
          }

     ?>

  </p>


</form>





</html>
