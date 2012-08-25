@layout('layouts/main')
@section('main-content')
<div class="row">
	<h1>{{ $blog->name }}</h1>
	<h2>{{ $post->title }} </h2>
	<h3>on {{ $post->created_at }}</h3>
</div>
<div class="row">
	{{ $post->content }}
</div>
<div class="row">
	<hr />
</div>
<div class="row">
	<h4>Comentarios</h4>
	<hr />
</div>
<div class="row">
	@forelse($post->comments()->order_by('created_at', 'asc')->get() as $comment)
		<div>
			@include('partials.comment.single-comment')
		</div>
	@empty
		{{ Alert::info('There are no comments in this post', false) }}
		<hr class="span12" />
	@endforelse
	<div class="span12">@include('partials.comment.new-comment')</div>
</div>
@endsection