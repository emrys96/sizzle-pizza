@extends('layouts.customize')


@section('content')
 
<div id="firstContainer" class="dn">
        	<br>
        {{ Form::open(array('url' => 'pizza')) }}	
            <text><font face="Supercell-Magic" size="5" color="White"><center>Choose Ingredients</center></font></text>
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
				  <option data-img-src="../images/pizza/dough1.png" value="1">  Dough  </option>
				  <option data-img-src="../images/pizza/straightcut1.png" value="2">  Straight Cut Fries  </option>
				  <option data-img-src="../images/pizza/crisscross.png" value="3">  Crisscoss Fries  </option>
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
				  <option data-img-src="../images/pizza/quickmelt1.png" value="4">  Quickmelt  </option>
				  <option data-img-src="../images/pizza/mozarella1.png" value="5">  Mozarella  </option>
				  
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
				  <option data-img-src="../images/pizza/hotdog1.png" value="7">  Hotdog  </option>
				  <option data-img-src="../images/pizza/ham1.png" value="8">  Ham  </option>
				  <option data-img-src="../images/pizza/bacon1.png" value="9">  Bacon  </option>
				  <option data-img-src="../images/pizza/hungariansausage1.png" value="10">  Hungarian Sausage  </option>
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
				  <option data-img-src="../images/pizza/redbellpepper1.png" value="11">  Red Bell Pepper  </option>
				  <option data-img-src="../images/pizza/greenbellpepper1.png" value="12">  Green Bell Pepper  </option>
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
				  <option data-img-src="../images/pizza/onions1.png" value="14">  Onions  </option>
				  <option data-img-src="../images/pizza/mushrooms1.png" value="15">  Pineapple  </option>
				  <option data-img-src="../images/pizza/pineapple1.png" value="16">  Mushrooms  </option>
				  <option data-img-src="../images/pizza/tomatoes1.png" value="17">  Tomatoes  </option>
				  
				</select>
			
			</div>
		</div>

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


<div id="secondContainer">
	<br>
	<text><font face="Supercell-Magic" size="5" color="White"><center>Order Details</center></font></text>
	<div class="col-md-10 col-md-offset-1">
		<text><font face="Supercell-Magic" size="1" color="White">Point Your Location</font></text>
		<br>
		<br>
		<div id="googleMap" style="width:100%;height:380px;"></div>
	</div>
</div>



@stop