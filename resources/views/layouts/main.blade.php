<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        {{-- Header --}}
        @include('partials.header')
        {{-- /Header --}}

        {{-- Main - Film --}}
        @include('partials.main')
        {{-- /Main - Film --}}
        
    </body>
</html>