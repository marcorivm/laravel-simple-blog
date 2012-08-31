<?php

class Comment extends Eloquent {

	public static $timestamps = true;

	public function post()
	{
		return $this->belongs_to('Post');
	}
    
    public function getPicture()
    {
        return "http://www.gravatar.com/avatar/".md5(strtolower(trim($this->commenter_email)))."?d=identicon";
    }

}
