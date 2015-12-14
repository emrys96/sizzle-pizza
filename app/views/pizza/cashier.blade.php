@extends('layouts.cashier')

@section('content')
  
  
 {{ Form::open(array('url' => 'pizza')) }}	


 		
 		<br>
 		<br>
        <center><img src="../images/pick.png" class="img-rounded" alt="Cinque Terre" width="379" height="250"></center>    
		<br>
{{ Form::open(array('url' => 'pizza')) }}
		<center><font face="Supercell-Magic" size="4" color="white">
			{{ Form::label('Name', 'Pizza Name (optional):')}}
			<font color="black">{{ Form::text('pizza_name') }}</font>
		</font></center>
		<br>
		<br>
		<br>
		<div class="row">
			<center><font face="Supercell-Magic" size="4" color="white">
				{{ Form::label('quant', 'Quantity:')}}
				<font color="black">{{ Form::text('quantity', ' ' ,array('size' => '3x1')) }}</font>
			
				
					
			</font>		
			</center>
			<br>
			<br>
			
		</div>	

		
<div class="container">
			

				
				<div class="row">
					<div class="col-md-3 col-md-offset-5">
						<font color="white" face="Supercell-Magic" size="4">{{ Form::label('size', 'Size:') }}</font>
						<font color="black" size="4" face="Supercell-Magic">
							
							<select id="size2" name="size" class="image-picker show-html">
								<option  value="solo">  Solo  </option>
								<option  value="large">  Large  </option>
							</select>
							
						</font>
					</div>
				</div>	


	
				
				<!-- SOLO MENU -->
				<div id="solo2">	
				<br>
				<br>	
				<div class="row">
				<!-- FIRST COLUMN -->
				
				<input type="hidden" name="order" value="{{ $order->order_id }}" />
				<div class="col-md-4 col-md-offset-2">

					<div class="row">

						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your base:</font></text>
							<br>
							<br>
							<select id="base" name="base" class="image-picker show-html">
							<div id="wrapper">
								<div class="row">
									  <div><option data-img-src="../images/menucon2/base.png" value="1" data-img-label="Dofasdfdsugh">  Dough  </option></div> <br>
									  <div><option data-img-src="../images/menucon2/shoestring.png" value="3">  Straight Cut Fries  </option> </div>
									  <div><option data-img-src="../images/menucon2/crisscross.png" value="4">  Crisscoss Fries  </option></div>
								</div>
							</div>
							</select>
					</div>


					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your cheese:</font></text>
						<br>
						<br>
						<select id="cheese" name="cheese" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/cheese1.png" value="9">  Quickmelt  </option>
						  <option data-img-src="../images/menucon2/mozarellla.png" value="7">  Mozarella  </option>
						  
						</select>
					</div>


					<div class="row">
						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your meat:</font></text>
							<br>
							<br>
							<select id="meats" name="meats[]" multiple="multiple" class="image-picker show-html">
							  <option data-img-src="../images/menucon2/pepperoni.png" value="11">  Pepperoni  </option>
							  <option data-img-src="../images/menucon2/hotdog.png" value="17">  Hotdog  </option>
							  <option data-img-src="../images/menucon2/ham.png" value="15">  Ham  </option>
							  <option data-img-src="../images/menucon2/bacon.png" value="19">  Bacon  </option>
							  <option data-img-src="../images/menucon2/sausage.png" value="13">  Hungarian Sausage  </option>
							</select>
						
						
					</div>

				</div>

				<!-- END OF FIRST COLUMN -->

				<!-- SECOND COLUMN -->
				<div class="col-md-4 col-md-offset-1">
					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your sauce:</font></text>
						<br>
						<br>
						<select id="sauce" name="sauce" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/marinara.png" value="5">  Marinara  </option>
						  <option data-img-src="../images/menucon2/oliveoil.png" value="6">  Olive Oil  </option>
						  
						</select>
					</div>


					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your chili:</font></text>
						<br>
						<br>
						<select id="chilis" name="chilis[]" multiple="multiple" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/rbp.png" value="22">  Red Bell Pepper  </option>
						  <option data-img-src="../images/menucon2/gbp.png" value="21">  Green Bell Pepper  </option>
						  <option data-img-src="../images/menucon2/chiliflakes.png" value="23">  Chili Flakes  </option>
						  
						</select>
					</div>


					<div class="row">
						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your toppings:</font></text>
							<br>
							<br>
							<select id="toppings" name="toppings[]" multiple="multiple" class="image-picker show-html">
							 
							  <option data-img-src="../images/menucon2/pineapple.png" value="24">  Pineapple  </option>
							  <option data-img-src="../images/menucon2/mushroom.png" value="26">  Mushrooms  </option>
							  <option data-img-src="../images/menucon2/tomatoes.png" value="28">  Tomatoes  </option>
							  <option data-img-src="../images/menucon2/onions.png" value="29">  Onions  </option>
							  
							</select>
					</div>

				</div>
				<!-- END OF SECOND COLUMN -->
				</div>
			</div>
		
		


		<!-- Large MENU -->
		<div id="large2" style="display:none">
		<br>
		<br>
			

				
			
				

				<div class="row">
				
				<input type="hidden" name="order" value="{{ $order->order_id }}" />
				<!-- FIRST COLUMN -->
				<div class="col-md-4 col-md-offset-2">

					<div class="row">
						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your base:</font></text>
							<br>
							<br>
							<select id="base" name="base2" class="image-picker show-html">
							<div id="wrapper">
								<div class="row">
									  <div><option data-img-src="../images/menucon2/base.png" value="2" data-img-label="Dofasdfdsugh">  Dough  </option></div>
								</div>
							</div>
							</select>
					</div>


					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your cheese:</font></text>
						<br>
						<br>
						<select id="cheese" name="cheese2" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/cheese1.png" value="10">  Quickmelt  </option>
						  <option data-img-src="../images/menucon2/mozarellla.png" value="8">  Mozarella  </option>
						  
						</select>
					</div>


					<div class="row">
						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your meat:</font></text>
							<br>
							<br>
							<select id="meats" name="meats2[]" multiple="multiple" class="image-picker show-html">
							  <option data-img-src="../images/menucon2/pepperoni.png" value="12">  Pepperoni  </option>
							  <option data-img-src="../images/menucon2/hotdog.png" value="18">  Hotdog  </option>
							  <option data-img-src="../images/menucon2/ham.png" value="16">  Ham  </option>
							  <option data-img-src="../images/menucon2/bacon.png" value="20">  Bacon  </option>
							  <option data-img-src="../images/menucon2/sausage.png" value="14">  Hungarian Sausage  </option>
							</select>
						
						
					</div>

				</div>

				<!-- END OF FIRST COLUMN -->

				<!-- SECOND COLUMN -->
				<div class="col-md-4 col-md-offset-1">
					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your sauce:</font></text>
						<br>
						<br>
						<select id="sauce" name="sauce2" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/marinara.png" value="5">  Marinara  </option>
						  <option data-img-src="../images/menucon2/oliveoil.png" value="6">  Olive Oil  </option>
						  
						</select>
					</div>


					<div class="row">
						<text><font face="Supercell-Magic" size="3" color="White">Choose your chili:</font></text>
						<br>
						<br>
						<select id="chilis" name="chilis2[]" multiple="multiple" class="image-picker show-html">
						  <option data-img-src="../images/menucon2/rbp.png" value="22">  Red Bell Pepper  </option>
						  <option data-img-src="../images/menucon2/gbp.png" value="21">  Green Bell Pepper  </option>
						  <option data-img-src="../images/menucon2/chiliflakes.png" value="23">  Chili Flakes  </option>
						  
						</select>
					</div>


					<div class="row">
						
							<text><font face="Supercell-Magic" size="3" color="White">Choose your toppings:</font></text>
							<br>
							<br>
							<select id="toppings" name="toppings2[]" multiple="multiple" class="image-picker show-html">
							 
							  <option data-img-src="../images/menucon2/pineapple.png" value="25">  Pineapple  </option>
							  <option data-img-src="../images/menucon2/mushroom.png" value="27">  Mushrooms  </option>
							  <option data-img-src="../images/menucon2/tomatoes.png" value="28">  Tomatoes  </option>
							  <option data-img-src="../images/menucon2/onions.png" value="29">  Onions  </option>
							  
							</select>
					</div>

				</div>
				<!-- END OF SECOND COLUMN -->
				</div>
			
			
		</div>
		<br>
		<br>
		<br>
		
		<center><font face="Supercell-Magic"> {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} </font></center>
	 	
	</center>
		{{ Form::close()}}	
	
</div>
		


    <script src="../bootstrap/js/image-picker.min.js"></script>
    <script src="../bootstrap/js/image-picker.js"></script>
     <script>
    $("select#size2").imagepicker({
          hide_select : false,
          show_label  : false
        })
    </script>

    <script>
    $("select#meats").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>

    <script>
    $("select#chilis").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>

    <script>
    $("select#sauce").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>

    <script>
    $("select#cheese").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>

    <script>
    $("select#toppings").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>

    <script>
    $("select#base").imagepicker({
          hide_select : true,
          show_label  : false
        })
    </script>



    <!-- Cashier -->
       <script>
          $(document).ready(function(){
              $('#size2').on('change', function() {
                if ( this.value == 'solo')
                {
                  $("#solo2").show();
                  $("#large2").hide();
                }
                else
                {
                  $("#solo2").hide();
                  $("#large2").show();
                }
              });
          });
      </script>


@stop