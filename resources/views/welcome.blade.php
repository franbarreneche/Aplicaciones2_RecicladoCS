<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Icons -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" defer></script>
    <style>
        .hero {
            background-image: url("img/fondo.svg");
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .image {
            width: 20rem;
        }
    </style>
</head>
<body>


  <section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-left">
            <figure class="image mb-4">
                <img src="{{asset('img/logo.svg')}}" >
            </figure>
            <p class="title has-text-primary">
                Recicla lo que <em>quieras</em>.
            </p>
            <div class="buttons">
                <a class="button is-primary is-outlined is-large" href="https://github.com/franbarreneche/Aplicaciones2_RecicladoCS">
                    <span class="icon">
                    <i class="fab fa-github"></i>
                    </span>
                    <span>GitHub</span>
                </a>
                <a class="button is-primary is-large" href="{{route('login')}}">Entrar</a>
            </div>
        </div>
    </div>
  </section>
</body>
</html>
