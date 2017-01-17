@extends('app.layout')

@section('content')
	<article>
		<h1>{{ $link->title }}</h1>
		<p>Submitted by {{ $link->user->email }}</p>
	</article>
	<hr>
	<a href="{{ $link->url }}" class="btn-sm btn-primary">Visit URL</a>
	@if(Auth::user() && Auth::id() === $link->user->id )
		<div class="btn-group-sm pull-right">
			<a href="{{ action('LinksController@edit', $link->id) }}" class="btn-sm btn-warning">Edit</a>
			{{ Form::open(['method' => 'DELETE', 'action' => ['LinksController@destroy', $link->id], 'style'=>'display: inline;'])}}
				{{ Form::submit('Delete', ['class' => 'btn-sm btn-danger']) }}
			{{ Form::close() }}
		</div>
	@endif
	<h4>{{ $link->comments->count()}} {{ str_plural('Comment', $link->comments->count()) }}</h4>
	<hr>
	@foreach ($link->comments as $comment)
		@include('comments._comment')
	@endforeach
	
	@include('comments._form')

@endsection