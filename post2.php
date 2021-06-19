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

	  <div class= "text-light container">
		<div class="row">
        <div class="col-3">
          <img class="img-fluid w-100" src="img/charles_x.jpg" />
        </div>
		<div class= col-9>
        <h2>Charles X</h2>
		<p> Charles-Philippe de France, comte d'Artois, plus connu sous le nom de Charles X, né le 9 octobre 1757 au château de Versailles à Versailles en France et mort le 6 novembre 1836 à Görtz, alors en Autriche, est roi de France et de Navarre de 1824 à 1830. Il gouverne durant la période dite de la Restauration.</p>
        
      </div>
					
					

	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>