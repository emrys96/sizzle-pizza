@extends('layouts.default')

@section('content')

<h1>Edit {{ $user->name }}</h1>

{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name: ') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contact_no', 'Contact No.:') }}
        {{ Form::text('contact_no', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('bday', 'Birthdate: ') }}
        {{ Form::text('bday', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('username', 'Username: ') }}
        {{ Form::text('username', null, array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('password', 'Password: ') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>

   <!--  <div class="form-group">
        {{ Form::label('password', 'Password: ') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>
 -->


    {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



@stop