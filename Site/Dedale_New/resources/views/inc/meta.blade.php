<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Playpal</title>

    <!--
        tu es curieux ? - playpal.be/unlock/achievement/curiosity

        Team : BloshiCorp -  http://bloshicorp.be
        Developer : Maxime Bartier -  http://bartier-maxime.be <poulycroc.studio@gmail.com>
        
        Framework css : Semantic ui - https://semantic-ui.com
        Framework php : Laravel - https://laravel.com/
        Image user source : Anna Litviniuk - https://www.iconfinder.com/Naf_Naf 
    -->

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
