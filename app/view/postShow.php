<?php

$title = 'Le Blog';
ob_start();
?>
<div class="heading">
	<h2 class="page-title"><?= $post->title()?></h2>
</div>
<div class="post-date">
	<em>
	<?php
		if(null !== $post->updated_at()){
		echo'Mis à jour le : '.$post->updated_at();
		}else{
		echo'créé le : '.$post->created_at();
		}
	?>
	</em>
</div>
<div class="container-fluid">
	<div class="post-content">
		<?=$post->content()?>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/template.php'); ?>