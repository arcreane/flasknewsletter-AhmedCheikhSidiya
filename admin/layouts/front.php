<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="assets/css/styles.css" rel="stylesheet">
	</head>
	<body>

		<?php require_once('partials/header.php'); ?>

		<main>
			<?php if(isset($_SESSION['message'])): ?>
				<div class="message">
					<?= $_SESSION['message']; ?>
				</div>
			<?php endif; ?>
			
	    	<?php require_once($view) ?>
	    </main>

	</body>
</html>