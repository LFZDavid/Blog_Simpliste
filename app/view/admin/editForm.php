<?php

$title = 'Modifier un article';
ob_start();
?>
<div class="heading">
	<h2 class="page-title"><?= $title?></h2>
</div>
<div class="post-date">
	<form action="<?php echo'index.php?post_id='.$post->id().'&amp;action=update';?>" class="form" method="post">
		<div class="form-group">
			<input type="text" class="form-control"value="<?= $post->title()?>" id="title" name="title">
		</div>
		<div class="form-group">
			<input type="text" class="form-control"value="<?= $post->content()?>" id="content" name="content">
		</div>
		<div class="form-group">
			<label for="1">Publier</label>
			<input type="radio" id="1" name="status" value="1" 
			<?php
				if($post->status() == 1){
				echo'checked';
			}
			?>
			><br>
			<label for="2">Brouillon</label>
			<input type="radio" id="2" name="status" value="2"
			<?php
				if($post->status() == 2){
				echo'checked';
			}
			?>
			>
		</div>
		
		<div class="form-actions">
			<button class="btn btn-success">
				Mettre à jour
			</button>
		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('./view/template.php'); ?>