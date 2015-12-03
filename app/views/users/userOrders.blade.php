@extends('layouts.default')

@section('content')

	<div class="container">
		<div class="row">
			<!-- <div class="col-md-12"> -->

			<center><img src="../images/placeorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
				<div class="container">
					<div class="col-md-10">	
					<text><font face="Supercell-Magic" size="3" color="White">{{Auth::user()->username}}'s Order List</font></text> <br>

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
		              <td><div align="center"><strong>Order ID</strong></div></td>
		              <td><div align="center"><strong>To Address</strong></div></td>
		              <td><div align="center"><strong>Amount</strong></div></td>
		              <td><div align="center"><strong>Status</strong></div></td>
		              <td><div align="center"><strong>Order Date</strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              
		              
		            </tr>
		           
		            @if(sizeof($orders) == 0)
		            	<tr> 
		            		<center> <text> You have not made an order yet. <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($orders as $order)	
		              <tr>
		                <td> <center> {{ $order->order_id }} </center></td>
						<td class="absorbing-column">
							{{ $order->toAddress }}
						</td>
						<td> <center> {{ $order->amount }} </center></td>
						

						<td> <center> {{ $order->status }} </center></td>

						<td align="center"> {{ $order->created_at}} </td>

						<td> 
							{{ Form::open(array('class' => 'pull-right')) }}
							<a class="btn btn-success" href="{{ URL::to('/order/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
							{{ Form::close()}}
							
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
				<button type="button" class="btn btn-default"> <a href="{{ URL::route('order.edit', $order->order_id) }}">
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


	

@stop