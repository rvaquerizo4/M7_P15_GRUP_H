<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app() -> getLocale() ) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content-area')
        </div> 
    </body>
</html>