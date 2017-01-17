@extends('app.layout')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading"><h3>Create new link</h3></div>
	            <div class="panel-body">
					{{ Form::open(['method' => 'post', 'action' => 'LinksController@store']) }}
						@include('links._form', ['submitButton' => 'Add a link'])
					{{ Form::close() }}
	            </div>	
	        </div>
	    </div>
	</div>
@endsection