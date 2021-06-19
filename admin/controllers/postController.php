<?php 

require_once ('models/Post.php'); 

$action = $_GET['action'];
$errors = [];

if($action == 'new'){
	if(!empty($_POST)){
		$submitedTitle = $_POST['title'];
		$submitedDescription = empty($_POST['description']) ? NULL : $_POST['description'];
		$submitedContent = $_POST['content'];
		$submitedBgColor = empty($_POST['bg_color']) ? '#ffff88' : $_POST['bg_color'];

		if(empty($submitedTitle)){
			$errors[] = 'Le titre est obligatoire.';
		}
		if(empty($submitedContent)){
			$errors[] = 'Le contenu est obligatoire.';
		}

		if(empty($errors)){
			$addResult = addPost($submitedTitle, $submitedDescription, $submitedContent, $submitedBgColor);

			if($addResult == true){
				$_SESSION['message'] = 'Article enregistré !';
				header('Location: index.php');
				exit;
			}
			else{
				$_SESSION['error'] = "impossible d'enregistrer un post... :(";
				header('Location: index.php');
				exit;
			}
		}
	}
	$view = 'views/articleFormView.php'; 
}
elseif($action == 'edit'){
	
	if(!empty($_POST)){
		$submitedTitle = $_POST['title'];
		$submitedDescription = empty($_POST['description']) ? NULL : $_POST['description'];
		$submitedContent = $_POST['content'];
		$submitedBgColor = empty($_POST['bg_color']) ? '#ffff88' : $_POST['bg_color'];
		
		if(empty($submitedTitle)){
			$errors[] = 'Le titre est obligatoire.';
		}
		if(empty($submitedContent)){
			$errors[] = 'Le contenu est obligatoire.';
		}
		
		if(empty($errors)){

			$updateResult = updateArticle($_GET['id'], $submitedTitle, $submitedDescription, $submitedContent, $submitedBgColor);
			
			if($updateResult == true){
				$_SESSION['message'] = 'L article mis à jour !';
				header('Location: index.php');
				exit;
			}
			else{
				$_SESSION['error'] = "impossible de mettre à jour ... :(";
				header('Location: index.php');
				exit;
			}
		}
	}
	
	$selectedPost = getPost($_GET['id']);
	if ($selectedPost == false) {
		header('Location: index.php?page=404');
		exit;
	}
	$view = 'views/articleFormView.php';
}
elseif($action == 'delete'){
	deletePost($_GET['id']);
	$_SESSION['message'] = 'l article supprimé !';
	header('Location: index.php');
	exit;
}
else{
	header('Location: index.php?page=404');
	exit;
}

?>