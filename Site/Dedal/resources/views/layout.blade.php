<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Document</title>

        @include('inc/meta')

        <link rel="stylincesheet" href="{{ asset('css/style.css') }}" />
        <script src='{{ asset("js/lib/jquery-3.2.1.min.js") }}'></script>
    </head>
    <body>
        
        <section class="content">
            @yield('content')
        </section>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>