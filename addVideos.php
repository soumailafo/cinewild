<?php

include("connexion.php");
//Inser these differents elements in data base
$req = $bdd->prepare('INSERT INTO video(lien_video, description, titre, duree, annee, auteur, categorie) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['idVideo'], $_POST['description'], $_POST['Vtitle'], $_POST['Vlength'], $_POST['Vyear'], $_POST['Vauthor'], $_POST['Vcategory']));

echo 'le lien a bien été ajouté !'; 

header('Location: CrudVideo.php');

?>