{{ Form::model($pizza, array('action' => array('PizzaController@update', $pizza->pizza_id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('pizza_name', 'Pizza Name:') }}
		{{ Form::text('name', $pizza->pizza_name, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
	{{ Form::label('meat', 'Meats:') }}

	@foreach($pizza->ingredients as $ingr)
		@if($ingr->category == 'meat'){
			{{ Form::text('meats[]', $ingr->ingredients_id, array('class' => 'form-control')) }}
		@endif
	}
		
	@endforeach	
	</div>

	

	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}