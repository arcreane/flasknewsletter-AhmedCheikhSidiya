<?php
if(isset($_GET['category_id']) && !empty($_GET['category_id'])){
	$id = $_GET['category_id'];
	$id = strip_tags($id);
	require_once('config/functions.php');
	$articlesCategory = getArticleCategory($id);	
}else{
	header('Location: index.php');
}

?>

<?php
 require_once('config/functions.php');
  $categories = getAllCategories();

 $articles = getArticles();
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
				<h1>Chronologies de l'Histoire de rois de France</h1>

				<h4><a class="text-white" href="moyenage.php" title="Moyen Âge"> Moyen Âge</a></h4>

				<h4><a class="text-white" href="temp.php" title=" des temps Modernes"> Temps Modernes</a></h4>

				<h4><a class="text-white" href="epoque.php" title=" l'époque contemporaine">Epoque Contemporaine</a></h4>
				
				<h4><a class="text-white" href="revolution.php" title="Révolution Française">La Révolution Française</a></h4>

         </div>
		<div class="container">
			<div class="row">
				<?php foreach ($articlesCategory as $article):?>
					
					</div>
				<?php endforeach;?>
			</div>
		</div>

	  </body>
	</html>