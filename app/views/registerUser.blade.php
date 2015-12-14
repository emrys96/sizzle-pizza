 @extends('layouts.admin')


@section('content')


  <div class="container">
    <center><font color="white"> <h1>Add User</h1> </font>  </center>
    <br>
    <br>
    <div class="col-md-5 col-md-offset-3">
       <div class="form-group">

                                              {{ Form::open(array('url' => 'users')) }}

                                                              <fieldset>
                                                          <div class="form-group">
                                                           <font color="white" size="3"><label for="name">Name</label></font>
                                                            <input class="form-control" id="username" placeholder="Full Name" name="name" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <font color="white" size="3"><label for="addreess">Address</label></font>
                                                          <input class="form-control" id="userAddr" placeholder="Address" name="address" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <font color="white" size="3"><label for="birthdate">Birthdate</label></font>
                                                          <input class="form-control" id="userBday" placeholder="Birthdate" name="birthdate" type="date">
                                                        </div>

                                                        <div class="form-group">
                                                          <font color="white" size="3"><label for="contact">Contact No.</label></font>
                                                          <input class="form-control" id="userCN" placeholder="Contract No." name="contactno" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <font color="white" size="3"><label for="username">Username</label></font>
                                                          <input class="form-control" id="username" placeholder="Username" name="username" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <font color="white" size="3"><label for="password">Password</label></font>
                                                          <input class="form-control" id="userpass" placeholder="Password" name="userpass" type="password" maxlength="20">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <font size="3" color="white">{{ Form::label('role', 'Role:')}}</font>
                                                            <font size="3" color="black">
                                                              <select id="role" name="role">
                                                                <option value="admin">Admin</option>
                                                                <option value="customer">Customer</option>
                                                                <option value="cashier">Cashier</option>
                                                              </select>
                                                            </font>
                                                        </div>
                                                        
                                                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
                                                      </fieldset>
                                                    
                                                 {{ Form::close() }}
    </div>
  </div>
@stop