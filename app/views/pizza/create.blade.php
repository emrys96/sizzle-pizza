@extends('layouts.default')

@section('content')
  <br>
  <br>
  <!-- Base -->
  
  	 <center><img src="../images/pick.png" class="img-rounded" alt="Cinque Terre" width="379" height="250"></center> 
  	<br>
  	<br>
<center>
 
 <div class="row">
{{ Form::open(array('url' => 'pizza')) }}	
	{{ Form::label('id', $order->order_id) }}	
	<input type="hidden" name="order" value="{{ $order->order_id }}" />
	<center><font face="Supercell-Magic" size="4" color="white">
			{{ Form::label('Name', 'Pizza Name:')}}
			<font color="black">{{ Form::text('pizza_name') }}</font>
	</font></center>
	<br>
	<br>
	<br>
 	<div class="col-md-5 col-md-offset-1">
 		<div class="row">
		 			<font face="Supercell-Magic"size="3" color="white"><img src="../images/1.png" width="30" height="30">&nbsp;Choose your base:</font> 
		 			<div id="baseHeader">
		 				<br>
			 			<div id="wrapper">
			 			
						    <div class="item1"><img src="../images/menucon/base.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Base</font>
						    	<font color="white" size="2"><div id="baseDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>

						</div>
			 		</div>
		 		</div>
		 		
		 		

		 		<div class="row">
			 		<div id="base" style="display: none;" >
			 			
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/base.png"></div>
						    <div class="item2"><br><br> &nbsp; &nbsp;  <input id="base" type="radio" name="base" value="1"/><font size="4" color="white"> <label> Dough </label> </font></div>
						    <div class="item3">
						  
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/crisscross.png"></div>
						    <div class="item2"><br><br> &nbsp; &nbsp; <input id="base"  type="radio" name="base" value="3"/><font size="4" color="white"> <label> Crisscross Fries </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/shoestring.png"></div>
						    <div class="item2"><br><br> &nbsp; &nbsp;  <input id="base" type="radio" name="base" value="2"/><font size="3" color="white"> <label> Shoestring Fries </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>
		
			 		</div>
		 		</div>
		 		

		 		
		 		
			

  	<br>

  <!-- Cheese -->
  
		 	
		 		<div class="row">
		 			<font face="Supercell-Magic"size="3" color="white"><img src="../images/2.png" width="30" height="30">&nbsp;Choose your cheese:</font> 
		 			<div id="cheeseHeader">
		 				<br>
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/cheese1.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Cheese</font>
						    	<font color="white" size="2"><div id="cheeseDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>
						</div>
			 		</div>
		 		</div>
		 		
		 		<div class="row">
			 		<div id="cheese" style="display: none;" >

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/mozarellla.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="cheese" type="radio" name="cheese" value="6"/> <label> Mozarella </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/cheese1.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="cheese" type="radio" name="cheese" value="7"/> <label> Quickmelt </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>
	
			 		</div>	
		 		</div>

		 		
		 		
		
	


<!-- Meats -->
  <br>	
  
		 		<div class="row">
		 			<font face="Supercell-Magic"size="3" color="white"><img src="../images/3.png" width="30" height="30">&nbsp;Choose your meats:</font> 
		 			<div id="meatHeader">
		 				<br>
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/ham.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Meats</font>
						    	<font color="white" size="2"><div id="meatDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>
						</div>
			 		</div>
		 		</div>
		 		
		 		<div class="row">
			 		<div id="meats" style="display: none;" >
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/pepperoni.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="meat" type="checkbox" name="meats[]" value="8"/> <label> Pepperoni </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/bacon.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="meat" type="checkbox" name="meats[]" value="12"/> <label> Bacon </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/sausage.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="meat" type="checkbox" name="meats[]" value="9"/> <label> Hungarian Sausage </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/ham.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="meat" type="checkbox" name="meats[]" value="10"/> <label> Ham </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/hotdog.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="meat" type="checkbox" name="meats[]" value="11"/> <label> Hotdog </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

			 		</div>	
		 		</div>

		 		
		 		
	
