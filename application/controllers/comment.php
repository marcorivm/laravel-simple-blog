<?php

class Comment_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('comment.index');
	}

	public function action_save()
	{
		// code here..

		return View::make('comment.save');
	}

}
