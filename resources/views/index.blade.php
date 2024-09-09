<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout.headTags')
        <title>A</title>

        <!-- Fonts -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @stack('style') 
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @stack('scrypt')
    </head>
    @include('layout.header')
    <body>
        @yield('content')
    </body>
    @include('layout.footer')

     
</html>