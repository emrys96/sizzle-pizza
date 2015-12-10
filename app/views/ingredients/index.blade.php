@extends('layouts.default')


@section('content')
<div class="container">
	<font size="3" color="white">
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('ingredient') }}">Ingredients</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('ingredient') }}">View All Ingredients</a></li>
		<li><a href="{{ URL::to('ingredient/create') }}">Add Ingredient</a>
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
		
			<div class="col-md-10 col-md-offset-1">	 	

		        <div class="panel panel-default">


		          <table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td><div align="center"><strong>ID</strong></div></td>
		              <td><div align="center"><strong>Ingredient Name</strong></div></td>
		              <td><div align="center"><strong>Category</strong></div></td>
		              <td><div align="center"><strong>Price</strong></div></td>
		              <td><div align="center"><strong>Current Stock</strong></div></td>
		              <td></td>
		              <td><div align="center"><strong>Actions</strong></div></td>
		              <td></td>
		              
		              
		            </tr>
		           
		           	            	
		           	@foreach($ingredients as $key => $ingr)	
		              <tr>
		                <td> <center> {{ $ingr->ingredient_id }} </center></td>
						<td> <center> {{ $ingr->ingredient_name}} </center></td>
						<td> <center> {{ $ingr->category }}</center></td>
						<td> <center> {{ $ingr->price }} </center></td>
						<td> <center> {{ $ingr->current_stock }} </center></td>
						<td> <center> <a class="btn btn-success" href="{{ URL::to('/ingredient/' . $ingr->ingredient_id) }}"><span class="glyphicon glyphicon-search"></span></a> </center></td>
						<td> <center> <a class="btn btn-warning" href="{{ URL::route('ingredient.edit', array('order' => $ingr->ingredient_id)) }}"><span class="glyphicon glyphicon-pencil	"></span></a></center></td>
						<td> <center> <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$ingr->ingredient_id}}"><span class="glyphicon glyphicon-trash"></span></a> </center></td>
					  </td>
						<div class="modal fade" id="myModal{{$ingr->ingredient_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
						      </div>
						      <div class="modal-body">
						        <p>Are you sure you want to delete {{$ingr->ingredient_name}}?</p>
						        <p>This cannot be undone.</p>
						      </div>
						      <div class="modal-footer">
						      	  {{ Form::open(array('url' => 'ingredient/' . $ingr->ingredient_id)) }}
							        
							          {{ Form::hidden('_method', 'DELETE') }}
						       
						          {{ Form::submit('Yes', ['class' => 'btn btn-danger']) }}

						          <a type="button" class="btn btn-default" data-dismiss="modal">No</a>
						       
						      </div>
						    </div>
						  </div>
						</div>		 

						 	
		              </tr>
		            @endforeach	
		         
		          </table>
		        </div>	
		        <center> {{ $ingredients->links() }}</center>
			</div>	
			
			</div>
		</div>	
	</div>	


@stop