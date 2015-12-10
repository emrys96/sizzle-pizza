@extends('layouts.admin')


@section('content')
<div class="container">
  <font size="3" color="white">
  <nav class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ URL::to('users') }}">Users</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="{{ URL::to('users') }}">View All Users</a></li>
    <li><a href="{{ URL::to('users/create') }}">Add User</a>
  </ul>
  </nav>
  </font>
</div>


<div class="container">
    

    <div class="row">
      <br>
      <center><font size="5" color="white">User List</font></center>
      <br>
      <br>
      <div class="container"> 
    
      <div class="col-md-10 col-md-offset-1">   



              <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center"><strong>ID</strong></div></td>
                  <td><div align="center"><strong>Name</strong></div></td>
                  <td><div align="center"><strong>Address</strong></div></td>
                  <td><div align="center"><strong>Birthday</strong></div></td>
                  <td><div align="center"><strong>Actions</strong></div></td>
                 
                </tr>
               
                              
               @foreach($users as $user)               
               <tr>
                  <td><center> {{ $user->id }} </center></td>
                  <td><center> {{ $user->name }} </center></td>
                  <td><center> {{ $user->address }} </center></td>
                  <td><center> {{ $user->bday }} </center></td>
                  <td> <center> 
                        <a class="btn btn-success" href="{{ URL::to('/getProfile/' . $user->id) }}"><span class="glyphicon glyphicon-search"></span></a>
                        <a class="btn btn-warning" href="{{ URL::route('editprofile', array('user' => $user->id)) }}"><span class="glyphicon glyphicon-pencil "></span></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$user->id}}"><span class="glyphicon glyphicon-trash"></span></a> 
                       </center>
                  </td>
                  <div class="modal fade" id="myModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure you want to delete?: {{$user->id}}?</p>
                          <p>This cannot be undone.</p>
                        </div>
                        <div class="modal-footer">
                              {{ Form::open(array('url' => 'users/' . $user->id)) }}
                              
                                {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Yes', ['class' => 'btn btn-danger']) }}

                            <a type="button" class="btn btn-default" data-dismiss="modal">No</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>    
               </tr>
               @endforeach
    
      
      </div>
    </div>  
  </div>  


@stop