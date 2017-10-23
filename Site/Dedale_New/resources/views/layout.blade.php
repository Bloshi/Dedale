<?php
    header("Access-Control-Allow-Origin: *");
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('inc/meta')
    <body>
        <div class='ui container'>
            @include('inc/nav')

            <main>
                @yield('content')
            </main>
        </div>


        <script src='{{ asset("js/lib/semantic.min.js") }}'></script>
        <script src='{{ asset("js/main.js") }}'></script>
    </body>
</html>
