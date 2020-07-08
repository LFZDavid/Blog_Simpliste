<?php

$title = 'Le Blog';
ob_start();
?>
<div class="heading">
	<h2 class="page-title">Articles récents</h2>
</div>
<div id="blogCarousel" class="carousel slide text-center" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#blogCarousel" data-slide-to="1"></li>
		<li data-target="#blogCarousel" data-slide-to="2"></li>
		<li data-target="#blogCarousel" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<?php
		foreach ($posts as $post){
		?>
		<div class="item 
			<?php 
			if($post->id()==1){
				echo'active';
			} ;?>
			">
			<h3 class="post-title"><?= $post->title()?></h3>
			<h4 class="post-resume"><?=substr($post->content(),0,50)?>...</h4>
			<a href="index.php?post_id=<?= $post->id()?>" class="post-link"><em>Lire la suite...</em></a>
		</div>
		<?php
			}
		?>
	</div>
	<a class="left carousel-control" href="#blogCarousel" data-slide="prev" role="button">
		<span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#blogCarousel" data-slide="next" role="button">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('view/template.php'); ?>