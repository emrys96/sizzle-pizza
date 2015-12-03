@extends('layouts.default')


@section('content')
 
	<br>
	<br>
	<br>
	<br>
	<h1><center><font face="Supercell-Magic" size="4" color="white">Order Details</font></center></h1>
	<br>
	<br>
	<div class="container">
		<div class="col-md-6 col-md-offset-1">
	{{ Form::model($order, array('action' => array('OrderController@getCoordinates', $order->order_id), 'method' => 'PUT')) }}
	
			
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('orderID', 'Order ID:')}}</font>
						<font size="3" color="white">{{ Form::label('order_id', $order->order_id)}}</font>
				</div>

				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Customer Name:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName', Auth::user()->name)}}</font>
				</div>
			
				
				<div class="form-group">
					<font size="3" color="white">{{ Form::label('summary', 'Pizza List:')}}</font>
						<table class="table table-striped">
							<tr>
								<td style="width:100px"><strong> Pizza Name </strong> </td>
								<td style="width:70px"> <strong> Price </strong> </td>
							</tr>
							@foreach($order->pizzas as $pizza)	
							<tr>
								<td style="width:100px"> {{ $pizza->pizza_name }} </td>
								<td style="width:70px"> {{ $pizza->amount * $pizza->quantity }} </td>	
							</tr>
							@endforeach
						<table>
					
				</div>	
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Delivery Mode:')}}</font>
						<font size="3" color="black">
							<select id='mode'>
								<option value="0">Delivery</option>
								<option value="1">Pick-up</option>
							</select>
						</font>
				</div>

				

				
				<div class="container" id="delivery">
					<div class="col-md-8">
						<div id="googleMap" style="width:100%;height:380px;"></div>
					</div>

					<div>
						<div>Long: 
						  <input name="longitude" type="label" id="lngclicked"></span>
						</div>
						<div>Lat: 
						  <input name="latitude" type="text" id="latclicked"></span>
						</div>
					</div>


				</div>

				<div style="display:none;"class="container" id="pickup">
					<div class="col-md-8">
						<font size="3" color="white">{{ Form::label('timeL', 'Pick-up Time:')}}</font>
						<font size="3" color="black">{{ Form::text('time')}}</font>
					</div>
				</div>


				

				<br>
				<br>
				
				
				

				{{ Form::submit('Submit Edit', array('class' => 'btn btn-primary')) }}
			
			
			
				<br>
		</div>
	</div>
	
	{{ Form::close() }}


@stop