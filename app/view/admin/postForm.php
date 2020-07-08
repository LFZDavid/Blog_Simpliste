<?php

$title = 'Créer un article';
ob_start();
?>
<div class="heading">
	<h2 class="page-title"><?= $title?></h2>
</div>
<div class="post-date">
	<form action="index.php?action=create" class="form" method="post">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Titre de l'article" id="title" name="title">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Contenu" id="content" name="content">
		</div>
		
		<div class="form-actions">
			<button class="btn btn-success">
				Ajouter l'article
			</button>
		</div>
		<div class="form-group">
			<label for="1">Publier</label>
			<input type="radio" id="1" name="status" value="1"><br>
			<label for="2">Brouillon</label>
			<input type="radio" id="2" name="status" value="2" checked>
		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('./view/template.php'); ?>