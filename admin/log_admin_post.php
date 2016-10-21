<!-- <?php

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

          header("Location:log_admin.php");
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

 ?> -->
