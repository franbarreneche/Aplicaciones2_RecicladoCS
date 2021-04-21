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
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }
            .app {
                flex:1;
            }
        </style>
    </head>
    <body>
        <x-navbar />
        <section class="section has-background-light app">
            <div class="container">
                <x-notification />
                @yield('content')
            </div>
        </section>
        <footer class="has-background-link has-text-light p-4">
            <div class="content has-text-centered">
              <p>Desarrollado por el grupo 3 para la cátedra Aplicaciones II - <strong class="has-text-light">UPSO</strong> - 2021</p>
            </div>
          </footer>

        <script>
            document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

                });
            });
            }

            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                const $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
                });
            });
            });
        </script>
    </body>
</html>

