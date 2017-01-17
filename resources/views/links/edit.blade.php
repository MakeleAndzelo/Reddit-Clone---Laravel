@extends('app.layout')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading"><h3>Create new link</h3></div>
	            <div class="panel-body">
					{{ Form::model($link, ['method' => 'PUT', 'action' => ['LinksController@update', $link->id]]) }}
						@include('links._form', ['submitButton' => 'Edit a link'])
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection