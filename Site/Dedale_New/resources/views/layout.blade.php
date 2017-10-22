<?php
    header("Access-Control-Allow-Origin: *");
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Playpal</title>

        <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}" />
        <style>
            @font-face {
                font-family: 'Icons';
                src: url("{{ asset('fonts/icons/icons.eot') }}");
                src: url("{{ asset('fonts/icons/icons.eot?#iefix') }}") format('embedded-opentype'),
                    url("{{ asset('fonts/icons/icons.woff2') }}") format('woff2'),
                    url("{{ asset('fonts/icons/icons.woff') }}") format('woff'),
                    url("{{ asset('fonts/icons/icons.ttf') }}") format('truetype'),
                    url("{{ asset('fonts/icons/icons.svg#latobold') }}") format('svg');
                font-weight: normal;
                font-style: normal;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    </head>
    <body>
        <div class='ui container'>
            <nav class="ui secondary pointing menu">
                <a class='logo_nav' href="{{ route('home') }}">
                    <img src="{{ asset('logo/logo2.svg') }}" />
                </a>
                <a class="item" href="{{ route('home') }}">Accueil</a>

                @auth
                    <a class="item" href="{{ route('feed', ['param' => 'game']) }}">File d'acutalité</a>
                @endauth

                <div class="right menu">
                    @guest
                        <a class='item' href="{{ route('login') }}">Login</a>
                        <a class='item' href="{{ route('register') }}">Register</a>
                    @else
                        <div class='item'>
                            <!-- si notif <i class="alarm icon"></i>-->
                            <i class="alarm outline icon"></i>
                        </div>
                        <div class="ui item dropdown">
                            <div class="text">{{ Auth::user()->firstName }} <b>{{ Auth::user()->lastName }}</b></div>
                            <i class="dropdown icon"></i>

                            <div class="menu">
                                <div class='item'><a href='#'>Profile</a></div>
                                <div class='item'><a href='#'>Devenir pro</a></div>
                                <div class='item'>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </nav>

            <main>
                @yield('content')
            </main>  
        </div>
        

        <script src='{{ asset("js/lib/semantic.min.js") }}'></script>
        <script src='{{ asset("js/main.js") }}'></script>
    </body>
</html>