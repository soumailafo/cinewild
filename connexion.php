
<?php
			
		try
		{	
			$bdd = new PDO('mysql:host=localhost;dbname=videos;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//l'ajout de l'array met permet d'avoir des erreurs dûes aux requêtes plus lisibles .
		}
		catch(Exception $e)
		{
			die('erreur: ' .$e-> getMessage());
		}
?>