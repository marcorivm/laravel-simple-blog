<?php

class Post extends Eloquent {

	public static $timestamps = true;

	public function comments()
	{
		return $this->has_many('Comment');
	}

}
