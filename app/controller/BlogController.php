<?php

namespace App\Controller;

use \App\Model\Manager\PostManager;


class BlogController
{
	public function index()
	{
		$PostManager = new PostManager();
		$posts = $PostManager->getLastPosts();
		require('view/index.php');
	}
	public function show($id)
	{
		$id = (int) $id;
		$PostManager = new PostManager();
		$post = $PostManager->getUniqueById($id);
		if(!$post){
			header('Location: index.php');
		}else{
			require('view/postShow.php');
		}
	}
}