@extends('layouts.default')


@section('content')
<div class="container">
	<font size="3" color="white">
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
	</ul>
	</nav>
	</font>
</div>


<div class="container">
		

		<div class="row">
			<br>
			<center><font size="5" color="white">Ingredient List</font></center>
			<br>
			<br>
			<div class="container"> 
			<div class="col-md-12">	 	

		        <div class="panel panel-default">


		          <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>ID</strong></div></td>
		              <td><div align="center"><strong>Ingredient Name</strong></div></td>
		              <td><div align="center"><strong>Category</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		              <td><div align="center"><strong>Current Stock</strong></div></td>
		              <td><div align="center"><strong>Actions</strong></div></td>
		              
		              
		            </tr>
		           
		           	            	
		           	@foreach($ingredients as $key => $ingr)	
		              <tr>
		                <td> <center> {{ $ingr->ingredients_id }} </center></td>
						<td> <center> {{ $ingr->ingredient_name}} </center></td>
						<td> <center> {{ $ingr->category }}</center></td>
						<td> <center> {{ $ingr->price }} </center></td>
						<td> <center> {{ $ingr->current_stock }} </center></td>
						<td> 
							<center>
							
									<a class="btn btn-success" href="{{ URL::to('/pizza/' . $ingr->ingredients_id) }}"><span class="glyphicon glyphicon-search"></span></a>
									<a class="btn btn-warning" href="{{ URL::to('/pizza/' . $ingr->ingredients_id) . '/edit' }}"><span class="glyphicon glyphicon-pencil	"></span></a>
						 	    	<a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$ingr->ingredients_id}}"><span class="glyphicon glyphicon-trash"></span></a>
								
							</center>
						</td>
								 

						 	
		              </tr>
		            @endforeach	
		         
		          </table>
		        </div>	
			</div>	
			</div>
		</div>	
	</div>	


@stop