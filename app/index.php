<?php

require_once('autoload.php');

use \App\Controller\BlogController;

$BlogController = new BlogController();

try{
	if(isset($_GET['action'])){
		if($_GET['action'] == "admin"){
			$BlogController->admin();
		}elseif($_GET['action'] == 'new'){
			$BlogController->getForm();
		}elseif ($_GET['action'] == 'create') {
			$BlogController->create();
		}elseif($_GET['action'] == 'edit' && isset($_GET['post_id'])){
			$BlogController->getEditForm($_GET['post_id']);
		}elseif ($_GET['action'] == 'update') {
			$BlogController->update($_GET['post_id']);
		}elseif($_GET['action'] == 'delete' && isset($_GET['post_id'])){
			$BlogController->delete($_GET['post_id']);
		}
	}
	elseif(isset($_GET['post_id'])){
			$BlogController->show($_GET['post_id']);
	}else{
		$BlogController->index();
	}
}
catch(Exception $e){
	echo 'Erreur : ' .$e->getMessage();
}

/*
		
		echo '<script type="text/javascript">alert("test");				</script>';
*/