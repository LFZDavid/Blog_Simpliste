<?php

namespace App\Model\Entity;

use \App\Model\Entity\Entity;

class Post extends Entity
{

	protected $title;
	protected $content;
	protected $created_at;
	protected $updated_at;

	//GETTERS
	public function title()
	{
		return $this->title;
	}
	public function content()
	{
		return $this->content;
	}
	public function created_at()
	{
		return $this->created_at;
	}
	public function updated_at()
	{
		return $this->updated_at;
	}

	//SETTERS
	public function settitle($title)
	{
		$this->title = $title;
	}
	public function setContent($content)
	{
		if(!empty($content)){
			$this->content = $content;
		}
	}
	public function setCreated_at($created_at)
	{
		if(!empty($created_at)){
			if($created_at <= time()){
				$this->created_at = $created_at;
			}
		}
	}
	public function setUpdated_at($updated_at)
	{
		if(!empty($updated_at)){
			$this->updated_at = $updated_at;
		}
	}
}