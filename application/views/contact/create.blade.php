@layout('layouts/main')
@section('main-content')
<div class="row">
	<h1>Contact {{ $blog->name }}</h1>
</div>
<div class="row">
	{{ Form::horizontal_open() }}
		<?
			echo Form::control_group(
				Form::label('name', 'Name:'), 
				Form::text('name', Input::old('name'), array('placeholder' => 'Your name')),
				(($errors->has('name'))? 'error' : ((Input::old('name'))? 'success' : '')),
				(($errors->has('name'))? Form::inline_help($errors->first('name')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('email', 'E-mail:'), 
				Form::text('email', Input::old('email'), array('placeholder' => 'Your e-mail:')),
				//(($errors->has('email'))? 'error' : ((Input::old('email'))? 'success' : '')),
				//(($errors->has('email'))? Form::inline_help($errors->first('email')) : '')
				);
		?>
		<?
			echo Form::control_group(
				Form::label('phone', 'Your phone number:'), 
				Form::text('phone', Input::old('phone'), array('placeholder' => '811...')),
				//(($errors->has('phone'))? 'error' : ((Input::old('phone'))? 'success' : '')),
				//(($errors->has('phone'))? Form::inline_help($errors->first('phone')) : '')
				);
		?>
		
		<?
			echo Form::control_group(
				Form::label('message', 'Message:'), 
				Form::textarea('message', Input::old('message')),
				//(($errors->has('message'))? 'error' : ((Input::old('message'))? 'success' : '')),
				//(($errors->has('message'))? Form::inline_help($errors->first('message')) : '')
				);
		?>

		<?
			echo Form::actions(
				array(
					Buttons::primary_submit('Send'),
					Form::button('Cancel')
				)
			);
		?>

	{{ Form::close() }}
</div>
@endsection