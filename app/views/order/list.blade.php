@extends('layouts.cashier')

@section('content')

	
		
		<div class="row">
			<!-- <div class="col-md-12"> -->
					<center><img src="../images/manageorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
					<font face="Supercell-Magic" size="3" color="White"><center> Order List </center></font>
	<br>
				
		</div>

		



<div class="container">
    <div class="col-md-12">
    	<div class="panel">
    	<font size="3">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#editinfo" role="tab" data-toggle="tab">Today</a></li>
            <li><a href="#changepass" role="tab" data-toggle="tab">All Orders</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="editinfo">
            	<div class="col-md-12">
            		
            			<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
			            <tr>
			              <td><div align="center"><strong>Order Date</strong></div></td>
			              <td><div align="center"><strong>Order ID</strong></div></td>
			              <td><div><strong><center>To Address</center></strong></div></td>
			              <td><div align="center"><strong>Amount</strong></div></td>
			              <td><div align="center"><strong>Status</strong></div></td>
			              <td><div align="center"><strong></strong></div></td>
			              
			              
			            </tr>
			           
			            @if(sizeof($orders_today) == 0)
			            	<tr> 
			            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
			            	</tr>	
			            @else
			            	
			           	@foreach($orders_today as $order)	
			              <tr>
			                <td> <center> {{ $order->created_at }} </center></td>
							<td> <center> {{ $order->order_id }} </center></td>
							<td> <center> {{ $order->toAddress }}</center></td>
							<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
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
            		
            		<center> {{ $orders_today->links() }} </center>
            	</div>
       
            </div>

            <div class="tab-pane" id="changepass">
            	<div class="col-md-12">
            		
            			<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
			            <tr>
			              <td><div align="center"><strong>Order Date</strong></div></td>
			              <td><div align="center"><strong>Order ID</strong></div></td>
			              <td><div><strong><center>To Address</center></strong></div></td>
			              <td><div align="center"><strong>Amount</strong></div></td>
			              <td><div align="center"><strong>Status</strong></div></td>
			              <td><div align="center"><strong></strong></div></td>
			              
			              
			            </tr>
			           
			            @if(sizeof($orders_all) == 0)
			            	<tr> 
			            		<center> <text> No order in the list <text> </center>
			            	</tr>	
			            @else
			            	
			           	@foreach($orders_all as $order1)	
			              <tr>
			                <td> <center> {{ $order1->created_at }} </center></td>
							<td> <center> {{ $order1->order_id }} </center></td>
							<td> <center> {{ $order1->toAddress }}</center></td>
							<td align="right"> <center> P {{ $order1->amount }}.00 </center></td>
							<td> <center> {{ $order1->status }} </center></td>
							<td> 
								{{ Form::open(array('class' => 'pull-right')) }}
								<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order1->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
							
					 	    	
					 	    	
					 	    	<a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$order1->order_id}}"><span class="glyphicon glyphicon-trash"></span></a>
								{{ Form::close()}}
								
							</td>
									 

							 	
			              </tr>
			              
			            @endforeach
			            @endif
			          </table>
            		
            		<center> {{ $orders_all->links() }} </center>
            	</div>
            

            </div>
        </div>
        </font>	
    	</div>
    </div>
    
</div>
	
@stop