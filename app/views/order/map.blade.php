@extends('layouts.default')


@section('content')
	

				

				
				<div class="container">
					<div class="col-md-6 col-md-offset-1">
						<div class="form-group">
							<lable for="">Address:</label>
							<input type="text" class="form-control input-sm" name="address">
						</div>	

						<div class="form-group">
							<lable for="">Map:</label>
							
							<div id="map-canvas"></div>
						</div>	
						
						<div class="form-group">
							<lable for="">Lat:</label>
							<input type="text" class="form-control input-sm" name="lat" id="lat">
						</div>

						<div class="form-group">
							<lable for="">Lng:</label>
							<input type="text" class="form-control input-sm" name="lng" id="lng">
						</div>		

					</div>			
				</div>



				
	
	<style type="text/css">
		#map-canvas{
			width: 550px;
			height: 350px;
		}
	</style>

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


	</script>

@stop