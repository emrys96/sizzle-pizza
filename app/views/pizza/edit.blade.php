@extends('layouts.default')

@section('content')
  
{{ Form::open(array('url' => 'pizza')) }}	


 		{{Form::hidden('order_id', $order->order_id)}}
 		<br>
 		<br>
        <center><img src="../images/pick.png" class="img-rounded" alt="Cinque Terre" width="379" height="250"></center>    
		<br>
		<div class="col-md-8 col-md-offset-2">
		<div class="panel panel">
		<div class="row">
			<div class="col-md-offset-1">
				<br>
				<text><font face="Supercell-Magic" size="3" color="White">Choose your base:</font></text>
				<br>
				<br>
				<select id="base" name="base" class="image-picker show-html">
				<div id="wrapper">
				  <option data-img-src="../images/pizza/dough1.png" value="1">  Dough  </option>
				  <option data-img-src="../images/pizza/straightcut1.png" value="2">  Straight Cut Fries  </option>
				  <option data-img-src="../images/pizza/crisscross.png" value="3">  Crisscoss Fries  </option>
				</div>
				</select>
			</div>

		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your cheese:</font></text>
				<br>
				<br>
				<select id="cheese" name="cheese" class="image-picker show-html">
				  <option data-img-src="../images/pizza/quickmelt1.png" value="5">  Quickmelt  </option>
				  <option data-img-src="../images/pizza/mozarella1.png" value="4">  Mozarella  </option>
				  
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your meat:</font></text>
				<br>
				<br>
				<select id="meat" name="meat[]" multiple="multiple" class="image-picker show-html">
				  <option data-img-src="../images/pizza/pepperoni1.png" value="6">  Pepperoni  </option>
				  <option data-img-src="../images/pizza/hotdog1.png" value="9">  Hotdog  </option>
				  <option data-img-src="../images/pizza/ham1.png" value="8">  Ham  </option>
				  <option data-img-src="../images/pizza/bacon1.png" value="10">  Bacon  </option>
				  <option data-img-src="../images/pizza/hungariansausage1.png" value="7">  Hungarian Sausage  </option>
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your chili:</font></text>
				<br>
				<br>
				<select id="chili" name="chili[]" multiple="multiple" class="image-picker show-html">
				  <option data-img-src="../images/pizza/redbellpepper1.png" value="12">  Red Bell Pepper  </option>
				  <option data-img-src="../images/pizza/greenbellpepper1.png" value="11">  Green Bell Pepper  </option>
				  <option data-img-src="../images/pizza/chiliflakes1.png" value="13">  Chili Flakes  </option>
				  
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your toppings:</font></text>
				<br>
				<br>
				<select id="toppings" name="toppings[]" multiple="multiple" class="image-picker show-html">
				 
				  <option data-img-src="../images/pizza/mushrooms1.png" value="15">  Pineapple  </option>
				  <option data-img-src="../images/pizza/pineapple1.png" value="16">  Mushrooms  </option>
				  <option data-img-src="../images/pizza/tomatoes1.png" value="17">  Tomatoes  </option>
				  <option data-img-src="../images/pizza/onions1.png" value="14">  Onions  </option>
				  
				</select>
			
			</div>
		</div>

		{{ Form::label('quantL', 'Quantity:') }}
		{{ Form::text('quantity', null, array('class' => 'form-control')) }}

		 <div class="row">
	      <div class="col-md-4 col-md-offset-4">
	          <input class="btn btn-primary btn-block" onclick="return confirm('Are you sure with your selected ingredients?');"type="submit" name="submit" value="Submit">
	      </div>
		</div>

		<br>

		</div>
	</div>
	 {{ Form::close() }}
 </div>

@stop