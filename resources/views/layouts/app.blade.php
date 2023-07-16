<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @if (isset($header))
                {{ $header }}
            @else 
                {{ config('app.name', 'Art') }}
            @endif
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="website">
            @include('layouts.navigation')

            <div class="website-content container">
                <div class="website-aside">
                    @include('layouts.aside')
                </div>

                <div class="website-page">
                    @if(Session::has('info'))
                        @include('my-components.notification')                 
                    @endif

                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>

        </div>
    </body>
</html>
