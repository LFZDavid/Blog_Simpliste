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
}