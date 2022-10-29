<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a text-white href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="hero min-h-screen" style="background-image: url(https://api.lorem.space/image/burger?w=1000&h=800);">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md"  >
                            <p class="mb-5" style="font-size: 20px">La mejor red social es una mesa llena de buena comida y rodeada de personas que quieres.</p>
                            <h1 class="mb-5 font-bold" style="font-size: 100px">DC Menu</h1>
                            <p class="mb-5">Crea el menú personalizado para tu restaurante de una forma muy facil, utiliza nuestros formularios para que tus clientes se degusten con tu menú.</p>

                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
