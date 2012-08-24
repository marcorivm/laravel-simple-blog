<?php

class Comment extends Eloquent {

	public static $timestamps = true;

	public function post()
	{
		return $this->belongs_to('Post');
	}

}
