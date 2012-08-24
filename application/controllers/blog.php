<?php

class Blog_Controller extends Base_Controller {

	public function action_create()
	{
		return View::make('blog.create.form', $this->view_opts);
	}

	public function action_view($blog_id)
	{
		$blog = Blog::find($blog_id)->with('posts');
		$posts = $blog->posts()->paginate(5);
		$this->view_opts['blog'] = $blog;
		$this->view_opts['posts'] = $posts;
		return View::make('blog.view', $this->view_opts);
	}

	public function action_list()
	{
		$this->view_opts['blogs'] = Blog::all()->paginate(5);
		return View::make('blog.list', $this->view_opts);
	}

	public function action_save()
	{
		if(Input::has('name')) {
			$blog = new Blog();
			$blog->name = Input::get('name');
			$blog->save();
			$this->view_opts['blog'] = $blog;
		return View::make('blog.create.success', $this->view_opts);
		} else {
			Response::error('500');
		}
	}

}
