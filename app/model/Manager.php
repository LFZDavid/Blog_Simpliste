<?php

namespace App\Model\Manager;

use \PDO;

abstract class Manager
{
	// Valeurs à modifier pour le déploiment
	private static $dbHost = "localhost"; // Host
	private static $dbName = "blog"; // Nom de la base de données
	private static $dbUser = "root"; // Nom de l'utilisateur de la bdd
	private static $dbUserPassword = ""; // Mot de passe
	protected $db;
	protected $table;
	protected $classManaged;

	public function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=" .self::$dbHost . ";dbname=" .self::$dbName.";charset=utf8",self::$dbUser,self::$dbUserPassword);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e){
			echo 'La connexion à échoué.<br/>';
			echo 'Information : [', $e->getCode(), '] ', $e->getMessage();
		}
	}

	public function getList()
	{
		$q = $this->db->query('SELECT * FROM'.$this->table);
		$q->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classManaged);

		return $q->fetchAll();
	}

	public function getUniqueById($id)
	{

		$request = 'SELECT * FROM '.$this->table.' WHERE id =:id'; 
		$q = $this->db->prepare($request);
		$q->bindValue(':id', $id, PDO::PARAM_INT);
		$q->execute();
		$q->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classManaged);
		return $q->fetch();
	}

}