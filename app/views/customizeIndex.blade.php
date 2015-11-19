@extends('layouts.default')


@section('content')
<br>

<div class="container-fluid">

  <div class="col-md-12"> 
   <text><font face="Supercell-Magic" size="6" color="White"><center>Customize Your Pizza</center></font></text>
	   <div class="row">
        <br>
        <br>
        <br>   
        <center>             
               <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <td><center><a class="highlightit"><img src="../images/choose.png" class="img-rounded" alt="Cinque Terre" width="250" height="250" data-toggle="modal" data-target="#modal-3"></a></center></td>
                
                    <td><center><a class="highlightit"><img src="../images/inputdetails.png" class="img-rounded" alt="Cinque Terre" width="250" height="250" data-toggle="modal" data-target="#modal-4"></a></center></td> 
              
                    <td><center><a class="highlightit"><img src="../images/checkout.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td>
                   
                    
                </tr>               
              </thead>          
            </table>
        </center>
     </div>
  </div>




</div>


<div class="container">
              <div class="row">
               
                  <div class="modal fade" id="modal-3">
                        <div class="modal-dialog modal-lg">
                          <div class="col-md-7 col-md-offset-3">
                            <div class="modal-content">
                               <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h3 class="modal-title"><text><font face="Supercell-Magic" size="5" color="Black"><center>Choose your Ingredients:</center></font></text></h3>
                               </div>
                      <div class="modal-body">       
                         
   <br>
<div class="container">                         
  <div class="row">
    <div class="col-md-4">

      
      <text><font face="Supercell-Magic" size="3" color="Black">Choose your base:</font></text>
      <br>
      <br>
      <select class="image-picker show-html">
        <option data-img-src="../images/pizza/dough1.png" value="Dough">  Dough  </option>
        <option data-img-src="../images/pizza/straightcut1.png" value="Straight Cut Fries">  Straight Cut Fries  </option>
        <option data-img-src="../images/pizza/crisscross.png" value="Crisscoss Fries">  Crisscoss Fries  </option>
      </select>
    </div>

  </div>

  <div class="row">
    <div class="col-md-4">
      <text><font face="Supercell-Magic" size="3" color="Black">Choose your cheese:</font></text>
      <br>
      <br>
      <select  class="image-picker show-html">
        <option data-img-src="../images/pizza/quickmelt1.png" value="Quickmelt">  Quickmelt  </option>
        <option data-img-src="../images/pizza/mozarella1.png" value="Mozarella">  Mozarella  </option>
        
      </select>
    
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <text><font face="Supercell-Magic" size="3" color="Black">Choose your meat:</font></text>
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

  <div class="row">
    <div class="col-md-4">
      <text><font face="Supercell-Magic" size="3" color="Black">Choose your chili:</font></text>
      <br>
      <br>
      <select multiple="multiple" class="image-picker show-html">
        <option data-img-src="../images/pizza/redbellpepper1.png" value="Red Bell Pepper">  Red Bell Pepper  </option>
        <option data-img-src="../images/pizza/greenbellpepper1.png" value="Green Bell Pepper">  Green Bell Pepper  </option>
        <option data-img-src="../images/pizza/chiliflakes1.png" value="Chili Flakes">  Chili Flakes  </option>
        
      </select>
    
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <text><font face="Supercell-Magic" size="3" color="Black">Choose your toppings:</font></text>
      <br>
      <br>
      <select multiple="multiple" class="image-picker show-html">
        <option data-img-src="../images/pizza/onions1.png" value="Onions">  Onions  </option>
        <option data-img-src="../images/pizza/mushrooms1.png" value="Pineapple">  Pineapple  </option>
        <option data-img-src="../images/pizza/pineapple1.png" value="Mushrooms">  Mushrooms  </option>
        <option data-img-src="../images/pizza/tomatoes1.png" value="Tomatoes">  Tomatoes  </option>
        
      </select>
    
    </div>
  </div>
</div>  
</div>

 <div class="modal-footer">
        <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">
      </div>
 </div>

</div>
 </div>
</div>
 </div>
 </div>
 </div>
 </div>

 





<!-- FOR INPUT ORDER DETAILS -->
<div class="container">
              <div class="row">
               
                  <div class="modal fade" id="modal-4">
                        <div class="modal-dialog modal-lg">
                          <div class="col-md-12">
                            <div class="modal-content">
                               <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h3 class="modal-title"></h3>
                               </div>
                      <div class="modal-body">       
                         
                           <div class="container">
                              <div class="row">
                                <div id="googleMap" style="width:71%;height:300px;"></div>
                              </div>
                           </div>                       
                         
                     </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
</div>


  
@stop