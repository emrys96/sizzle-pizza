@extends('layouts.default')

@section('content')

<h1>Showing {{ $user->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $user->name }}</h2>
        <p>
            <strong>Address:</strong> {{ $user->address }}<br>
            <strong>Contact:</strong> {{ $user->contact_no }} <br>
            <strong>Birthdate:</strong> {{ $user->bday }} <br>
            <strong>Username:</strong> {{ $user->username }}
        </p>
    </div>

@stop