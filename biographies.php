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
    
			<h1>Biographies</h1>

			<ul class=" text-light">
			<li><a class="text-white" href="post1.php">Louis XVI</a> (1754 - 1793)</li>
			<li><a class="text-white" href="post2.php">Charles X</a> (1757 - 1836)</li>
			<li><a class="text-white" href="post3.php">Louis philippe</a> (1773 - 1850)</li>
			</ul>
			
			<div class="container">
				<div class="row">
					<?php foreach ($articlesCategory as $article):?>
						
					<?php endforeach;?>
				</div>
			</div>
			
		</div>
	  </body>
	</html>