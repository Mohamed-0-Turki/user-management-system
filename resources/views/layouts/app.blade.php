<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="">
        @include('layouts.navbar')
        @include('layouts.messages')
        @yield('contant')
        @include('layouts.footer')
        @livewireScripts
    </body>
</html>
