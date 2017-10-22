@extends('layout')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    tu es connecé en tant qu'admin

@endsection