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
          <img class="img-fluid w-100" src="img/Louis Philippe.jpg" />
        </div>
		<div class= col-9>
        <h2>Louis Philippe Ier</h2>
		<p> Louis-Philippe Iᵉʳ, ou tout simplement Louis-Philippe, né le 6 octobre 1773 à Paris en France et mort le 26 août 1850 à Claremont au Royaume-Uni, est le dernier roi à avoir régné en France, entre 1830 à 1848, avec le titre de « roi des Français ».</p>
        
         </div>
					
					

	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>