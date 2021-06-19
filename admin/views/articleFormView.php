<h2><?= ($action == 'new') ? 'Ajouter' : 'Modifier'; ?> une Article :</h2>

<?php if(!empty($errors)): ?>
	<div class="errors">
	<?php foreach($errors as $error): ?>
		<?= $error ?><br>
	<?php endforeach; ?>
	</div>
<?php endif; ?>


<form action="" method="POST">
  <label for="title">Titre *</label>
  <input type="text" name="title" id="title" value="<?= $submitedTitle ?? $selectedPost['title'] ?? ''; ?>" />
  <label for="content">content <small>(Sauts de lignes non pris en compte à l'affichage)</small></label>
  <textarea name="content" id="content"><?= isset($submitedContent) ? $submitedContent : $selectedArticle['content'] ?? ''; ?></textarea>
  <label for="bg_color">category_id <small>(id)</small></label>
  <input type="text" name="bg_color" id="bg_color" value="<?= $submitedBgColor ?? $selectedArticle['bg_color'] ?? ''; ?>" />
  <label for="bg_color">img<small>(img)</small></label>
  <input type="text" name="bg_color" id="bg_color" value="<?= $submitedBgColor ?? $selectedArticle['bg_color'] ?? ''; ?>" />
  <p><small>Les champs * sont obligatoires</small></p><br>
  <button>Enregistrer</button>
</form>

