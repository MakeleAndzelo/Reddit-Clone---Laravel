{{ Form::open(['method' => 'post', 'action' => ['CommentsController@store', $link->id]]) }}
	<div class="form-group">
		{{ Form::textarea('body', null,['class' => 'form-control', 'rows' => 3]) }}
	</div>
	{{ Form::submit('Add comment', ['class' => 'btn-sm btn-primary']) }}
{{ Form::close() }}