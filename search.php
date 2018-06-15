<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema Wild</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body id="page1" style="background-color: white">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>Wild</span></a></div>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#">Cinema</a></li>
            <li><a href="#">Séries</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </div>
      </div>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">

          <form class="navbar-form navbar-right inline-form" action="search.php" method="POST">
            <div class="form-group">
              <input type="search" class="input-sm form-control" placeholder="Recherche un film" name="recherche">
              <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
            </div>
          </form>
        </div>
      </nav>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="tinner" style="background-color: white">

  <center>              
      <?php
      include("connexion.php");
  //This code make a research of movies from data base  
  if(!empty($_POST) && !empty($_POST['recherche']))
  {
    
    $rec=$_POST['recherche'];
    $reponse=$bdd->prepare("SELECT * FROM video WHERE titre LIKE '%$rec%'  OR auteur LIKE '%$rec%' OR annee LIKE '%$rec%' OR categorie LIKE '%$rec%' ");

    $reponse->execute();
  

      while ($donnees = $reponse-> fetch())
        {
       
          echo '<strong> Le titre: ' .'</strong>' . $donnees['titre'] .'<br> '.'<strong> Auteur: ' .'</strong>' .htmlspecialchars($donnees['auteur']).'<br>'. '<strong> Length: ' .'</strong>'.$donnees['duree'].'<br>' .'<strong> Année: ' .'</strong>'. $donnees['annee'].'<br>' .'<strong> Categorie: ' .'</strong>' .$donnees['categorie'].'<br>'.'<strong> Description: ' .'</strong>'. $donnees['description'] . '<br />';
           ?> <br>
           <iframe width="250" height="315" src="http://www.youtube.com/embed/<?php echo $donnees['lien_video']; ?> " frameborder="0" allowfullscreen></iframe> <br>
         <?php
         }

        $reponse->closeCursor();
     } 
  ?>
   </center>

              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <h3>Fresh <span>Movies</span></h3>
          <ul class="movies">
            <li>
              <h4>Toy Story 3</h4>
              <img src="images/1page-img2.jpg" alt="" />
              <p>Egetnunc nunc mattitor curabiturpiscipis nec ac hac pellus sem intesque sociis. Metusmetuer hendimentesque diam at orbi sempor.</p>
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li>
              <h4>Prince of Percia: Sands of Time</h4>
              <img src="images/1page-img3.jpg" alt="" />
              <p>Dolorem malesuada anterdum quis vitae. Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis. </p>
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li class="last">
              <h4>The Twilight Saga: Eclipse</h4>
              <img src="images/1page-img4.jpg" alt="" />
              <p>Quisque felit odio ut nunc convallis semper sente ris feugiat. Odionam leo phasellentum id vitantesque nunc tor quisque a maecenatibus pellus.</p>
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li class="clear">&nbsp;</li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf"></p>
              <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateHtml</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>