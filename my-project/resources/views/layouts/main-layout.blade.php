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
         <!-- Tailwind CSS Link -->
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

        <!-- Fontawesome Link -->
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="bg-gray-100">

     <nav class="h-16 flex justify-content py-4 px-16">
        <a href="{{ route('pelicula') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Peliculas</a>
        <a href="{{ route('create') }}" class="text-white hover:bg-blue-600 rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2">Create</a>
     </nav>
        
     <div class="container-fluid p-16 flex justify-content">
        @yield('content')
    </div> 
    </body>
</html>

