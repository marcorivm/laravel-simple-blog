@layout('layouts/main')
@section('main-content')
<div class="row">
	<h1>Add a new post to {{ $blog->name }}</h1>
</div>
<div class="row">
	{{ Form::horizontal_open() }}
		<?
			echo Form::control_group(
				Form::label('title', 'Post title:'), 
				Form::text('title', Input::old('title'), array('placeholder' => 'Awesome title')),
				(($errors->has('title'))? 'error' : ((Input::old('title'))? 'success' : '')),
				(($errors->has('title'))? Form::inline_help($errors->first('title')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('content', 'Post content:'), 
				Form::textarea('content', Input::old('content')),
				(($errors->has('content'))? 'error' : ((Input::old('content'))? 'success' : '')),
				(($errors->has('content'))? Form::inline_help($errors->first('content')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('tags', 'Tags (use , to separate tags):'), 
				Form::text('tags', Input::old('tags'), array('placeholder' => 'tag1, tag2')),
				(($errors->has('tags'))? 'error' : ((Input::old('tags'))? 'success' : '')),
				(($errors->has('tags'))? Form::inline_help($errors->first('tags')) : '')
				);
		?>
		<?
			echo Form::actions(
				array(
					Buttons::primary_submit('Create post'),
					Form::button('Cancel')
				)
			);
		?>
	{{ Form::close() }}
</div>
@endsection