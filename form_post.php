<?php

// tester si le fichier phot a été envoyé et s'il n'y a pas d'erreur
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
          // Valider le fichier et le stocker définitivement
          move_uploaded_file($_FILES['photo']['tmp_name'],'./uploads/'.basename($_FILES['photo']['name']));
          echo "L'envoi a bien été effectué !";
    }
  }
}

 ?>
