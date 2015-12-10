@extends('layouts.cashier')


@section('content')
	<br>
	<br>
	<br>
	<br>
{{ Form::model($order, array('route' => array('updateStatus', $order->order_id), 'method' => 'PUT')) }}
	{{ Form::hidden('order_id', $order->order_id)}}
	<font size='5' color="white"><center>You are viewing Order No. {{ $order->order_id }}</center></font>
	<br>
	<br>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			
			<div class="form-group">
				<font size="3" color="white">{{ Form::label('ingr_name', 'Status:')}}</font>
				<font size="3" color="black">
					<select class="form-control" id="status" name="status">
						<option @if($order->status == 'unconfirmed')
						 selected="selected"
						@endif value="unconfirmed">Unconfirmed</option>
						<option @if($order->status == 'confirmed')
						 selected="selected"
						@endif value="confirmed">Confirmed</option>
						<option @if($order->status == 'on process')
						 selected="selected"
						@endif value="on process">On Process</option>
						<option @if($order->status == 'on delivery')
						 selected="selected"
						@endif value="on delivery">On Delivery</option>
						<option @if($order->status == 'ready for pick-up')
						 selected="selected"
						@endif value="ready for pick-up">Ready for pick up</option>
						<option @if($order->status == 'received')
						 selected="selected"
						@endif value="received">Received</option>
					</select>
				</font>
			</div>

			<div class="form-group">
				<font size="3" color="white">{{ Form::label('mode', 'Mode of Delivery:')}}</font>
				<font size="3" color="white">{{ Form::label('orderid',  $order->mode)}}</font>
			</div>

			<div class="form-group">
				<font size="3" color="white">{{ Form::label('name', 'Customer Name:')}}</font>
				<font size="3" color="white">{{ Form::label('name', $order->name() )}}</font>
			</div>

			<div class="form-group">
				<font size="3" color="white">{{ Form::label('pizza', 'Ordered Pizza:')}}</font>
				 <div class="table-responsive">
				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>ID</strong></div></td>
		              <td><div align="center"><strong>Pizza Name</strong></div></td>
		              <td style="word-wrap: break-all"><div align="center"><strong>Ingredients</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		              <td><div align="center"><strong>Quantity</strong></div></td>
		              <td><div align="center"><strong>Size</strong></div></td>


		                      
		              
		            </tr>
		           
		            @if(sizeof($order) == 0)
		            	<tr> 
		            		<center> <text> No pizza in the order <text> </center>
		            	</tr>	
		            @else
		            	
		           	@foreach($order->pizzas as $pizza)	
		              <tr>
		                <td> <center> {{ $pizza->pizza_id }} </center></td>
						<td> <center> {{ $pizza->pizza_name }} </center></td>
						<td style="word-wrap: break-all"> 
							@foreach($pizza->ingredients as $ingr)
							{{$ingr->ingredient_name}},    
							@endforeach
						</td>
						<td align="right"> <center> P {{ $pizza->amount }}.00 </center></td>
						<td> <center> {{ $pizza->quantity }} </center></td>
						<td> <center> {{ $pizza->size }} </center></td>
		              </tr>
		              
		            @endforeach
		            @endif
		          </table>
		     	 </div>
			</div>

			@if($order->mode == 'delivery')
				<div class="form-group">
					<font size="3" color="white">{{ Form::label('addr', 'Address:')}}</font>
					<font size="3" color="white">{{ Form::label('name', $order->toAddress )}}</font>
				</div>

				<div class="form-group">
					<font size="3" color="white">{{ Form::label('map', 'Map:')}}</font>
					<div id="map-canvas"></div>
				</div>
			@else
				<div class="form-group">
					<font size="3" color="white">{{ Form::label('time', 'Pick-up Time:')}}</font>
					<font size="3" color="white">{{ Form::label('name', '6:30' )}}</font>
				</div>
			@endif

			
		</div>
	</div>

	<center> <strong> {{ Form::submit('Update Order', array('class' => 'btn btn-primary')) }}</strong>  </center>
	
	{{ Form::close() }}

	<script>
		var lat = {{ $order->lat }};
		var lng = {{ $order->lng }};

		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			center:{
				lat: lat,
				lng: lng
			},
			zoom:15
		});

		var marker = new google.maps.Marker({
			position:{
				lat: lat,
				lng: lng
			},
			map:map
		})
	</script>

	<style type="text/css">
		#map-canvas{
			width: 920px;
			height: 350px;
		}

		.table {
			
			width:100%;
			height: 300;
		}

		
	</style>

@stop