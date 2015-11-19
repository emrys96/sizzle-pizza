@extends('layouts.customize')


@section('content')

<div class="row">
	<br>
	<br>
	 <text><font face="Supercell-Magic" size="6" color="White"><center>Customize Your Pizza</center></font></text>
	
    <div class="column">
    	   


        <div id="firstContainer">
        	<br>

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
				<select class="image-picker show-html">
				  <option data-img-src="../images/pizza/dough1.png" value="Dough">  Dough  </option>
				  <option data-img-src="../images/pizza/straightcut1.png" value="Straight Cut Fries">  Straight Cut Fries  </option>
				  <option data-img-src="../images/pizza/crisscross.png" value="Crisscross Fries">  Crisscoss Fries  </option>
				</select>
			</div>

		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your cheese:</font></text>
				<br>
				<br>
				<select  class="image-picker show-html">
				  <option data-img-src="../images/pizza/quickmelt1.png" value="Quickmelt">  Quickmelt  </option>
				  <option data-img-src="../images/pizza/mozarella1.png" value="Mozarella">  Mozarella  </option>
				  
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your meat:</font></text>
				<br>
				<br>
				<select multiple="multiple" class="image-picker show-html">
				  <option data-img-src="../images/pizza/pepperoni1.png" value="Pepperoni">  Pepperoni  </option>
				  <option data-img-src="../images/pizza/hotdog1.png" value="Hotdog">  Hotdog  </option>
				  <option data-img-src="../images/pizza/ham1.png" value="Ham">  Ham  </option>
				  <option data-img-src="../images/pizza/bacon1.png" value="Bacon">  Bacon  </option>
				  <option data-img-src="../images/pizza/hungariansausage1.png" value="Hungarian Sausage">  Hungarian Sausage  </option>
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your chili:</font></text>
				<br>
				<br>
				<select multiple="multiple" class="image-picker show-html">
				  <option data-img-src="../images/pizza/redbellpepper1.png" value="1">  Red Bell Pepper  </option>
				  <option data-img-src="../images/pizza/greenbellpepper1.png" value="2">  Green Bell Pepper  </option>
				  <option data-img-src="../images/pizza/chiliflakes1.png" value="3">  Chili Flakes  </option>
				  
				</select>
			
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-offset-1">
				<text><font face="Supercell-Magic" size="3" color="White">Choose your toppings:</font></text>
				<br>
				<br>
				<select multiple="multiple" class="image-picker show-html">
				  <option data-img-src="../images/pizza/onions1.png" value="1">  Onions  </option>
				  <option data-img-src="../images/pizza/mushrooms1.png" value="2">  Pineapple  </option>
				  <option data-img-src="../images/pizza/pineapple1.png" value="3">  Mushrooms  </option>
				  <option data-img-src="../images/pizza/tomatoes1.png" value="4">  Tomatoes  </option>
				  
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

        </div>


        <div id="secondContainer" class="dn">

           <br>
			<text><font face="Supercell-Magic" size="5" color="White"><center>Order Details</center></font></text>
			<div class="col-md-10 col-md-offset-1">
				<text><font face="Supercell-Magic" size="1" color="White">Point Your Location</font></text>
				<br>
				<br>
				<div id="googleMap" style="width:100%;height:380px;"></div>
			</div>

        </div>

        <div id="thirdContainer" class="dn">

            <h1>Third container</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto cum earum eligendi, error laborum libero modi nam obcaecati odit pariatur quasi ut voluptate. Consequuntur eaque modi vero vitae voluptatibus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto cum earum eligendi, error laborum libero modi nam obcaecati odit pariatur quasi ut voluptate. Consequuntur eaque modi vero vitae voluptatibus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto cum earum eligendi, error laborum libero modi nam obcaecati odit pariatur quasi ut voluptate. Consequuntur eaque modi vero vitae voluptatibus.</p>

        </div>

        


    </div>

</div>

@stop