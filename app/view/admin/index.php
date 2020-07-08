<?php

$title = 'Admin';
ob_start();
?>
<div class="heading">
	<h2 class="page-title"><?= $title?></h2>
</div>
<div class="container-fluid">
	<a href="index.php?action=new" class="btn btn-primary" style="margin-bottom:20px;">Ajouter un article</a>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Publié</th>
				<th>Création</th>
				<th>Mis à jour</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($posts as $post){
			?>
				<tr>
					<td><?= $post->title() ?></td>
					<td>
						<?php
						 if($post->status()== 1){
							echo'oui'; 
						}elseif($post->status()==2){
							echo'non';
						} 
						?>
						</td>

					<td><?= $post->created_at() ?></td>
					<td><?= $post->updated_at() ?></td>
					<td width="200">
						<a href="index.php?post_id=<?=$post->id()?>&amp;action=edit" class="btn btn-success">Modifier</a>
						<a href="index.php?post_id=<?=$post->id()?>&amp;action=delete" class="btn btn-danger">supprimer</a>
					</td>
				</tr>	
			<?php
				}
			?>
		</tbody>
	</table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('./view/template.php'); ?>