<?php

include'../bdd/connect.php';
// tester si le nom et le prénom ont été entrés

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$annee = $_POST['annee'];
$password = $_POST['password'];

if (!isset($nom) || empty($nom)) {
    echo "Veuillez entrer un nom !<br/>";
}

if (!isset($prenom) || empty($prenom)) {
  echo "Veuillez entrer un prénom !<br/>";
}

if (!isset($annee) || empty($annee)) {
  echo "Veuillez indiquer l'année où vous étiez à la MOS !<br/>";
}

if (!isset($password) || empty($password)) {
  echo "Veuillez entrer un mot de passe provisoire !<br/>";
}

// tester si le fichier photo a été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0) {
  // tester le poids du fichier
  if ($_FILES['photo']['size'] <= 1000000)
  {
    // tester si l'extension est autorisée

    $infosfichier = pathinfo($_FILES['photo']['name']);

    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees))
    {

          // on récupère l'extension du fichier uploadé
          $extension = strtolower(substr(strrchr($_FILES['photo']['name'], '.'),1));

          // on génère un nom aléatoire pour le nom de l'image et on ajoute l'extension

          $photo = md5(uniqid(rand(), true)).".".$extension;

          // Valider le fichier et le stocker définitivement
          $resultat =
          move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$photo);
          echo "L'envoi a bien été effectué !<br/><a href='form.php'>retour au formulaire</a>";
    }
  }

  // insertion des données dans la bdd
  $req=$bdd->prepare('INSERT INTO trombi(nom, prenom, password, annee, photo, date_insertion)
  VALUES (:nom, :prenom, :password, :annee, :photo, NOW())');
  $req->execute (array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'password'=>$password,
    'annee'=>$annee,
    'photo'=>$photo
  ));
  $req->closeCursor();
}


 ?>
