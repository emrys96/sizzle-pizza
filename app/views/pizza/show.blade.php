@extends('layouts.default')


@section('content')
		
			
			
		<div>
			<section>	
			<h2><font face="Supercell-Magic" size="5" color="White">{{$pizza->pizza_name}}</font></h2>
			<br>
			<button>Disassemble</button>
				<figure class="stack stack-queue">
					@foreach($pizza->ingredients as $ingr)
						<img src="{{ $ingr->image_location }}"/>
					@endforeach
				</figure>
			</section>
			
		</div><!-- /container -->
		
@stop	