@extends('layouts.default')

@section('content')
		{{ $total = 0 }}
		{{ $grandtotal = 0 }}
		
		<div class="row">
			<!-- <div class="col-md-12"> -->

			<center><img src="../images/placeorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
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
						
				 	    	
				 	    	
				 	    	<a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$pizza->pizza_id}}"><span class="glyphicon glyphicon-trash"></span></a>
							

							{{ Form::close()}}
							
						</td>
								 

						 	
		              </tr>
		              			<!-- Modal -->
							<div class="modal fade" id="myModal{{$pizza->pizza_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
							      </div>
							      <div class="modal-body">
							        <p>Are you sure you want to delete {{$pizza->pizza_name}}?</p>
							        <p>This cannot be undone.</p>
							      </div>
							      <div class="modal-footer">
							        {{ Form::open(array('url' => 'pizza/' . $pizza->pizza_id)) }}
							          {{ Form::hidden('orderID', $order->order_id)}}
							          {{ Form::hidden('_method', 'DELETE') }}
							          {{ Form::submit('Yes', ['class' => 'btn btn-danger']) }}

							          <a type="button" class="btn btn-default" data-dismiss="modal">No</a>
							        {{ Form::close() }}
							      </div>
							    </div>
							  </div>
							</div>
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
		

	
	
		<div class="row">
			<center> 
				<!-- <div class="row"> -->
				
			{{ Form::open(array('url' => 'pizza')) }}	
				{{Form::hidden('order', $order->order_id)}}
				<button type="button" class="btn btn-default"> <a href="{{ URL::route('pizza.create', array('order' => $order->order_id)) }}">
	 				 Add Pizza <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </button> 
	 		{{ Form::close() }}

	 			<!-- <div class="row"> -->
				<button type="button" class="btn btn-default"> <a href="{{ URL::route('carryOut', $order->order_id) }}">
	 				 Submit Order <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> </a> </button>
	 			<!-- </div> -->
	 				 
			</center>
		</div>
	


	

@stop