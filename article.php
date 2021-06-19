<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('Location: index.php');
else
{
	extract($_GET);
	$id = strip_tags($id);
	require_once('config/functions.php');
	$article = getArticle($id);
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
		<div class="container">
			<div class="row">
				<div class="col-6 ">
				<img class="img-thumbnail" src="img/<?=$article->img ?>" alt="...">
				</div>
				<div class="col-6 text-light">
				<h1><?=$article->title?></h1>
				<p><?=$article->content?></p>
				</div>
			</div>
		</div>
	  </body>
	</html>