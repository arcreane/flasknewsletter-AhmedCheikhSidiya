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
		
		<title>les Rois de France</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
		crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css" />
	  </head>
	  <body class="bg-dark">
	  <?php require_once('./mvc/partials/header.php');?>

        <div class= "text-light container">
		<div class="row">
        <div class="col-3">
          <img class="img-fluid w-100" src="img/louis16.jpg" />
        </div>
		<div class= col-9>
        <h2>Louis XVI
		</h2>
		<p> Roi de France en 1774, il s'entoure de ministres talentueux (Malesherbes, Turgot, Necker). La guerre entreprise aux cotés des colonies américaines redonnera du prestige à la France. Mais à l'intérieur, l'opposition des privilèges s'accroît, et Calonne et Loménie de Brienne ne peuvent enrayer la crise financière. Louis XVI décide alors de convoquer les états généraux en 1789. Mais les députés du Tiers forment l'Assemblée nationale puis constituante ôtant toute influence au roi. Réduit au titre de roi des Français en 1791, le roi se déconsidère par sa fuite et son arrestation à Varennes ainsi que par des négociations avec l'étranger. Prisonnier de la Commune insurrectionnelle (10 août 1792), il est jugé, condamné à mort puis guillotiné pour trahison.
		</p>
        </div>
		</div>
      </div>
	  </body>
	  <?php require_once('./mvc/partials/footer.php');?>
	</html>