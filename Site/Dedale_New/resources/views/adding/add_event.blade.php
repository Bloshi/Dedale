@extends('layout')

@section('content')

    <h2>Ajouter un événement</h2>

    {!! Form::open(['url' => route('pro.post_event'), 'class' => 'ui form',
        'enctype' => 'multipart/form-data', 'files' => true
    ]) !!}

        <div class="field">
            <label for="event_title">Titre de l'événement</label>
            {!! Form::text('title', null, ['id' => 'event_title']) !!}
        </div>

        <div class="field">
            <label for="event_description">Description</label>
            {!! Form::textarea('description', null, ['id' => 'event_description']) !!}
        </div>

        <div class="field">
            <select name="game_id" class="ui search dropdown">
                <option value="">Vos jeux pour l'événement</option>
                @foreach($gameCreatedByUser as $game)
                    <option value="{{ $game->id }}">
                        {{ $game->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="ui grid">
            <div class="field eight wide column">
                <label for="event_start_date">Date et heures de début</label>
                <div class="two fields">
                    <div class="field">
                        {!! Form::date('date_start', null, ['id' => 'event_start_date', 
                            'placeholder' => Date::now('Europe/Brussels')->format('d/m/Y')]) !!}
                    </div>
                    <div class="field">
                        {!! Form::time('hour_start', Date::now('Europe/Brussels')->format('H:m')) !!}
                    </div>
                </div>
            </div>
            <div class="field eight wide column">
                <label for="event_end_date">Date et heure de fin</label>
                <div class="two fields">
                    <div class="field">
                        {!! Form::date('date_end', null, ['id' => 'event_end_date', 
                            'placeholder' => Date::now('Europe/Brussels')->format('d/m/Y')]) !!}
                    </div>
                    <div class="field">
                        {!! Form::time('hour_end', Date::now('Europe/Brussels')->addHour(2)->format('H:m')) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <label for="event_place">Adresse</label>
            {!! Form::text('place', null, ['id' => 'event_place']) !!}
        </div>

        <div class="field">
            <div class="ui checkbox">
                {!! Form::checkbox('public', null, ['id' => 'event_public', 'checked']) !!}
                <label for='event_public'>Cet événement sera public</label>
            </div>
        </div>

        <div class="field">
            {!! Form::file('image') !!}
        </div>

        {!! Form::hidden('organisation', null) !!}

        <button class="ui button primary" type='submit'>Ajouter l'événement</button>

    {!! Form::close() !!}

@endsection