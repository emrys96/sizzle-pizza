  <div class="modal fade" id="modal-1">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Register</h3>
                                       </div>
                                       <div class="modal-body">
                                        
                                          <div class="form-group">

                                              {{ Form::open(array('url' => 'users')) }}

                                                              <fieldset>
                                                          <div class="form-group">
                                                           <label for="username">Name</label>
                                                            <input class="form-control" id="username" placeholder="Full Name" name="name" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="userpass">Address</label>
                                                          <input class="form-control" id="userAddr" placeholder="Address" name="address" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="userpass">Birthdate</label>
                                                          <input class="form-control" id="userBday" placeholder="Birthdate" name="birthdate" type="date">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="userpass">Contact No.</label>
                                                          <input class="form-control" id="userCN" placeholder="Contract No." name="contactno" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="userpass">Username</label>
                                                          <input class="form-control" id="username" placeholder="Username" name="username" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="userpass">Password</label>
                                                          <input class="form-control" id="userpass" placeholder="Password" name="userpass" type="password" maxlength="20">
                                                        </div>
                                                        <div class="form-group"> </div>
                                                        
                                                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
                                                      </fieldset>
                                                    
                                                 {{ Form::close() }}
                                              
                                                </div>  
                                             </div>

                                       <div class="modal-footer">
                                        <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a>
                                        
                                       </div>
                                    </div>
                                  </div>
                                </div>

