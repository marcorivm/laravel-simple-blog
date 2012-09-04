@layout('layouts/main')
@section('main-content')

<div class="row">
<h1>Search results:</h1>
</div>
<div class="row">
<hr />
</div>
<div class="row">
@forelse($blogs as $blog)
@forelse($blog->posts()->where('title', 'like', '%'.$search.'%')->order_by('created_at', 'desc')->get() as $post)
<div class="span5 well">
<h1><a href="/{{ $blog->id }}/{{$post->id}}">{{ $post->title }}</a></h1>
<p><? preg_match('/^([^.!?\s]*[\.!?\s]+){0,30}/', strip_tags($post->content), $abstract); echo $abstract[0].'...'; ?></p>
<span>Posted on {{ $post->created_at }}</span>
</div>
@empty

@endforelse
@empty
{{ Alert::error('There are no blogs created, why dont you '.HTML::link_to_action('post@create', 'create one', array($blog->id)).'?', false) }}
@endforelse
</div>
@endsection
