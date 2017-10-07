@extends('static.base')

@section('content')
	@foreach ($posts as $post)
		<div class="blog-title">
			<a href="/posts/{{ $post->id }}/">{{ $post->title }}</a>
			<p>Created at:{{ $post->created_at }} </p> 
			<p>By:  {{ $post->user->name }}</p>

		</div>
		<div class="blog-content">
			{{ $post->body }}
		</div>
	@endforeach
@endsection
@section('paginator')
	@include('layouts.paginator')
@endsection
