@if ($errors->count() > 0)
	<ul>
		@foreach ($errors as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
{{ Form::label('title', 'Title: ')}}
{{ Form::text('title') }}
<br><br>
{{ Form::label('url', 'URL: ') }}
{{ Form::text('url') }}
<br><br>
{{ Form::submit($submitButton)}}