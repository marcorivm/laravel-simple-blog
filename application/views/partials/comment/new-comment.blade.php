	{{ Form::horizontal_open(URL::to_action('comment@save', array($blog->id, $post->id))) }}
		<?
			echo Form::control_group(
				Form::label('commenter', 'Name:'), 
				Form::text('commenter', Input::old('commenter'), array('placeholder' => 'Jhon Doe')),
				(($errors->has('commenter'))? 'error' : ((Input::old('commenter'))? 'success' : '')),
				(($errors->has('commenter'))? Form::inline_help($errors->first('commenter')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('commenter_email', 'Email:'), 
				Form::text('commenter_email', Input::old('commenter_email'), array('placeholder' => 'jhon@example.com')),
				(($errors->has('commenter_email'))? 'error' : ((Input::old('commenter_email'))? 'success' : '')),
				(($errors->has('commenter_email'))? Form::inline_help($errors->first('commenter_email')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('content', 'Comment:'), 
				Form::textarea('content', Input::old('content')),
				(($errors->has('content'))? 'error' : ((Input::old('content'))? 'success' : '')),
				(($errors->has('content'))? Form::inline_help($errors->first('content')) : '')
				);
		?>
		<?
			echo Form::actions(
				array(
					Buttons::primary_submit('Post comment'),
					Form::button('Cancel')
				)
			);
		?>
	{{ Form::close() }}