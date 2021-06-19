<?php

session_start();

if(isset($_SESSION['user'])){
		header('Location: index.php');
		exit;
	}
	
 require_once('config/functions.php');
  $categories = getAllCategories();
  $errors = [];


	if(!empty($_POST)){

		$submittedEmail = $_POST['email'];
		$submittedPasword = $_POST['password'];

		if(empty($submittedEmail)){
			$errors[] = 'merci de renseigner votre email.';
		}

		if(empty($submittedPasword)){
			$errors[] = 'merci de renseigner votre mot de passe.';
		}

		if(empty($errors)){
			$user = login($submittedEmail, $submittedPasword);

			if(!$user){
				$errors[] = 'Mauvais identifiants';
			}
			else{
				$_SESSION['user'] = [
					'lastname' => $user['lastname'],
				    'firstname' => $user['firstname'],
				    'is_admin' => $user['is_admin'],
				];

				$_SESSION['message'] = 'Vous êtes bien connecté !';

				header('Location: index.php');
				exit;
			}
		}
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
	  <body class="bg-dark">
		<?php require_once('./mvc/partials/header.php'); ?>
		
		<?php if(isset($_SESSION['message'])): ?>
			<?= $_SESSION['message']; ?>
			<?php unset($_SESSION['message']); ?>	
		<?php endif; ?>

		<form action="" method="POST">
		  <div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input name="password" type="password" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Connexion</button>
		</form>

	  </body>
	</html>