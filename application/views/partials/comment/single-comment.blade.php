<div class="span2" >
<img src="{{ $comment->getPicture() }}" alt="{{ $comment->commenter }}" />
</div>
<div class="span10">
	<blockquote style="min-height:90px">
		<p>{{ $comment->content }}</p>
		<small><b>{{ $comment->commenter }}</b> - <time datetime="{{ $comment->created_at }}">{{ (Date::Forge($comment->created_at)->ago()) }}</time></small>
	</blockquote>
</div>
<hr style="clear:both" />