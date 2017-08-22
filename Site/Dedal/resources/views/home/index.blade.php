@extends('layout')

@section('content')

    <h1 class='h1'>Administration</h1>

    {!! Form::open(['url' => route('signToAdmin'), 'class' => 'login']); !!}

        <legend>Zone administration</legend>

        <div class='form-group'>
            <label for="password">Mot de passe</label>
            {!! Form::password('password',  ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'password']); !!}
        </div>

        <button class="btn btn-primary" type='submit'>
            <span>Se connecter</span>
        </button>

    {!! Form::close(); !!}

@endsection
