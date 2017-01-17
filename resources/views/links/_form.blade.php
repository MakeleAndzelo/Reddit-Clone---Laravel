@if ($errors->count() > 0)
	@foreach ($errors as $error)
		<div class="alert alert-danger">{{ $error }}</div>
	@endforeach
@endif
<div class="form-group">
	{{ Form::label('title', 'Title: ')}}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('url', 'URL: ') }}
	{{ Form::text('url', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit($submitButton, ['class'=>'btn btn-primary'])}}
</div>
