<?php

class Comment_Controller extends Base_Controller {

	public function action_save($blog_id, $post_id)
	{
		$input = Input::all();
		$rules = array(
			'commenter' => 'required|max:50',
			'commenter_email' => 'required|email',
			'content' => 'required|max:1000',
		);
		if(is_a(Post::find($post_id), 'post')) {
			$validation = Validator::make($input, $rules);
			if($validation->fails()){
				return Redirect::to_action('post@view', array($blog_id, $post_id))->with_input()->with_errors($validation);
			} else {
				$comment = new Comment();
					$comment->commenter = $input['commenter'];
					$comment->commenter_email = $input['commenter_email'];
					$comment->content = $input['content'];
					$comment->post_id = $post_id;
				$comment->save();
				return Redirect::to_action('post@view', array($blog_id, $post_id))->with('new-comment', true);
			}
		} else {
			return Response::error('404');
		}
	}

}
