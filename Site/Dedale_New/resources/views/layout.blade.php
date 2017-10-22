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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
        <script src='{{ asset("js/lib/semantic.min.js") }}'></script>
    </head>
    <body>
        <div class='ui container'>
            <div class="ui secondary pointing menu">
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
                        <div class="ui item dropdown">
                            <div class="text">{{ Auth::user()->name }}</div>
                            <i class="dropdown icon"></i>

                            <div class="menu">
                                <div class='item'>
                                    <a href=''>Devenir pro</a>
                                </div>
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
            </div>

            <main>
                @yield('content')
            </main>  
        </div>
        

        <script src='{{ asset("js/main.js") }}'></script>
    </body>
</html>