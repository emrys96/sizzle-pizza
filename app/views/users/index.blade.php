@extends('layouts.default')


@section('content')


<div class="container">

	
	<h1><font face="Calibri" color="white">Personal Information </font></h1>
	<br>
  <div class="panel">

    <div class="container">
    <div class="row">

         
            <div class="col-md-4">  
            <br>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                    <center><img src="../images/zayn.jpg" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center>
                </tr>
                
                <tr>
                  <center> ID: 100123 </center>
                </tr>
                <tr>
                    <td></td>
                    <td>ID</td>
                    <td>Name</td>
                </tr>
              </thead>

              <tbody>
                  
                      @foreach($users as $user)
                        <tr>
                          <td>  </td>
                          <td> {{$user->id}} </td>
                          <td> {{$user->name}} </td>
                        </tr>
                      @endforeach
                    

              </tbody>
            </table>
            </div>
          
        

        <br>
          <div class="col-md-5 col-md-offset-1">
               <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                    <td><center><img src="../images/addorder.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center></td>
                    <td></td>
                    <td><center><img src="../images/changeinfo.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center></td> 
                </tr>

                 <tr>
                    <td><center><img src="../images/orderhistory.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center></td>
                    <td></td>
                    <td><center><img src="../images/zayn.jpg" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center></td> 
                </tr>
                
              </thead>

          
            </table>
          </div>
       
	
    </div>
  </div>
</div>
</div>




@stop