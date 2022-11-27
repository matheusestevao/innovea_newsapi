<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">

        <title>{{ $title ?? config('app.name') }}</title>
        
        @vite(['resources/js/app.js', 'resources/sass/app.scss', 'resources/css/style.css'])
    </head>

    <body>
        <x-header />

        <div class="container-fluid">
            <div class="row">
                <x-navigation />
                
                {{ $slot }}
            </div>
        </div>
    </body>
</html>