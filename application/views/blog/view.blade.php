@layout('layouts/main')
@section('main-content')
<div class="row">{{ Session::has('new')? Alert::success('Congratulations, your blog has been created!') : '' }}</div>
<div class="row">
	<h1>Welcome to {{ $blog->name }}</h1>
</div>
<div class="row">{{ Buttons::large_success_link('Create a new post!', URL::to_action('post@create',array($blog->id))) }}</div>
<div class="row">
	<hr />
</div>
<div class="row">
	@forelse($blog->posts()->order_by('created_at', 'desc')->get() as $post)
		<div class="span5 well">
			<h1><a href="{{ URL::to_action('post@view',array($blog->id,$post->id)) }}">{{ $post->title }}</a></h1>
			<p><? preg_match('/^([^.!?\s]*[\.!?\s]+){0,30}/', strip_tags($post->content), $abstract); echo $abstract[0].'...'; ?></p>
			<span>Posted on {{ $post->created_at }}</span>
		</div>
	@empty
	 {{ Alert::error('There are no posts, why dont you '.HTML::link_to_action('post@create', 'create one', array($blog->id)).'?', false) }}
	@endforelse
</div>
@endsection
