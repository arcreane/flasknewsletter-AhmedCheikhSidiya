<?php
 require_once('config/functions.php');
  $categories = getAllCategories();

 $articles = getArticles();
 session_start();
 ?>
<!DOCTYPE html>
	<html lang="fr.FR">
	  <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>les Rois de France</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
		crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	  </head>
	  <body class="bg-dark">
	  <?php require_once('./mvc/partials/header.php');?>
	  <div class="container bs-docs-container text-light">

        <div class= "text-light">
		<div class="cadre-enfant">
        <div class="cadre-image">
          <img src="img/temps.jpg" />
        </div>
        <h2>Temps Modernes : </h2>
		<p> Les Temps modernes commencent avec la chute de l'empire romain d'Orient et 
		la découverte de l'Amérique, une véritable renaissance culturelle se met en place.
		L'art (peinture, littérature, ...) se met au service de nouvelles idées novatrices 
		qui voient peu à peu le détachement de l'homme avec Dieu. Malgré tout, cette période 
		voit se développer l'absolutisme royal et les guerres de religion. L'émancipation 
		de l'homme aboutit à la Révolution française en 1789, porteuse de nouvelles idées.</p>
        
      </div>
	  </div>
	  </div>
	  

	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>