@extends('layout')

@section('content')
    
    <div class='games_list_container'>
        @foreach($games as $game)
            <div class="ui card">
                <div class="content">
                    <div class="right floated meta">14h</div>
                    <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
                </div>
                <div class="content">
                    <div class="header">{{ $game['name'] }}</div>
                </div>
                <div class="image">
                    <img src="{{ asset('images/games/'. $game['image']) }}" />
                </div>
                <div class='content'>{{ $game['description'] }}</div>
                <div class="content">
                    <span class="right floated">
                        <i class="heart outline like icon"></i>
                        17 likes
                    </span>
                    <i class="comment icon"></i>
                    3 comments
                </div>
                <div class="extra content">
                    <div class="ui large transparent left icon input">
                        <i class="heart outline icon"></i>
                        <input type="text" placeholder="Add Comment...">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection