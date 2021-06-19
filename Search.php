<?php
$resultats = "";

//Traitement de la requête 

if(isset($_POST['search']) && !empty($_POST['search'])){
	
	//Si L'utilisateur a entré quelque chose on traite sa requête
	
	$query = preg_replace("#[^a-zA-Z ?0-9]#i","",$_POST['search']);
	require_once('config/functions.php');
	$articlesSearch= getArticlesSearch($query);
	
	/*if($_POST['filtre'] == "CharlesX"){
		$nbreParamètres = 4;
		$sql = "(SELECT id,blog_title AS title,table FROM blog WHERE blog_title LIKE ? OR blog_content LIKE ?) 
		UNION (SELECT id,page_title AS title,table FROM pages WHERE page_title LIKE ? OR blog_content LIKE ?)";
	}
	else if($_POST['filtre'] == "blog"){
		$sql = "SELECT id,blog_title AS title FROM blog WHERE blog_title LIKE ? OR blog_content LIKE ?";
		
	}
	else if($_POST['filtre'] == "pages"){
		$sql = "SELECT id,page_title AS title FROM pages WHERE page_title LIKE ? OR page_content LIKE ?";
	}
	
	include("includes/connect_db.php");
	$req = $db->prepare($sql);
	if($nbreParamètres == 2){
		$req->execute(array('%'.$query.'%','%'.$query.'%'));
	}
	else{
		$req->execute(array('%'.$query.'%','%'.$query.'%','%'.$query.'%','%'.$query.'%'));
	}
	$count = $req->rowCount();
	if($count >= 1){
		echo "$count résultat trouvé pour <strong>$query</strong><hr/>";
		while($data = $req->fetch(PDO::FETCH_OBJ)){
			echo '#'.$data->id.'-Titre:'.$data->title.'<br/>';
		}
		echo'<hr/>';
	}
	else{
		echo "0 résulta trouvé <strong>$query</strong><hr/>";
	}*/
	
}


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
	  <body>
	  

		<div class="container">
		<form class="d-flex" method="POST" action="search">
			<input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-light" type="submit">Search</button>
		  </form>
			<div class="row">
				<?php foreach ($articlesSearch as $article):?>
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
		
	  </body>
	</html>