@extends('layout')

@section('content')

    <center>
        <div class="ui compact menu">
            <a class="item {{ $whatFeed == 'game' ? 'active' : '' }}" href="{{ route('feed', ['type' => 'game']) }}">
                <i class="gamepad icon"></i>
                Jeux
            </a>
            <a class="item {{ $whatFeed == 'event' ? 'active' : '' }}" href="{{ route('feed', ['type' => 'event']) }}">
                <i class="video camera icon"></i>
                Evénements
            </a>
        </div>
    </center>

    @if($whatFeed == 'game')
        @include('feed/feed_game')
    @else
        @include('feed/feed_event')
    @endif

@endsection
