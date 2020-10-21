<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wire</title>

        <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
        @livewireStyles
        
    </head>
    <body class="antialiased">
        @yield('content')
        @livewireScripts
        
    </body>
</html>
