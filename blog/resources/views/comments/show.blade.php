<div class="container">
	<p class="blog-title">{{ $comment->title }}</p>
	<p>Write by: {{ $comment->user->name }} at {{ $comment->created_at }}</p>
	<hr>
	<label for="comment-content"> Content: </label>
	<p>{{ $comment->content }}</p>
</div>
