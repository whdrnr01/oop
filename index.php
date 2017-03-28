<?php

class Model 
{
	protected $dates = [];	
	public function __get($property)
	{
		if (in_array($property, $this->dates)) {
			return new DateTime($this->{$property});
		}

		return $this->{$property};
	}
}

class Comment extends Model
{
	protected $dates = ['createdAt'];
	protected $createdAt = '2016-01-01 12:30:00';
}

$comment = new Comment;
var_dump($comment->createdAt);