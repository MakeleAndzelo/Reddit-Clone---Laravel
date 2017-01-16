<h1>Edit link</h1>
{{ Form::model($link, ['method' => 'PUT', 'action' => ['LinksController@update', $link->id]]) }}
	@include('links._form', ['submitButton' => 'Edit a link'])
{{ Form::close() }}