<?php
//FONTION QUI RÉCUPÈRE TOUS LES ARTICLES
  function getAllCategories(){
    require('config/connect.php');
    $query = $db->query("SELECT *
    FROM categories");
    return 	$query->fetchAll();
  }
function getArticles()
{
	require('config/connect.php');
	$req = $db->prepare('SELECT id, title,date, img FROM articles ORDER BY id DESC');
	$req->execute();
	$data = $req->fetchALL(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}
//FONTION QUI RÉCUPÈRE UN ARTICLE
function getArticle($id)
{
	require('Config/connect.php');
	$req = $db->prepare('SELECT *  FROM articles WHERE id = ?');
	$req->execute(array($id));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
	    header('Location:index.php');
    }




//FONTION QUI RÉCUPÈRE UN ARTICLE EN FONCTION D'UNE CATEGORIE
function getArticleCategory($id)
{
	require('Config/connect.php');
	$req = $db->prepare('SELECT *  FROM articles WHERE category_id = ?');
	$req->execute(array($id));
	
	$data = $req->fetchALL(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
	
	
}


//FONTION QUI RÉCUPÈRE UN ARTICLE EN FONCTION DE LA BARRE DE RECHERCHE
function getArticlesSearch($query)
{
	require('Config/connect.php');
	$req = $db->prepare("SELECT *  FROM articles WHERE title LIKE '%$query%'");
	$req->execute();
	
	$data = $req->fetchALL(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

function login($email, $password){

	require('Config/connect.php');

	$query = $db->prepare("SELECT * FROM blog_users WHERE email = ?");
	$query->execute([$email]);

	$user = $query->fetch();

	if($user){
		if(password_verify($password, $user['password'])){
	      return $user;
	    }
	    else{
	      return false;
	    }
	}
	else{
		return false;
	}
}






?>