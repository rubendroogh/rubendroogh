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
	<main>
        <div class="home">
            <div class="login-bg color-top">
                <span class="unselectable">/////////////&lt;div&gt;///////////////////////////////////////////////////////////</span>
                <nav>
                    <div class="navigation">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </nav>
            </div>
		    @yield('content')
            <div class="login-bg color-bottom">
                <span class="unselectable">//.com////////////////////////////////////</span>
            </div>
        </div>
	</main>

    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
