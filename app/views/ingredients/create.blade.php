@extends('layouts.default')


@section('content')

	<div class="container">
		<br>
		<br>
		<center><font size="5" color="white">View Order</font></center>
		<br>
		<br>
		<div class="col-md-6 col-md-offset-3">
		{{ Form::open(array('url' => 'ingredients')) }}
			<center>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Order ID:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName',' 143')}}</font>
				</div>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Customer Name:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName', 'Gabrielle Luna')}}</font>
				</div>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Amount:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName', 'P145.00')}}</font>
				</div>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'To Address:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName','  Balite Drive, Caimito St., Brgy. Santiago')}}</font>
				</div>

				
				<br>
				
				<div class="col-md-12">
					<div id="googleMap" style="width:100%;height:380px;"></div>
				</div>

				<br>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Status:')}}</font>
						<font size="3" color="white">{{ Form::label('ingrName','  Confirmed')}}</font>
				</div>
				
				
				

				{{ Form::submit('Submit Edit', array('class' => 'btn btn-primary')) }}
			
			{{ Form::close()}}	
			</center>
				<br>
		</div>
	</div>

@stop