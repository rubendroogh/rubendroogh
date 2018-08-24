<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ruben Droogh</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <nav class="project-nav">
        <ul>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
        </ul>
    </nav>

	<main>
		@yield('content')
	</main>

    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/projects.js') }}"></script>
</body>
</html>
