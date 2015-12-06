@extends('layouts.default')

@section('content')

	
		
		<div class="row">
			<!-- <div class="col-md-12"> -->
					<center><img src="../images/manageorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
					<font face="Supercell-Magic" size="3" color="White"><center> Order List </center></font>
	<br>
				
		</div>

		<div class="row">
			<br>

			<div class="container"> 
			<div class="col-md-12">	 	

		        <div class="panel panel-default">


		          <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>Order Date</strong></div></td>
		              <td><div align="center"><strong>Order ID</strong></div></td>
		              <td><strong><center>To Address</center></strong></div></td>
		              <td><div align="center"><strong>Amount</strong></div></td>
		              <td><div align="center"><strong>Status</strong></div></td>
		              <td><div align="center"><strong></strong></div></td>
		              
		              
		            </tr>
		           
		            @if(sizeof($orders) == 0)
		            	<tr> 
		            		<center> <text> No order in the list <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($orders as $order)	
		              <tr>
		                <td> <center> {{ $order->created_at }} </center></td>
						<td> <center> {{ $order->order_id }} </center></td>
						<td> <center> {{ $order->toAddress }}</center></td>
						<td> <center> {{ $order->amount }} </center></td>
						<td> <center> {{ $order->status }} </center></td>
						<td> 
							{{ Form::open(array('class' => 'pull-right')) }}
							<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
						
				 	    	
				 	    	
				 	    	<a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$order->order_id}}"><span class="glyphicon glyphicon-trash"></span></a>
							{{ Form::close()}}
							
						</td>
								 

						 	
		              </tr>
		              
		            @endforeach
		            @endif
		          </table>
		        </div>	
			</div>	
				<center> {{ $orders->links() }} </center>
			</div>
		</div>	
	
@stop