@extends('layouts.default')


@section('content')

	<div class="container">
		<br>
		<br>
		<br>
		<center><font size="5" color="white">Add Ingredient</font></center>
		<br>
		<br>
		<div class="col-md-6 col-md-offset-3">
		{{ Form::open(array('url' => 'ingredient')) }}
			<center>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Name:')}}</font> &nbsp;
						<font size="3" color="black">{{ Form::text('ingrName')}}</font>
				</div>
				<br>
				<div class="form-group">
				<font size="3" color="white">{{ Form::label('cat', 'Category:')}}</font> &nbsp;
				<font size="3" color="black">
					<select id="category" name="category">
						<option value="base">Base</option>
						<option value="cheese">Cheese</option>
						<option value="meat">Meat</option>
						<option value="chili">Chili</option>
						<option value="topping">Topping</option>
						<option value="sauce">Sauce</option>
					</select>
				</font>
			</div>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('price', 'Price:')}}</font> &nbsp;
						<font size="3" color="black">{{ Form::text('price')}}</font>
				</div>
				<br>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('stock', 'Current Stock:')}}</font> &nbsp;
						<font size="3" color="black">{{ Form::text('curr_stock')}}</font>
				</div>

				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Portion Size:')}}</font>
						<font size="3" color="black">
							<select id="size" name="size">
								<option value="solo">Solo</option>
								<option value="large">Large</option>
							</select>
						</font>
				</div>

				
				
				<br>
								
				

				<center><button type="submit" name="submit" value="Submit" class="btn btn-primary"> 
	 				 Add <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </button></center>
			
			{{ Form::close()}}	
			</center>
				<br>
		</div>
	</div>

@stop