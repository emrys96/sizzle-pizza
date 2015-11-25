 

 	{{ Form::open([
        'route' => ['pizza.update', $pizza->pizza_id],
        'method' => 'PUT',
        "autocomplete" => "off",
        "class"        => "form-horizontal"
	]) }}


 		{{Form::label('Name:')}} 
 		{{ Form::text('pizza_name', $pizza->pizza_name) }}

 		{{Form::label('Edit Ingredients:')}}

 		@foreach($pizza->ingredients as $ingr)
 			{{Form::label($ingr->ingredient_name) }} 
 		@endforeach

 		{{Form::label('Add/Remove Ingredients:')}}

 		{{Form::select('meats[]', $ingr, null, ['id' => 'meats', multiple=multiple ])}}

 	{{Form::close()}}