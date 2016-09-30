<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire d'ajout de photo</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title"/>
  </head>
  <body>

<!-- Le formulaire est destiné à l'administration qui entrera en premier les données -->

    <form action="form_post.php" method="POST" enctype="multipart/form-data">

    <label for="nom">Nom&#8239;:  </label><input type="text" name="nom"/><br/>

    <label for="prenom">Prénom&#8239;:  </label><input type="text" name="prenom"><br/>

    <label for="annee">Année d'entrée à la MOS&#8239;:  </label><input type="text" name="annee"><br/>

    <label for="photo">Ajouter une trombine&#8239;:
    </label><input class="bouton" type="file" name="photo"/>

    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" /><br/>

    <input class="bouton" type="submit" name="submit" value="Envoyer" />
    </form>




  </body>
</html>
