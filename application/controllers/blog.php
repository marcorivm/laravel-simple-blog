<?php

class Blog_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('blog.index');
	}

	public function action_create()
	{
		// code here..

		return View::make('blog.create');
	}

	public function action_view()
	{
		// code here..

		return View::make('blog.view');
	}

	public function action_list()
	{
		// code here..

		return View::make('blog.list');
	}

	public function action_save()
	{
		// code here..

		return View::make('blog.save');
	}

}
