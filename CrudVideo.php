<?php
   
  include("connexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>cine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>

         <div class="container">
             <h4 style="color:red">Ajouter le lien de la video à afficher</h4>
  <form class="form-horizontal" action="addVideos.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description de la video :</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" id="description" placeholder="Briefing de la vidéo" name="description"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Inserer le lien :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="idVideo" placeholder="lien de video" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Titre de la vidéo :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Vtitle" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Durée de la vidéo  :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Vlength" placeholder="Ex: 2:45:12" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Année de la vidéo  :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Vyear" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Auteur de la vidéo  :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Vauthor">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lien">Catégorie de la vidéo  :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="Vcategory">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-succes">Submit</button>
        <a class="btn btn-danger" href="CrudVideo.php" role="button">Annuler</a>
      </div>
    </div>
  </form>
</div>
     <br>
       <strong>La liste des vidéos existantes dans la base de données: </strong> <br><br>
   <?php
   //this code display the id, title and briefing of the videos existing in data base
  $reponse = $bdd->query('SELECT id_video, description, titre FROM video ');

    while ($donnees = $reponse-> fetch())
      {
          echo '<p><strong>' . $donnees['id_video'] .': '. htmlspecialchars($donnees['titre']) .'</strong> : ' . $donnees['description'] . '<br />';

      }

     $reponse->closeCursor();

     ?>

     <p>
     <b style="color: red">Saisir le numéro de la vidéo à supprimer :</b>.<br />

    <form action="Delete.php" method="post">
  <p>
    <input type="number" name="num" />
    <input type="submit" value="Delete" />
  </p>
</form>
 
</center>
<a class="btn btn-info" href="index.php" role="button">Aller à la page d'accueil</a>
</body>
</html>