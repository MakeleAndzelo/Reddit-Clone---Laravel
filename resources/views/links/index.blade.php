@extends('app.layout')

@section('content')
	@foreach($links as $link)
		<article>
			<h1><a href="{{ action('LinksController@show', $link->id) }}">{{ $link->title }}</a></h1>
			<p>Submitted about {{ $link->created_at->diffForHumans() }} by <strong>{{ $link->user->email }}</strong> </p>
			<div class="btn-group-sm">
				<a href="{{ $link->url }}" class="btn btn-default btn-sm">View link</a>
			</div>
		</article>
		<hr>
	@endforeach
@endsection