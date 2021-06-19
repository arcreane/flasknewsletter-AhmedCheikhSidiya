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
          <img src="img/moyen.jpg" />
        </div>
        <h2>Moyen Age : </h2>
		<p> La chute de l'Empire romain annonce une période sombre dans <br>
		toute l'Europe, les tribus germaniques prennent le contrôle <br> 
		des régions. Rapidement,
		les Francs vont s'imposer <br> 
		et aboutir à la formation de l'Empire carolingien <br> 
		véritable pôle d'une renaissance culturelle. <br>
		Au delà des invasions normandes, la ferveur <br> 
		religieuse entraîne les Croisades et les <br> 
		innombrables pèlerinages. Tandis que <br> 
		les principes de la féodalité aboutiront <br> 
		à un long conflit entre la France et <br> 
		l'Angleterre qui renforcera le pouvoir royal.</p>
        
      </div>
	  </div>
	  </div>
	  

	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>