@extends('layouts.default')

@section('content')


	<div class="container">
		<div class="row">
			<!-- <div class="col-md-12"> -->

			<center><img src="../images/orderlist.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
				<div class="container">
					<div class="col-md-10">	
					&nbsp; &nbsp;<text><font face="Supercell-Magic" size="3" color="White">Hi {{Auth::user()->username}}!</font></text>
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
		              <td><div align="center"><strong>Order Date</strong></div></td>
		              <td><div align="center"><strong>Total Amount</strong></div></td>
		              <td><div align="center"><strong>Mode</strong></div></td>
		              <td><div align="center"><strong>Status</strong></div></td>	
		              <td><div align="center"><strong>Updated at</strong></div></td>      
		              <td></td>        
		            </tr>
		           
		           
		            @if(sizeof($orders) == 0)
		            	<tr> 
		            		<center> <text> No orders in your cart <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($orders as $order)	
		              <tr>
		                <td> <center> {{ $order->order_id }} </center></td>
		                <td> <center> {{ $order->created_at }}</center></td>
						<td align="right"> P {{ $order->amount }}.00 </td>
						<td> <center>{{ $order->mode }}</center></td>
						<td> <center> {{ $order->status }} </center> </td> 	
						<td> <center> {{ $order->updated_at }} </center> </td>
						<td> <center> <a class="btn btn-success" href="{{ URL::to('/userOrders/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a> </center> </td> 	
		              </tr>
		            @endforeach
		            @endif
		         
		           
		          </table>
		        </div>	
        		<center> {{ $orders->links() }} </center>
			</div>	
			</div>
		</div>	

		
		
@stop