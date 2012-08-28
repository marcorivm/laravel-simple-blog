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
				(($errors->has('name'))? 'error' : ''),
				(($errors->has('name'))? Form::inline_help($errors->first('name')) : '')
				);
		?>
		<script type="text/javascript"
		     src="http://www.google.com/recaptcha/api/challenge?k=your_public_key">
		  </script>
		  <noscript>
		     <iframe src="http://www.google.com/recaptcha/api/noscript?k=your_public_key"
		         height="300" width="500" frameborder="0"></iframe><br>
		     <textarea name="recaptcha_challenge_field" rows="3" cols="40">
		     </textarea>
		     <input type="hidden" name="recaptcha_response_field"
		         value="manual_challenge">
		  </noscript>
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