<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')

        <style>
            .nav-transition{
                display: block;
                transition:100 ease-out;
            }
        </style>

        @stack('css')
        <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>

    </head>
    <body >
        
        @include('navigation.header')
        <div id="content-body" class="min-h-full mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

            @yield('content')

        </div>
        

        @include('navigation.footer')
    </body>

    

</html>

@stack('js')
<script src="https://kit.fontawesome.com/f76d1c2867.js" crossorigin="anonymous"></script>