</div>

<!-- Chillis -->
  
<div class="col-md-5 ">
   	
		 		<div class="row">
		 			<font face="Supercell-Magic"size="3" color="white"><img src="../images/4.png" width="30" height="30">&nbsp;Choose your chilis:</font> 
		 			<div id="chiliHeader">
		 				<br>
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/chiliflakes.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Chilis</font>
						    	<font color="white" size="2"><div id="chiliDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>
						</div>
			 		</div>
		 		</div>
		 		
		 		<div class="row">
			 		<div id="chili" style="display: none;" >
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/gbp.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="chili" type="checkbox" name="chilis[]" value="13"/> <label> Green bell Pepper </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/rbp.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="chili" type="checkbox" name="chilis[]" value="14"/> <label> Red bell Pepper </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/chiliflakes.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="chili" type="checkbox" name="chilis[]" value="15"/> <label> Chili flakes </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>
			 		</div>	
		 		</div>

		 		
		 		
				
		 	
	

  <!-- Toppings -->
  <br>
  
		 
		 		<div class="row">
		 				<font face="Supercell-Magic"size="3" color="white"><img src="../images/5.png" width="30" height="30">&nbsp;Choose your toppings:</font> 

		 			<div id="toppingsHeader">
		 				<br>
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/pineapple.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Toppings</font>
						    	<font color="white" size="2"><div id="toppingDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>
						</div>
			 		</div>
		 		</div>
		 		
		 		<div class="row">
			 		<div id="toppings" style="display: none;" >
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/onions.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="topping" type="checkbox" name="toppings[]" value="19"/> <label> Onions </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/mushroom.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="topping" type="checkbox" name="toppings[]" value="16"/> <label> Mushrooms </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/pineapple.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="topping" type="checkbox" name="toppings[]" value="16"/> <label> Pineapples </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/tomatoes.png"></div>
						    <div class="item2"><br><br><font size="3" color="white"> &nbsp; &nbsp; <input id="topping" type="checkbox" name="toppings[]" value="18"/> <label> Tomatoes </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>


			 		</div>	
		 		</div>

		 		<br>
		 		<div class="row">
		 			<font face="Supercell-Magic"size="3" color="white"><img src="../images/6.png" width="30" height="30">&nbsp;Choose your sauce:</font> 
		 			<div id="sauceHeader">
		 				<br>
			 			<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/marinara.png"></div>
						    <div class="head2"><br><font size="4" color="white"> &nbsp; &nbsp; Sauces</font>
						    	<font color="white" size="2"><div id="sauceDiv"></div></font>
						    </div>
						    <div class="item3">
						    	<br>
						    	<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
						    </div>
						</div>
			 		</div>
		 		</div>
		 		
		 		<div class="row">
			 		<div id="sauce" style="display: none;" >
						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/oliveoil.png"></div> 
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="sauce" type="radio" name="sauce" value="5"/> <label> Olive Oil </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>

						<div id="wrapper">
						    <div class="item1"><img src="../images/menucon/marinara.png"></div>
						    <div class="item2"><br><br><font size="4" color="white"> &nbsp; &nbsp; <input id="sauce" type="radio" name="sauce" value="4"/> <label> Red Sauce </label></font></div>
						    <div class="item3">
						    	
						    </div>
						</div>
	
			 		</div>	
		 		</div>
		 		
				
			
		 	
	
	</div>	 

	
</div>    

	
	<br>
	<br>
	<br>
	<div class="row">
		<center><font face="Supercell-Magic" size="4" color="white">
			{{ Form::label('quant', 'Quantity:')}}
			<font color="black">{{ Form::text('quantity', ' ' ,array('size' => '3x1')) }}</font>
		</font></center>
		<br>
		<br>
		<center><font face="Supercell-Magic"> {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} </font></center>
	</div>	
 	
</center>
	{{ Form::close()}}	
 
@stop