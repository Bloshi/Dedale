@extends('layout')

@section('content')

    @foreach($games as $game)
        {{ $game->name }}
    @endforeach

@endsection