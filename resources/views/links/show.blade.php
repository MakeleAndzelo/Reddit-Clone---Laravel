@extends('app.layout')

@section('content')
	{{ $link->title }}
	{{ $link->url }}

	<h3>Add a comment</h3>
	@include('comments._form')

	@foreach ($link->comments as $comment)
		@include('comments._comment')
	@endforeach
@endsection