@extends('static.base')

@section('content')
	<div class="blog-title">
		{{ $article->title }}
	</div>
	<div class="blog-title">
		{{ $article->body }}
	</div>
	<hr>
	<label for="Comments">Comments</label>
	<hr>
	<ul>
		@foreach ($article->comments as $comment)
		<li>
			@include('comments.show', ['comment' => $comment])
		</li>
		@endforeach
	</ul>
	
		

@endsection