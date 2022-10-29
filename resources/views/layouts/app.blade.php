<!doctype html>
<html data-theme="cupcake" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>
<body>
<div id="app">
<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{route("visualizar")}}">Agregar Platillos</a></li>
                <li><a href="{{route('visualizar/menu')}}">Ver mi menu</a></li>
                @can('ver.tablas')
                    <li><a href="{{route('visualizar/tables')}}">Ver tablas</a></li>
                @endcan
                @can('ver.menus')
                    <li><a href="{{route('visualizar/menu')}}">Ver menu</a></li>
                @endcan
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost normal-case text-xl" href="{{ url('/') }}" >DG Menu</a>
    </div>
    <div class="navbar-end items-center">
           <div>
               @guest
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de Sesion') }}</a>
                   </li>
                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                       </li>
                   @endif
               @else
                   <li>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           {{ __('Cerrar Sesion') }}
                       </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </li>
               @endguest
           </div>
    </div>
</div>
    <div class="">
        @yield('content')
    </div>
</div>
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    DG Menu--}}
{{--                </a>--}}

{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}


{{--    </div>--}}
    @livewireScripts
</body>
</html>
