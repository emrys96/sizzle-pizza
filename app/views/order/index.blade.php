@extends('layouts.default')

@section('content')

	<div class="container">
		<div class="row">
			<!-- <div class="col-md-12"> -->

			<center><img src="../images/placeorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
				<div class="container">
					<div class="col-md-10">	
					&nbsp; &nbsp;<text><font face="Supercell-Magic" size="3" color="White">Hi {{Auth::user()->username}}!</font></text>
					</div>
				</div>	
			<!-- <div> -->
		</div>

	{{ Form::open(array('url' => 'order')) }}	
		<div class="row">
			<br>
			<div class="container"> 
			<div class="col-md-12">	 	
		        <div class="panel panel-default">


		          <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>Pizza ID</strong></div></td>
		              <td><div align="center"><strong>Pizza Name</strong></div></td>
		              <td><div align="center"><strong>Pizza Details</strong></div></td>
		              <td><div align="center"><strong>Quantity</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              
		            </tr>
		           
		           
		            <tr> 
		            		<center><font color="White" size="3">  No pizza in your cart </font></center>
		            </tr>	
		         
		           
		          </table>
		        </div>	
			</div>	
			</div>
		</div>	

		<div class="row">
			<center><button type="submit" name="submit" value="Submit" class="btn btn-default"> 
	 				 Add Pizza <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </button></center>
		</div>
		{{Form::close()}}
@stop