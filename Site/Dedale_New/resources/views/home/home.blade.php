@extends('layout')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <br/>
    
    <div class="mainlogo_homepage">
        @include('inc/main_logo')
    </div>

    <center><h1>Bienvenue sur PLayPal</h1></center>
    <center><p style='text-align:center'>Site de jeu de société social</p></center>
    <br>
    <center><a class='ui button primary big' href="{{ route('login') }}">Creer un compte gratuit</a></center>
    <br>

@endsection