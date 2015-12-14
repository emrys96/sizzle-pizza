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
			
			
				<br>
				<br>
				<form style="width:260px;margin:100px auto;border:2px black dashed;">
				<table cellspacing="8">
				<tr>
				<!-- pass field reference ('this') and other field references -->
				<td>value 1___<input name="t1" type="text" onkeyup="return autocalc(this,t2)" tabindex="1"></td>
				<td rowspan="3"><strong>total_____</strong><input name="total" type="text" readonly="readonly" value="0"  tabindex="-1"></td>
				</tr><tr>
				<td>value 2___<input name="t2" type="text" onkeyup="return autocalc(this,t1)" tabindex="2"></td>
				</tr>
				</table>
				</form>
				
				

			
			
			
			
				<br>
		</div>

	</div>
		<center> <strong> {{ Form::submit('Submit Order', array('class' => 'btn btn-primary')) }}</strong>  </center>
	
	{{ Form::close() }}



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