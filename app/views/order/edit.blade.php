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
		              <td><div align="center"><strong>Quantity</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              
		            </tr>
		           
		            @if(sizeof($orders->pizzas) == 0)
		            	<tr> 
		            		<center> <text> No pizza in your cart <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($orders->pizzas as $pizza)	
		              <tr>
		                <td> <center> {{ $pizza->pizza_id }} </center></td>
						<td> <center> {{ $pizza->pizza_name}} </center></td>
						<td class="absorbing-column">
							@foreach($pizza->ingredients as $ingr)
								{{ $ingr->ingredient_name }},    
							@endforeach
						</td>
						<td> <center> {{ $pizza->quantity }} </center></td>
						<td align="right"> P {{ $pizza->amount * $pizza->quantity }}.00 </td>
						<td> 
							<center> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								 <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
								 

						 	</center>
						</td>
		              </tr>
		            @endforeach	
		            @endif
		          </table>
		        </div>	
			</div>	
			</div>
		</div>	

	</div>	
	<div>
		<div class="row">
			<center> 
				<!-- <div class="row"> -->
				<button type="button" class="btn btn-default"> <a href="/order/{$order->order_id}/edit">
	 				 Add Pizza <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </button>
	 			<!-- </div> -->
	 				&nbsp; &nbsp;
	 			<!-- <div class="row"> -->
				<button type="button" class="btn btn-default"> <a href="order/create">
	 				 Carry Out <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> </a> </button>
	 			<!-- </div> -->
	 				 
			</center>
		</div>
	</div>


{{ Form::close() }}
@stop