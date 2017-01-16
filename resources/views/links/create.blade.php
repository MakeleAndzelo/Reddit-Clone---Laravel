@extends('app.layout')

@section('content')
	{{ Form::open(['method' => 'post', 'action' => 'LinksController@store']) }}
		@include('links._form', ['submitButton' => 'Add a link'])
	{{ Form::close() }}
@endsection