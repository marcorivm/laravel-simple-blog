@layout('layouts/main')
@section('main-content')
<div class="row">
	<h1>Add a new blog</h1>
</div>
<div class="row">
	{{ Form::horizontal_open() }}
		<?
			echo Form::control_group(
				Form::label('name', 'Blog name:'), 
				Form::text('name', null, array('placeholder' => 'Awesome name')),
				(($errors->has('name'))? 'error' : ((Input::old('name'))? 'success' : '')),
				(($errors->has('name'))? Form::inline_help($errors->first('name')) : '')
				);

			echo Form::control_group(
				Form::image(LaraCaptcha\Captcha::img(), 'captcha', array('class' => 'captchaimg')),
				Form::text('captchatest', '', array('class' => 'captchainput', 'placeholder' => 'Insert captcha...')),
				(($errors->has('captchatest'))? 'error' : ((Input::old('captchatest'))? 'success' : '')),
				(($errors->has('captchatest'))? Form::inline_help($errors->first('captchatest')) : '')
				);
		?>
		<?
			echo Form::actions(
				array(
					Buttons::primary_submit('Create blog'),
					Form::button('Cancel')
				)
			);
		?>
	{{ Form::close() }}
</div>
@endsection