<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $header }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tailwindcss/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    </head>
    <body>
        <div class="w-full">
            @include('layouts.nav')
        </div>
        @yield('content')
        @include('layouts.footer')
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>