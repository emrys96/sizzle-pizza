
@extends('layouts.default')

@section('content')



<div class="container">

	
	<h1><font face="Calibri" color="Black">Welcome, {{Auth::user()->username}}!</font></h1>
	<br>
  

    <div class="container">

    <div class="row">

         
            <div class="col-md-4">  
            <br>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                    <center><img src="../images/zayn.jpg" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></center>
                </tr>
                
               <br>
                
              </thead>

              <tbody>
                  		
                  		<tr>
                          <td>ID:  </td>
                          <td>143444</td>
                        </tr>

                        <tr>
                          <td>Name:  </td>
                          <td>Zayn Malik </td>
                        </tr>

                        <tr>
                          <td>Address:  </td>
                          <td>Bradford, United Kingdom </td>
                        </tr>

                        <tr>
                          <td>Birthday:  </td>
                          <td>January 12, 1993 </td>
                        </tr>

                        <tr>
                          <td>Contact No:  </td>
                          <td>(+639) 905 859 3592</td>
                        </tr>

                    

              </tbody>
            </table>
            </div>
          
        

        <br>
          <div class="col-md-6 col-md-offset-1">
               <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <td><center><a class="highlightit"><img src="../images/addorder.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></a></center></td>
                    <td></td>
                    <td><center><a class="highlightit"><img src="../images/changeinfo.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></a></center></td> 
                </tr>
                 <tr>
                    <td><center><a class="highlightit"><img src="../images/orderhistory.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></a></center></td>
                    <td></td>
                    <td><center><a class="highlightit"><img src="../images/help.png" class="img-thumbnail" alt="Cinque Terre" width="200" height="200"></a></center></td> 
                </tr>
                
              </thead>

          
            </table>
          </div>
       
	
    </div>
  </div>

</div>





@stop

	
