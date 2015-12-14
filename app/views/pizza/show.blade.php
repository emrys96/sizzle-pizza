@extends('layouts.default')


@section('content')
		
			
			
		<div class="container">
			<center><img src="../images/pizza_preview.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
			
			<div class="container">
				<div class="col-md-6">
					<!-- <div class="panel"> -->
					<center><button><font color="white">Disassemble</font></button></center>
						<figure class="stack stack-queue">
							@foreach($pizza->ingredients as $ingr)
								<img src="{{ $ingr->image_location }}"/>
							@endforeach
						</figure>
					
					<br>
					<br>	
					<br>
					<!-- </div> -->
				</div>

				<!-- <div class="col-md-4"> -->
					<!-- <div class="panel"> -->
					<br>
					<br>	
					<br>
					<br>
					<br>	
					<br>
					<br>
					<br>	
					<br>
				

					<div class="col-md-5 " >
						<font size="6" color="white">
						Pizza Name: {{ $pizza->pizza_name }}	<br>	
						Size: {{ $pizza->size }} <br>
						<br>
						Ingredients: </font>
						<font size="5" color="white">
						<br>
								@foreach($pizza->ingredients as $ingr)
									&nbsp; &nbsp;&nbsp; &nbsp; {{ $ingr->ingredient_name }},
								@endforeach
						
						</font>
						<br>
						<br>	
						<br>
					</div>
				</div>
				<!-- </div> -->

			<!-- </div>	 -->
		</div><!-- /container -->
		
@stop	