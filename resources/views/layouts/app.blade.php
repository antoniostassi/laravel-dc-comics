<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js']) <!-- Import utilizzo di sass -->
    </head>
    <body>
        <main>
            @yield('main_content')
        </main>
    </body>
</html>