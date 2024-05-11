<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GDP</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.3) !important;
        }
    </style>


    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md  shadow-sm" style="background-color: #0159A1; padding: 0px;margin-bottom: 40px;  justify-content: space-around;">
            @if (Auth::check())
            <a href="{{ url('home') }}" class="navbar-brand" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                Home
            </a>
            @endif
            @if (Auth::check())
            @if (Auth::user()->rol == "Admin" || Auth::user()->rol == "Gestor")
            <a class="navbar-brand" href="{{ url('proyectos') }}" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                Proyectos
            </a>
            @endif
            @endif
            @if (Auth::check())
            <a class="navbar-brand" href="{{ url('tareas') }}" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                Tareas
            </a>
            @endif
            @if (Auth::check())
            @if (Auth::user()->rol == "Admin")
            <a class="navbar-brand" href="{{ url('users') }}" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                Users
            </a>
            @endif
            @endif
            @if (Auth::check())
            @if (Auth::user()->rol == "Admin" || Auth::user()->rol == "Gestor")
            <div class="dropdown">
                <button class="btn navbar-brand dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                    Calculadora
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #0159A1;">
                    <li><a class="dropdown-item" href="{{ url('calculadora') }}" style="color: white;">Estimación</a></li>
                    <li><a class="dropdown-item" href="{{ url('resultados') }}" style="color: white;">Resultados</a></li>
                </ul>
            </div>
            <!-- <a class="navbar-brand" href="{{ url('calculadora') }}" style="color: white; text-decoration: none; padding: 21px; transition: background-color 0.3s;">
                Calculadora
            </a> -->
            @endif
            @endif
            <!-- <a href="#" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">
                <img src="icono.png" alt="Icono" style="height: 20px; vertical-align: middle;">
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    <!-- @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif -->

                    @if (Route::has('register'))
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> -->
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 15%; opacity: 0.7;">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z" fill="#ffffff"></path>
                                </g>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
        </nav>

        <style>
            nav a:hover {
                background-color: rgba(0, 0, 0, 0.2);
            }
        </style>



        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>