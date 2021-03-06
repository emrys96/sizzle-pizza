@extends('layouts.default')


@section('content')
<br>
<br>
<br>
<div class="container-fluid">

  <div class="col-md-12"> 
   <text><font face="Supercell-Magic" size="5" color="White">Welcome, {{Auth::user()->username}}!</font></text>
	   <div class="row">
        <br>
        <br>  
        <center>             
               <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <td><center><a class="highlightit" href="{{ URL::to('/users/' . Auth::user()->id) }}"><img src="../images/changeinfo.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td> 

                    <td><center><a class="highlightit" href="../order"><img src="../images/addorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td>
              
                    <td><center><a class="highlightit" href="/userOrders"><img src="../images/orderhistory.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td>
                   
                    <td><center><a class="highlightit" href="/logout"><img src="../images/logout.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td> 
                </tr>    
                     
              </thead>          
            </table>
        </center>
     </div>
  </div>
</div>
  
@stop