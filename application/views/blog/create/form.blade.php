@layout('layouts/main')
@section('main-content')
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