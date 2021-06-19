
<div class="articles">
<?php foreach($articles as $article): ?>
	<div class="post">
		<h3 class="post-title"><?= $article['title']; ?></h3>
		<p class="content"><?= nl2br(htmlspecialchars($article['content'])); ?></p>
		<p class="actions">
			<a href="index.php?page=posts&action=edit&id=<?= $article['id']; ?>">Modifier</a> | <a href="index.php?page=posts&action=delete&id=<?= $article['id']; ?>"  onclick="return confirm('Confirmer la suppression')">Supprimer</a>
		</p>
	</div>
<?php endforeach; ?>
</div>
