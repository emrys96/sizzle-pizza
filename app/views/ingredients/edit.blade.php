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
		{{ Form::model($ingredient, array('route' => array('ingredient.update', $ingredient->ingredient_id), 'method' => 'PUT')) }}		
			<center>
				<div class="form-group">
						<font size="3" color="white">{{ Form::label('ingr_name', 'Name:')}}</font> &nbsp;
						<font size="3" color="black">{{ Form::label('ingr_name', $ingredient->ingredient_name)}}</font>
				</div>
				<br>
				<div class="form-group">
				<font size="3" color="white">{{ Form::label('cat', 'Category:')}}</font> &nbsp;
				<font size="3" color="black">{{ Form::label('category', $ingredient->category)}}</font>
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

				
				
				<br>
								
				

				<center><button type="submit" name="submit" value="Submit" class="btn btn-primary"> 
	 				 Add <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </button></center>
			
			{{ Form::close()}}	
			</center>
				<br>
		</div>
	</div>

@stop