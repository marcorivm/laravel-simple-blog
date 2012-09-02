<?php

class Post_Controller extends Base_Controller {
	public function action_view($blog_id, $post_id)
	{
		$post = Post::find($post_id)->with(array('blog','comments'));
		if(is_a($post,'post')) {
			$this->view_opts['post'] = $post;
			$this->view_opts['blog'] = $post->blog;
            $this->view_opts['comments'] = $post->comments()->order_by('created_at', 'asc')->paginate(5);
			return View::make('post.view', $this->view_opts);
		} else {
			return Response::error('404');
		}
	}

	public function action_create($blog_id)
	{
		$blog = Blog::find($blog_id);
		if(is_a($blog, 'blog')) {
			$this->view_opts['blog'] = $blog;
			return View::make('post.create', $this->view_opts);
		} else {
			return Response::error('404');
		}
	}

	public function action_save($blog_id)
	{
		$input = Input::all();
		$rules = array(
			'title' => 'required|max:50',
			'content' => 'required',
			'tags' => 'required',
			'captchatest' => 'laracaptcha|required',
		);
		if(is_a(Blog::find($blog_id), 'blog')) {
			$validation = Validator::make($input, $rules);
			if($validation->fails()){
				return Redirect::to_action('post@create', array($blog_id))->with_input()->with_errors($validation);
			} else {
				$post = new Post();
					$post->title = $input['title'];
					$post->blog_id = $blog_id;
					$post->content = $input['content'];
					$post->tags = $input['tags'];
					$post->status = 1;
				$post->save();
				return Redirect::to_action('post@view', array($blog_id, $post->id))->with('new', true);
			}
		} else {
			return Response::error('404');
		}
	}

}
