<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<title>Reddit Clone</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

	@yield('styles')
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<a href="/" class="navbar-brand">REDDIT CLONE</a>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::user())
						<li><a href="/links/create">Submit new link</a></li>
						<li><a href="{{ action('UsersController@logout') }}">Log out</a></li>
					@else
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Register</a></li>
					@endif
				</ul>
			</div>
		</nav>
	</header>
	
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			@if(session()->exists('success'))
				<div class="alert alert-success">{{ session()->get('success') }}</p></div>
			@endif 
			@yield('content')
		</div>
	</div>

	<script src="/js/app.js"></script>
</body>
</html>