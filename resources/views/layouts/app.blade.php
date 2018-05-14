<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __("Admin Dashboard") }}</title>
    <link rel="stylesheet" href="{{url('css/bulma.min.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="author" href="humans.txt">
</head>
<body>
    <div id="app1">
        <nav class="navbar is-primary">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    {{ __("Admin Dashboard") }}
                </a>
            </div>
            <div class="navbar-end ">
                <a class="navbar-item "  target='_blank' href="{{ route('main') }}">{{ __('Visit Site') }}</a>
                @guest
                <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="#" class="navbar-link">{{ Auth::user()->name }}</a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest

        </div>

    </div>
</nav>


<main class="py-4">
    @yield('content')
</main>
</div>

@yield("footer-scripts")
</body>
</html>
