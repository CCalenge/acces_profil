<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire d'ajout de photo</title>
  </head>
  <body>

    <form action="form_post.php" method="POST" enctype="multipart/form-data">

    <label for="nom">Nom : </label><input type="text" name="nom"/><br/>

    <label for="prenom">Prénom : </label><input type="text" name="prenom"><br/>

    <label for="photo">Ajouter une trombine :
    </label><input type="file" name="photo"/>

    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" /><br/>

    <input type="submit" name="submit" value="Envoyer" />
    </form>




  </body>
</html>
