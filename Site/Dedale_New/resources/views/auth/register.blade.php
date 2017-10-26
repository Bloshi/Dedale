@extends('layout')

@section('content')

    <div class='form_container'>
        <div class="ui attached message">
            <div class="header">
                Bienvenue sur <b>PlayPal</b>
            </div>
            <p>Remplisser le formulaire pour vous enregistrer</p>
        </div>
        
        {!! Form::open(['url' => route('register'), 
            'enctype' => 'multipart/form-data', 'files' => true,
            'class' => 'ui form attached fluid segment'
        ]) !!}
            <label>Nom</label>
            <div class="fields">
                <div class="eight wide field{{ $errors->has('firstName') ? ' error' : '' }}">
                    {!! Form::text('firstName', old('firstName'), [
                        'placeholder' => 'Prénom', 'required' => 'required'
                    ]) !!}
                </div>
                <div class="seven wide field{{ $errors->has('lastName') ? ' error' : '' }}">
                    {!! Form::text('lastName', old('lastName'), [
                        'placeholder' => 'Nom de famille', 'required' => 'required'
                    ]) !!}
                </div>
                <div class="five wide field{{ $errors->has('birthday') ? ' error' : '' }}">
                    {!! Form::text('birthday', old('birthday'), [
                        'placeholder' => '20/11/1990', 'required' => 'required'
                    ]) !!}
                </div>
            </div>
            @if ($errors->has('firstName') || $errors->has('lastName') || $errors->has('birthday'))
                <div class="ui error message">
                    <p>{{ $errors->first('firstName') }}</p>
                    <p>{{ $errors->first('lastName') }}</p>
                    <p>{{ $errors->first('birthday') }}</p>
                </div>
            @endif
            
            <div class="field{{ $errors->has('email') ? ' error' : '' }}">
                <label for='sign_email'>Votre email</label>
                {!! Form::text('email', old('email'), ['id' => 'sign_email', 'required' => 'required']) !!}
            </div>
            @if ($errors->has('email'))
                <div class="ui error message">
                    <p>{{ $errors->first('email') }}</p>
                </div>
            @endif
            
            <div class="field{{ $errors->has('address') ? ' error' : '' }}">
                <label for='sign_address'>Votre adresse complète</label>
                {!! Form::text('address', old('address'), ['id' => 'sign_address']) !!}
            </div>
            @if ($errors->has('address'))
                <div class="ui error message">
                    <p>{{ $errors->first('address') }}</p>
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

            <div class="field{{ $errors->has('password') ? ' error' : '' }}">
                <label for='sign_conf_password'>Confirmez votre mot de passe</label>
                {!! Form::password('password_confirmation', null, ['id' => 'sign_conf_password']) !!}
            </div>

            <div class="inline fields">
                <label>Quel est votre sexe ?</label>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="gender" value='0' checked="checked">
                        <label>Je ne sais pas j'ai pas regardé</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="gender" value='1'>
                        <label>Masculin</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="gender" value='2'>
                        <label>Féminin</label>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="image_user">Ajouter une photo ?</label>
                {!! Form::file('image', ['id' => 'image_user']) !!}
                <small>Il est préférable de mettre une photo de vous carrée</small>
            </div>

            {!! Form::hidden('type', 0) !!}

            <button class="ui submit primary button">Se connecter</button>
        {!! Form::close() !!}
        
        <div class="ui bottom attached warning message">
            <i class="icon help"></i>
            Vous avez déjà un compte ? <a href="{{ route('login') }}">Se connecter</a>
        </div>
    </div>

@endsection
