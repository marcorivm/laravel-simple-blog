<?php

class Post_Controller extends Base_Controller {
	public function action_view($blog_id, $post_id)
	{
		$post = Post::find($post_id)->with(array('blog','comments'));
		if(is_a($post,'post')) {
			$this->view_opts['post'] = $post;
			$this->view_opts['blog'] = $post->blog;
			return View::make('post.view', this->view_opts);
		} else {
			return Response::error('404');
		}
	}

	public function action_create($blog_id)
	{
		if(is_a(Blog::find($blog_id), 'blog') {
			return View::make('post.create.form', this->view_opts);
		} else {
			return Response::error('404');
		}
	}

	public function action_save($blog_id)
	{
		$input = Input::get();
		$rules = array(
			'title' => 'required|max:50',
			'content' => 'required',
			'tags' => 'required|match:/[a-z](,[a-z]){1,5}/',
		);
		if(is_a(Blog:find($blog_id), 'blog') {
			$validation = Validator::make($input, $rules);
			if($validation->fails()){
				return View::make('post.create.form', this->view_opts);
			} else {
				$post = new Post();
					$post->title = $input['title'];
					$post->content = $input['content'];
					$post->tags = $input['tags'];
				$post->save();
				return View::make('post.create.success', this->view_opts);
			}
		} else {
			return Response::error('404');
		}
	}

}
