@extends('layouts.default')

@section('content')


<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <font color="white" size="4"><h1>Edit Account</h1></font>  

        <font size="3">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#editinfo" role="tab" data-toggle="tab">Edit Personal Information</a></li>
            <li><a href="#changepass" role="tab" data-toggle="tab">Change Password</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="editinfo">

        {{ Form::open(array('url' => '/profileSaveChanges/' . Auth::user()->id,
            'autocomplete' => 'off',
            'class' => 'form-horizontal'
            )) }}
            <br>
            <div class="form-group">
                <font color="white"> {{ Form::label('fname', 'Full Name') }} </font>
                {{ Form::text('name',Auth::user()->name,array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                 <font color="white"> {{ Form::label('address', 'Address') }} </font>
                {{ Form::text('address', Auth::user()->address,array('class' => 'form-control')) }}
            </div>

             <div class="form-group">
                 <font color="white"> {{ Form::label('bday', 'Birthdate') }} </font>
                {{ Form::text('bday', Auth::user()->bday,array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                 <font color="white"> {{ Form::label('bday', 'Contact No:') }} </font>
                {{ Form::text('contactNo', Auth::user()->contact_no ,array('class' => 'form-control')) }}
            </div>

             <div class="form-group">
                 <font color="white"> {{ Form::label('username', 'Username') }} </font>
                {{ Form::text('username', Auth::user()->username,array('class' => 'form-control')) }}
            </div>
          
            <br>
            <center> {{ Form::submit('Update Profile', array('class' => 'btn btn-primary')) }} </center>
            {{ Form::close() }}
            </div>

            <div class="tab-pane" id="changepass">
            {{ Form::open(array('url' => '/profilechangepass/' . Auth::user()->id,
            'autocomplete' => 'off',
            'class' => 'form-horizontal'
            )) }}
            <br>
            <div class="form-group">
                 <font color="white"> {{ Form::label('password', 'Current Password') }} </font>
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                 <font color="white"> {{ Form::label('newpassword', 'New Password') }} </font>
                {{ Form::password('newpassword', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                 <font color="white"> {{ Form::label('confirm', 'Confirm Password') }} </font>
                {{ Form::password('confirm', array('class' => 'form-control')) }}
            </div>
            
            <br>
            <center> {{ Form::submit('Change Password', array('class' => 'btn btn-primary')) }} </center>
            {{ Form::close() }}
            </div>
        </div>
        </font>
    </div>
    
</div>



@stop