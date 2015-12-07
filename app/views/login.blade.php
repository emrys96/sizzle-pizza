

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sizzle Order Pizza Online</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    

     <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="../images/background.jpg">
    <h1></h1>

    
    <img class="center-block" src="../images/logo.png" name="logo" width="831" height="420" id="logo">


    
<div class="container">
    <div class="row">
       <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#modal-2"><font face="Supercell-magic">Enter</font></button>
                  
       </div> 
    </div>

</div>



            <div class="container">
              <div class="row">
               
                  <div class="modal fade" id="modal-2">
                        <div class="modal-dialog modal-lg">
                          <div class="col-md-6 col-md-offset-3">
                            <div class="modal-content">
                               <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h3 class="modal-title">Login</h3>
                               </div>
                      <div class="modal-body">       
                         
                            <div class="form-group">
                           {{ Form::open(array('url' => 'login')) }}
                              <label for="username">Username</label>
                              <input class="form-control" id="username" placeholder="Username" name="logUser" type="text">
                                </div>
                                <div class="form-group">
                                  <label for="userpass">Password</label>
                                  <input class="form-control" id="userpass" placeholder="Password" name="logPass" type="password" maxlength="20">
                                </div>
                                <div class="form-group"> 
                                    <p>No account yet? <a data-toggle="modal" data-target="#modal-1"> Register here. </a> </p>  

                                      
                                </div>
                                
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
                          {{ Form::close() }}                              
                         
                     </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        
  




<!-- Modal Section -->
                                
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

                                                        <div class="form-group">
                                                          {{ Form::hidden('role', 'customer') }}
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


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body>
</html>