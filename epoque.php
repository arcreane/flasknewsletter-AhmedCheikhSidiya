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
          <img src="img/epoque.jpg" />
        </div>
        <h2>Epoque Contemporaine : </h2>
		<p>
Dès 1789, l'Époque Contemporaine voit progressivement se développer les 
« belles idées républicaines » de la France. C'est l'époque des droits de l'homme, 
de la démocratie et des progrès techniques. Mais des guerres napoléoniennes aux 
deux guerres mondiales, l'Époque Contemporaine voit également s'installer
les principes de la guerre moderne, de plus en plus meurtrière. Cette période 
ambiguë, tantôt progressiste, tantôt dévastatrice se prolonge encore de nos jours.</p>
      </div>
	  </div>
	  </div>
	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>