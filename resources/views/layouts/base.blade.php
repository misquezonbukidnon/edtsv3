<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

        <title>@yield('title') - {{ config('app.name') }}</title>
        @else
        <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles
        @powerGridStyles
        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        





        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>

    <body class="h-full">

        @yield('body')

        @livewireScripts

        @powerGridScripts

    </body>



</html>