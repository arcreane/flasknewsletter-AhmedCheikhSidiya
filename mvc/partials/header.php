<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php">ANECDOTES SUR LES ROIS DE FRANCE</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
			<?php foreach ($categories as $category):?>
			<li>
		<a class="nav-link" href="<?= strtolower($category['name']);?>?category_id=<?=$category['id'];?>"><?= $category['name'];?></a>
		
		</li>
		
		<?php endforeach;?>
		
		<li><a class="nav-link"  href="login.php">Connexion</a></li>
		
		
		</ul>
			
			</div>
			<form class="d-flex" method="POST" action="search">
				<input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-light" type="submit">Search</button>
			</form>
		</header>