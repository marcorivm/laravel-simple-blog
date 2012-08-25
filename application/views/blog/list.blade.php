@layout('layouts/main')
@section('main-content')
<div class="row">{{ Buttons::large_success_link('Create a new blog!', URL::to_action('blog@create')) }}</div>
<div class="row">
	<hr />
</div>
<div class="row">
	@forelse($blogs as $blog)
		<div class="span5 well">
			<h1><a href="/{{ $blog->id }}">{{ $blog->name }}</a></h1>
		</div>
	@empty
	 {{ Alert::error('There are no blogs', false) }}
	@endforelse
</div>
@endsection