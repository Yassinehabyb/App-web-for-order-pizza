<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PizzaHouse</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/main.scss' , 'resources/js/app.js'])

    </head>
    <body>

        @yield('content')

        <footer>
            <p>Copyright 2024 Oussama's Projects</p>
        </footer>
    </body>
</html>
