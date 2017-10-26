@extends('layout')

@section('content')

    <div class="user_header ui grid">
        <div class="four wide column">
            <center>
                <img class="ui small circular image drop_shadow"
                    src="{{ asset('images/users/'. $user->userPic()) }}"
                    alt="{{ $user->firstName }} {{ $user->lastName }} | Playpal"
                />
                <h3>{{ $user->firstName }} {{ $user->lastName }}</h3>
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
            </center>
        </div>
        <div class="twelve wide column">
            <div class="ui statistics">
                <a href='#' class="statistic">
                    <div class="label">Badges</div>
                    <div class="value">{{ $howManyAchievements }}</div>
                </a>
                <a href='#' class="statistic">
                    <div class="label">Likes</div>
                    <div class="value">{{ $howManyLikes }}</div>
                </a>
                <a href='#' onclick="event.preventDefault();
                        $('.open_followers_list').modal('show');"  
                    class="statistic">
                    <div class="label">Abo.</div>
                    <div class="value">{{ $howManyFollowers }}</div>
                </a>
                <a href='#' class="statistic">
                    <div class="label">Posts</div>
                    <div class="value">{{ $howManyPosts }}</div>
                </a>
            </div><!-- .ui.statistics -->

            <div class="content _btn">
                @if (!$isAuthUserPage)
                    @if (!$isFollowing)
                        <div
                            onclick="location.href = '{{ route('follow_this_user', ['id' => $user->id]) }}'"
                            class="ui labeled button" tabindex="0">
                            <div class="ui primary button">
                                <i class="add user icon"></i> Suivre
                            </div>
                    @else
                        <div 
                            onclick="location.href = '{{ route('follow_this_user', ['id' => $user->id, 'type' => 'cancel']) }}'"
                            class="ui labeled button" tabindex="0">
                            <div class="ui red button">
                                <i class="add user icon"></i> Ne plus suivre
                            </div>
                    @endif
                            <a class="ui basic left pointing label {{ !$isFollowing ? 'primary' : 'red' }}">
                                {{ $howManyFollowers }}
                            </a>
                        </div>
                @else
                    <a href="{{ route('auth.edit_profil') }}" class="ui labeled icon button">
                        <i class="edit icon"></i> Editer votre profil
                    </a>
                @endif
            </div>            

        </div>
    </div>

    <section class="content _game">
        <h4 class="ui horizontal divider">Dernier(s) jeu(x) posté</h4>
        @if($games != null)        
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
        @else
            @if (!$isAuthUserPage)
                <center><span class="text_mention_empty">L'utilsateur n'a pas encore posté de jeu</span></center>
            @else
                <center><span class="text_mention_empty">Il semblerait que vous n'avez pas encore posté de jeu</span></center>
                @if(Auth::user()->type != 2)
                    <br>
                    <center><a href="{{ route('become.pro') }}" class="ui button primary">Devenir pro maintenant</a></center>
                @else
                    <br>
                    <center><a href="{{ route('pro.add_event') }}" class="ui button primary">J'ajoute mon premier jeu</a></center>
                @endif
            @endif
        @endif
    </section>

    <section class="content _event">
        <h4 class="ui horizontal divider">Ses Evénements</h4>
        @if($events != null)
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
        @else
            @if (!$isAuthUserPage)
                <center><span class="text_mention_empty">L'utilsateur n'a pas encore posté d'événement</span></center>
            @else
                <center><span class="text_mention_empty">Il semblerait que vous n'avez pas encore posté d'événement</span></center>
                @if(Auth::user()->type != 2)
                    <br>
                    <center><a href="{{ route('become.pro') }}" class="ui button primary">Devenir pro maintenant</a></center>
                @else
                    <br>
                    <center><a href="{{ route('pro.add_event') }}" class="ui button primary">J'ajoute mon premier événement</a></center>
                @endif
            @endif
        @endif
    </section>

    {{--  Modals  --}}
    @include('user/modal/followers')

@endsection
