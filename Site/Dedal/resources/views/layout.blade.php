<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Document</title>

        @include('inc/meta')

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <script src='{{ asset("js/lib/jquery-3.2.1.min.js") }}'></script>
        <script src='{{ asset("js/lib/tether.min.js") }}'></script>
        <script src='{{ asset("js/lib/bootstrap.min.js") }}'></script>
    </head>
    <body>

        <section class="content">
            @yield('content')
        </section>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
