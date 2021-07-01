 <?php
 require_once('config/functions.php');
  $categories = getAllCategories();

 $articles = getArticles();
 session_start();
if(!empty($_POST['deco'])){
	if(!empty($_SESSION['user'])){
		unset($_SESSION['user']);
		$_SESSION['message'] = 'Vous êtes bien déconnecté !';
		header('Location: index.php');
		exit;
	}
}
var_dump($_POST);
var_dump($_SESSION);

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
		
		<link href="style.css" rel="stylesheet">
	  </head>
	  <body class="bg-dark">
		<?php require_once('./mvc/partials/header.php');?>
		
		<div class="container">
			<div class="row">
				<?php foreach ($articles as $article):?>
					<div class="col-4 mt-3">
						<div class="card bg-dark text-light " >
						  <img src="img/<?=$article->img ?>" class="card-img-top" alt="...">
						  <div class="card-body">
							<h5 class="card-title"><?=$article->title?><span> <?=  strftime('%d %B',strtotime($article->date)); ?></span></h5>
							<a href="article.php?id=<?=$article->id ?>" class="btn btn-dark">Lire</a>
						  </div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<form action="" method="POST" name="deco">
			<input type="button" value="deconnexion" name="deco">
		</form>
		
		<?php require_once('./mvc/partials/footer.php');?>
	  </body>
	</html>

	 

 
 
 