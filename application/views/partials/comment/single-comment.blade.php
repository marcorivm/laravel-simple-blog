<div class="span2" >
<? $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($comment->commenter_email)))."?d=identicon";?>
<img src="{{ $grav_url }}" alt="{{ $comment->commenter }}" />
</div>
<div class="span10">
	<blockquote style="min-height:90px">
		<p>{{ $comment->content }}</p>
		<small>{{ $comment->commenter }}</small>
	</blockquote>
</div>
<hr style="clear:both" />