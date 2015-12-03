@extends('layouts.default')


@section('content')
		
			
			
		<div class="container">
			<center><img src="../images/pizza_preview.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
			<div class="col-md-12">
				<!-- <div class="panel"> -->
				<center><button><font color="black">Disassemble</font></button></center>
					<figure class="stack stack-queue">
						@foreach($pizza->ingredients as $ingr)
							<img src="{{ $ingr->image_location }}"/>
						@endforeach
					</figure>
				<center><h2><font face="Supercell-Magic" size="5" color="White">{{$pizza->pizza_name}}</font></h2></center>
				<br>
				<br>	
				<br>
				<!-- </div> -->
			</div>

			<!-- <div class="col-md-4"> -->
				<!-- <div class="panel"> -->
			<!-- 	<br>
				<br>	
				<br>
				<br>
				<br>	
				<br>
				<br>
				<br>	
				<br>
				<font size="4" color="white">

				&nbsp; &nbsp; Pizza ID: {{ $pizza->pizza_id }} <br>	
				&nbsp; &nbsp; Pizza Name: {{ $pizza->pizza_name }} <br>	
				&nbsp; &nbsp; Ingredients:
				<br>
						@foreach($pizza->ingredients as $ingr)
							&nbsp; &nbsp;&nbsp; &nbsp; {{ $ingr->ingredient_name }} <br>
						@endforeach
					
				
				</font>
				<br>
				<br>	
				<br> -->
				<!-- </div> -->

			<!-- </div>	 -->
		</div><!-- /container -->
		
@stop	