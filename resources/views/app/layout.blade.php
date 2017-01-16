<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reddit Clone</title>
</head>
<body>
	@if(session()->exists('success'))
		<p>{{ session()->get('success') }}</p>
	@endif 
	@yield('content')
</body>
</html>