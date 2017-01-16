{{ Form::open(['method' => 'post', 'action' => ['CommentsController@store', $link->id]]) }}
	{{ Form::label('body', 'Comment Body: ') }}
	{{ Form::textarea('body') }}
	<br><br>
	{{ Form::submit('Add comment') }}
{{ Form::close() }}