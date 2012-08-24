<?php

class Post_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('post.index');
	}

	public function action_view()
	{
		// code here..

		return View::make('post.view');
	}

	public function action_create()
	{
		// code here..

		return View::make('post.create');
	}

	public function action_save()
	{
		// code here..

		return View::make('post.save');
	}

}
