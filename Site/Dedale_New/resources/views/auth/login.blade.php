@extends('layout')

@section('content')
    <div class='form_container'>
        <div class="ui attached message">
            <div class="header">
                Vous connecter a votre compte <b>PlayPal</b>
            </div>
            <p>Remplisser le formulaire pour vous connecter</p>
        </div>

        {!! Form::open(['url' => route('login'), 'class' => 'ui form attached fluid segment']) !!}
            <div class="field{{ $errors->has('email') ? ' error' : '' }}">
                <label for='sign_email'>Votre email</label>
                {!! Form::text('email', old('email'), ['id' => 'sign_email']) !!}
            </div>
            @if ($errors->has('email'))
                <div class="ui error message">
                    <p>{{ $errors->first('email') }}</p>
                </div>
            @endif

            <div class="field{{ $errors->has('password') ? ' error' : '' }}">
                <label for='sign_password'>Votre mot de passe</label>
                {!! Form::password('password', null, ['id' => 'sign_password']) !!}
            </div>
            @if ($errors->has('password'))
                <div class="ui error message">
                    <p>{{ $errors->first('password') }}</p>
                </div>
            @endif

            <button class="ui submit primary button">Se connecter</button>

            <a class="btn btn-link" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
        {!! Form::close() !!}

        <div class="ui bottom attached warning message">
            <i class="icon help"></i>
            Vous n'avez pas encore de compte ? <a href="{{ route('register') }}">S'enregistrer</a>
        </div>
    </div>
@endsection
