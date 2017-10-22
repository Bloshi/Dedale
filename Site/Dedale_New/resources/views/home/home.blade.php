@extends('layout')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Bienvenue sur PLayPal</h1>
    <p>Site de jeu de société social</p>

@endsection