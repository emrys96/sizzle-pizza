@extends('layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<!-- <div class="col-md-12"> -->

		<center><img src="../images/placeorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
			<div class="container">
				<div class="col-md-10">	
				<text><font face="Supercell-Magic" size="3" color="White">{{Auth::user()->username}}'s Cart!</font></text>
				</div>
			</div>	
		<!-- <div> -->
	</div>

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
	              <td><div align="center"><strong>Price</strong></div></td>
	              <td><div align="center"><strong>Quantity</strong></div></td>
	              <td><div align="center"><strong>Action</strong></div></td>
	            </tr>
	           
	              <tr>
	                <td>1</td>
	                <td>Meat Eater's Pizza</td>
	                <td>Dough, Mozarella, Pepperoni, Bacon, Ham, Hungarian Sausage, Pinapples, Onions, Tomatoes, Mushrooms</td>
	                <td>P 125.00</td>
	                <td><center>2</center></td>
	                <td></td>
	              </tr>	              
	          </table>
	        </div>	
		</div>	
		</div>
	</div>	

</div>	

@stop