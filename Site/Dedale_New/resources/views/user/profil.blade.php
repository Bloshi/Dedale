@extends('layout')

@section('content')

    <div class="user_header ui grid">
        <div class="four wide column">
            <center>
                <img class="ui small circular image" 
                    src="{{ asset('images/users/'. $user->userPic()) }}"
                    alt="{{ $user->firstName }} {{ $user->lastName }} | Playpal"
                />
                <h3>{{ $user->firstName }} {{ $user->lastName }}</h3>
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
            </center>
        </div>
        <div class="twelve wide column">
            
        </div>
    </div>

    @if($games != null)
        <h4 class="ui horizontal divider">Dernier(s) jeu(x) posté</h4>

        <ul class='feed_game_user_page'>
            @foreach($games as $game)
                <li class="ui card">
                    <div class="content">
                        <div class="header">{{ $game->name }}</div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/games/'. $game->image) }}" />
                    </div>
                    {{--  <div class='content'>{{ $game->description }}</div>  --}}
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
                </li>
            @endforeach
        </ul>
    @endif

    @if($events != null)
        <h4 class="ui horizontal divider">Ses Jeux</h4>

        <ul class='feed_event_user_page ui feed'>
            @foreach($events as $event)
                <li class="event">
                    <div class="label">
                        <img src="{{ asset('images/users/'. $event->user->userPic()) }}" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                {{ $event->user->firstName }} {{ $event->user->lastName }}
                            </a> {{ $event->title }}
                            <div class="date">
                                {{ $event->whenCreatedForHuman() }}
                            </div>
                        </div>
                        <div class="extra images">
                            <img src="{{ asset('images/events/'. $event->image) }}" />
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 4 Likes
                            </a>
                        </div>
                    </div><!-- .content -->
                </li>
            @endforeach
        </ul>
    @endif 



@endsection