@extends('app.layout')

@section('content')
	<h1>Links</h1>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>url</th>
			</tr>
		</thead>
		<tbody>
			@foreach($links as $link)
				<tr>
					<td>{{ $link->id }}</td>
					<td>{{ $link->title }}</td>
					<td>{{ $link->url }}</td>
					<td>
						<a href="{{ route('links.show', $link->id) }}">show</a>
						<a href="{{ route('links.edit', $link->id) }}">edit</a>
						{{ Form::open(['method' => 'DELETE', 'action' => ['LinksController@destroy', $link->id]])}}
							{{ Form::submit('destroy') }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection