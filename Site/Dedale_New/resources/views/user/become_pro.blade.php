@extends('layout')

@section('content')

    <div class="block_step_order">
        <div class="screen_order_step _option" style='width:100%'>
            <br/>
            <center>cette page est en contruction</center>
            <br/>
            <br/>
        </div>

        <div class="ui steps">
            <div class="step">
                <i class="settings icon"></i>
                <div class="content">
                <div class="title">Options</div>
                <div class="description">Choisir ses option</div>
                </div>
            </div>
            <div class="active step">
                <i class="payment icon"></i>
                <div class="content">
                <div class="title">Information de payement</div>
                <div class="description">Quel méthode de payement choissez vous</div>
                </div>
            </div>
            <div class="disabled step">
                <i class="info icon"></i>
                <div class="content">
                <div class="title">Confirmer l'achat</div>
                </div>
            </div>
        </div>
    </div>

@endsection