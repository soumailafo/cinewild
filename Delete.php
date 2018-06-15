<?php

include("connexion.php");

 $id = $_POST['num'];

  $req = "DELETE FROM video WHERE id_video = ?";
  $req = $bdd->prepare($req);
  $req->execute(array($id));



header('Location: CrudVideo.php');

?>