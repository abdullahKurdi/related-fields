<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <main class="py-4">
                @include('partial/flash')
                @yield('content')
            </main>
        </div>


    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('script')
    <script>
        $(function(){
            $('#session-alert').fadeTo(5000,500).slideUp(500,function (){
                $('#session-alert').slideUp(500);
            });
        })
    </script>
</body>
</html>
