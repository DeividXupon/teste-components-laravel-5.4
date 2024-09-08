<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout.headTags')
        <title>A</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        @stack('style') 
    </head>
    @include('layout.header')
    <body>
        @yield('content')
    </body>
    @include('layout.footer')
</html>