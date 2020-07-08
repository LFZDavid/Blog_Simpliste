<?php

namespace App\Controller;

use \App\Model\Manager\PostManager;
use \App\Model\Entity\Post;


class BlogController
{
	public function admin()
	{
		$PostManager = new PostManager();
		$posts = $PostManager->getList();
		require('view/admin/index.php');
	}
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
	public function getForm(){
		require('view/admin/postForm.php');
	}
	public function getEditForm($id){
		$id = (int) $id;
		$PostManager = new PostManager();
		$post = $PostManager->getUniqueById($id); 
		require('view/admin/editForm.php');
	}
	public function create()
	{
		$PostManager = new PostManager();
		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'status' => $_POST['status'],
			'created_at' => date("Y-m-d")
		);
		$post = new Post($data);
		$PostManager->add($post);
		echo '<script type="text/javascript">alert("L\'article à été créé !");</script>';
		header("Location:index.php?action=admin");
	}

	public function update($id){
		$id = (int) $id;
		$PostManager = new PostManager();

		$newTitle = htmlspecialchars($_POST['title']);
		$newContent = htmlspecialchars($_POST['content']);
		$newStatus = $_POST['status'];
		$data = array(
			'id' => $id,
			'title' => $newTitle,
			'content' => $newContent,
			'status' => $newStatus,
			'updated_at' => date("Y-m-d")
		);
		$postUpdated = new Post($data);
		$PostManager->update($postUpdated);
		header("Location:index.php?action=admin");
	}

	public function delete($id)
	{
		$id = (int) $id;
		$PostManager = new PostManager();
		$PostManager->delete($id);
		header("Location:index.php?action=admin");
	}
}