@extends('layouts.default')


@section('content')
 	{{$grandtotal = 0;}}
	<br>
	<br>
	<br>
	<br>
	<h1><center><font face="Supercell-Magic" size="4" color="white">Order Details</font></center></h1>
	<br>
	<br>
	<div class="container">
		<div class="col-md-6 col-md-offset-2">
	{{ Form::model($order, array('route' => array('getCoordinates', $order->order_id), 'method' => 'PUT')) }}		
	
			
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
								<td><strong> <center> Pizza Name </center> </strong> </td>
								<td> <strong> <center> Price </center> </strong> </td>
								<td> <strong> <center> Quantity </center> </strong> </td>
								<td> <strong> <center> Total </center>  </strong> </td>
							</tr>
							@foreach($order->pizzas as $pizza)	
							<tr>
								<td> <center> {{ $pizza->pizza_name }}  </center></td>
								<td align="right"> <center> P {{ $pizza->amount }}.00  </center></td>	
								<td> <center> {{ $pizza->quantity }} </center> </td>
								<td align="right"> <center> P {{ $pizza->total }}.00 </center> 
								<div class="hidden"> {{ $grandtotal = $grandtotal + $pizza->total }}</div>	
								</td>
							</tr>
							@endforeach
							<tr>
								<td><strong> Total: </strong> </td>
								<td> <strong>  </strong> </td>
								<td> <strong>  </strong> </td>
								<td align="right"> <strong> <center> P {{ $grandtotal }}.00 </center>  </strong> </td>
							</tr>
						<table>
					
				</div>	
				{{ Form::hidden('total', $grandtotal) }}
			
				@if(Auth::user()->role == 'customer')
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Delivery Mode:')}}</font>
						<font size="3" color="black">
							<select id="mode" name="mode">
								<option value="0">Delivery</option>
								<option value="1">Pick-up</option>
							</select>
						</font>
				</div>

				

				
				<div class="container" id="delivery">
					<div class="col-md-6 col-md-offset-1">
						<div class="form-group">
							<lable for=""><font size="3" color="white">Address:</font></label>
							<input type="text" class="form-control input-sm" name="address">
						</div>	

						<div class="form-group">
							<lable for=""><font size="3" color="white">Map:</font></label>
							
							<div id="map-canvas"></div>
						</div>	
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-4 col-md-offset-1">
									<lable for=""><font size="3" color="white">Lat:</font></label>
									<input type="text" class="form-control input-sm" name="lat" id="lat">
								</div>

								<div class="col-md-4 col-md-offset-1">
									<lable for=""><font size="3" color="white">Lng:</font></label>
									<input type="text" class="form-control input-sm" name="lng" id="lng" width="100">
								</div>
							</div>
						</div>		

					</div>							
				</div>



				<div style="display:none;"class="container" id="pickup">
					<div class="col-md-8">
						<font size="3" color="white">{{ Form::label('timeL', 'Pick-up Time:')}}</font>
						<font size="3" color="black">{{ Form::text('time')}}</font>
					</div>
				</div>


				@endif

				<br>
				<br>
				
				
				

			
			
			
			
				<br>
		</div>

	</div>
		<center> <strong> {{ Form::submit('Submit Order', array('class' => 'btn btn-primary')) }}</strong>  </center>
	
	{{ Form::close() }}

	<style type="text/css">
		#map-canvas{
			width: 550px;
			height: 350px;
		}
	</style>

	  <!-- Google Maps Scripts -->
   <script>
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      center:{
        lat: 8.23497,
        lng: 124.25
      },
      zoom:14
    });

    var marker = new google.maps.Marker({
      position:{
        lat: 8.23497,
        lng: 124.25
      },
      map: map,
      draggable:true
    })

    google.maps.event.addListener(marker,'position_changed', function(){
      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();

      $('#lat').val(lat);
      $('#lng').val(lng);
    });

    google.maps.event.addListener(map, 'click', function(event) {
      placeMarker(event.latLng)
    });

    var marker;

        function placeMarker(location) {
          if ( marker ) {
            marker.setPosition(location);
          } else {
            marker = new google.maps.Marker({
              position: location,
              map: map            
            });
          }

          marker.setMap(map);
        }


 	 </script>

 	 <!-- Bootbox -->
  <script type="text/javascript">
    $('form').submit(function(e) {
        var currentForm = this;
        e.preventDefault();
        bootbox.confirm("Do you want to submit the order?", function(result) {
            if (result) {
                currentForm.submit();
            }
        });
    });
 </script>
	
@stop