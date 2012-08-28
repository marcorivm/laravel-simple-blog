<?php

class Blog_Controller extends Base_Controller {

	public function action_create()
	{
		return View::make('blog.create', $this->view_opts);
	}

	public function action_view($blog_id)
	{
		$blog = Blog::find($blog_id)->with('posts');
		$this->view_opts['blog'] = $blog;
		return View::make('blog.view', $this->view_opts);
	}

	public function action_list()
	{
		$this->view_opts['blogs'] = Blog::all();
		return View::make('blog.list', $this->view_opts);
	}

	public function action_save()
	{
		$input = Input::all();
		$rules = array(
				'name' => 'required|max:50',
				'captchatest' => 'laracaptcha|required',
		);
		$validation = Validator::make($input, $rules);
		if($validation->fails()) {
			return Redirect::to_action('blog@create')->with_input()->with_errors($validation);
		} else {
			$blog = new Blog();
			$blog->name = $input['name'];
			$blog->save();
			return Redirect::to_action('blog@view', array($blog->id))->with('new',true);
		}
	}

}
