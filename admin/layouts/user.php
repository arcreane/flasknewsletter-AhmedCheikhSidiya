<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body>

		<?php require_once('partials/header.php'); ?>
		<?php require_once('partials/menu.php'); ?>

		<?php if(isset($_SESSION['message'])): ?>
			<p class="message"><?= $_SESSION['message']; ?></p>
		<?php endif; ?>

		<?php if(isset($_SESSION['error'])): ?>
			<p class="error"><?= $_SESSION['error']; ?></p>
		<?php endif; ?>
		
		<main>
	    	<?php require_once($view); ?>
	    </main>

	</body>
</html>