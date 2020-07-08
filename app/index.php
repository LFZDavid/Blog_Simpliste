<?php

require_once('autoload.php');

use \App\Controller\BlogController;

$BlogController = new BlogController();

try{
	if(isset($_GET['post_id'])){
		$BlogController->show($_GET['post_id']);
	}else{
		$BlogController->index();
	}
}
catch(Exception $e){
	echo 'Erreur : ' .$e->getMessage();
}

/*
	echo '<script type="text/javascript">alert("test");
				</script>';
*/