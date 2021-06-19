 <h2><?= ($action == 'new') ? 'Ajout' : 'Modification'; ?> d'une catégorie :</h2>

<?php if(!empty($errors)): ?>
	<h3>Erreurs :</h3>
	<?php foreach($errors as $error): ?>
		<?= $error ?><br>
	<?php endforeach; ?>
<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" value="<?= $submitedName ?? $selectedCategory['name'] ?? ''; ?>" /><br><br>
  <label for="description">Description</label>
  <textarea name="description" id="description"><?= isset($submitedDescription) ? $submitedDescription : $selectedCategory['description'] ?? ''; ?></textarea><br><br>
  
	<label for="image">Image</label>
	<input type="file" name="image" id="image" /><br>
	(extensions autorisées : jpg, jpeg, gif et png) (taille maxi autorisée : 2MO)<br>
	<?php if($action == 'edit'): ?>
	<img src="../assets/images/categories/<?= $selectedCategory['img']; ?>" alt="" />
	<?php endif; ?>
  <br><br>
  
  <button>Enregistrer</button>
</form>
