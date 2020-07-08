<?php
namespace App\Model\Manager;

use \PDO;
use \App\Model\Manager\Manager;
use \App\Model\Entity\Post;

class PostManager extends Manager
{
	protected $table = 'post';
	protected $classManaged = '\App\Model\Entity\Post';
	protected $paginate = 'LIMIT 0, 4';

	public function getLastPosts()
	{
		$request = "SELECT * FROM " .$this->table. " " .$this->paginate;
		$q = $this->db->query($request);
		$q->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classManaged);

		return $q->fetchAll();
	}

	public function add(Post $post)
	{
		$req = $this->db->prepare('INSERT INTO post(title, content, status, created_at) VALUES(:title, :content, :status, :created_at)');
		$req->bindValue(':title', $post->title());
		$req->bindValue(':content', $post->content());
		$req->bindValue(':status', $post->status());
		$req->bindValue(':created_at', $post->created_at());
		$req->execute();
	}

	public function update(Post $post)
	{
		$req = $this->db->prepare('UPDATE post SET title = :title, content = :content, status = :status, updated_at = :updated_at WHERE id = :id');
		
		$req->bindValue(':id', $post->id());
		$req->bindValue(':title', $post->title());
		$req->bindValue(':content', $post->content());
		$req->bindValue(':status', $post->status());
		$req->bindValue(':updated_at', $post->updated_at());
		$req->execute();
	}

	public function delete($id)
	{
		$req = $this->db->prepare("DELETE FROM post WHERE id = :id");
		$req->bindValue(':id', $id);
		$req->execute();
	}
}