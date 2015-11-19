 @extends('layouts.default')


@section('content')


  <div class="container">
    <div class="col-md-5 col-md-offset-">
 <div class="form-group">

                                              {{ Form::open(array('url' => 'users')) }}

                                                              <fieldset>
                                                          <div class="form-group">
                                                           <label for="name">Name</label>
                                                            <input class="form-control" id="username" placeholder="Full Name" name="name" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="addreess">Address</label>
                                                          <input class="form-control" id="userAddr" placeholder="Address" name="address" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="birthdate">Birthdate</label>
                                                          <input class="form-control" id="userBday" placeholder="Birthdate" name="birthdate" type="date">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="contact">Contact No.</label>
                                                          <input class="form-control" id="userCN" placeholder="Contract No." name="contactno" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="username">Username</label>
                                                          <input class="form-control" id="username" placeholder="Username" name="username" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="password">Password</label>
                                                          <input class="form-control" id="userpass" placeholder="Password" name="userpass" type="password" maxlength="20">
                                                        </div>
                                                        
                                                        
                                                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
                                                      </fieldset>
                                                    
                                                 {{ Form::close() }}
    </div>
  </div>
@stop