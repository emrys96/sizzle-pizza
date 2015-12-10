@extends('layouts.default')

@section('content')

		{{ $total = 0 }}
		{{ $grandtotal = 0 }}
		
		<div class="row">
			<!-- <div class="col-md-12"> -->

			<center><img src="../images/orderpreview.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
				<div class="container">
					<div class="col-md-10">	
					<text><font face="Supercell-Magic" size="3" color="White">{{Auth::user()->username}}'s Cart!
						<br> {{ Form::label('id', 'Order #: '  .$order->order_id. '') }}	
					</font></text> <br>

					</div>
				</div>	
			<!-- <div> -->
		</div>

		<div class="row">
			<br>

			<div class="container"> 
			<div class="col-md-12">	 	

		        <div class="panel panel-default">

		          <div class="table-responsive">	
		          <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>Pizza ID</strong></div></td>
		              <td><div align="center"><strong>Pizza Name</strong></div></td>
		              <td style="width:400px"><div align="center"><strong>Pizza Details</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		               <td><div align="center"><strong>Quantity</strong></div></td>
		                <td><div align="center"><strong>Total</strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              
		              
		            </tr>
		           
		            @if(sizeof($order->pizzas) == 0)
		            	<tr> 
		            		<center> <text> No pizza in your cart <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($order->pizzas as $pizza)	
		              <tr>
		                <td> <center> {{ $pizza->pizza_id }} </center></td>
						<td> <center> {{ $pizza->pizza_name}} </center></td>
						<td>
							
							@foreach($pizza->ingredients as $ingr)
								{{ $ingr->ingredient_name }},    
							@endforeach
							
						</td>
						<td align="right"> P {{ $pizza->amount}}.00 </td>
						<td> <center> {{ $pizza->quantity }} </center></td>
						<td align="right">  P {{ $pizza->total }}.00 </td>
						<div class="hidden">{{ $grandtotal = $grandtotal + $pizza->total }}</div>
						<td align="center"> 
							{{ Form::open(array('class' => 'pull-right')) }}
							<a class="btn btn-success" href="{{ URL::to('/pizza/' . $pizza->pizza_id) }}"><span class="glyphicon glyphicon-search"></span></a>
						  
							{{ Form::close()}}
							
						</td>
	 	
		              </tr>
		            @endforeach
		            <tr>
		            	<td><strong>TOTAL:</strong> </td>
		            	<td> </td>
		            	<td> </td>
		            	<td> </td>
		            	<td> </td>
		            	<td align="right"> P {{ $grandtotal }}.00 <div class="hidden">adfad</div></td>
		            	<td> </td>
		            </tr>	
		            @endif
		          </table>
		      	</div>
		        </div>	
			</div>	
			</div>
		</div>	
			

@stop