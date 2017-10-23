@extends('layout')

@section('content')

    <center>
        <div class="ui compact menu">
            <a class="item">
                <i class="gamepad icon"></i>
                Jeux
            </a>
            <a class="item">
                <i class="video camera icon"></i>
                Evévénements
            </a>
        </div>
    </center>

    <ul class='games_list_container'>
        @foreach($games as $game)
            <li class="ui card">
                <div class="content">
                    <div class="right floated meta" style='padding-top:3px'>{{ $game->whenCreatedForHuman() }}</div>
                    <img class="ui avatar image" src="{{ asset('images/users/'. $game->user->userPic()) }}" />
                    <a href="{{ route('focus_user', ['id' => $game->user->id]) }}">
                        {{ $game->user->firstName }} <b>{{ $game->user->lastName }}</b>
                    </a>
                </div>
                <div class="content">
                    <div class="header">{{ $game->name }}</div>
                </div>
                <div class="image">
                    <img src="{{ asset('images/games/'. $game->image) }}" />
                </div>
                <div class='content'>{{ $game->description }}</div>
                <div class="content">
                    <span class='right floated'>
                        <div class="ui mini star rating">
                            <i class="star icon active"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                            <i class="star icon"></i>
                        </div>
                    </span>
                    <i class="comment icon"></i>
                    3 comments
                </div>
                {{--  <div class="extra content">
                    <div class="ui large transparent left icon input">
                        <i class="heart outline icon"></i>
                        <input type="text" placeholder="Add Comment...">
                    </div>
                </div>  --}}
            </li>
        @endforeach
    </ul>

@endsection
