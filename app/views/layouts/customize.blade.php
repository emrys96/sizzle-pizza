<!doctype html>
<html>
<head>
	@include('includes.head')
</head>


<body background="../images/backgroun4.jpg">

	

<div class="container">
	<div class="panel">
	
	<!-- <div class="row" > -->
	@include('includes.header')
<!-- 	</div> -->

	
	
	<div class="container">
	<br>
	<br>
	 <text><font face="Supercell-Magic" size="6" color="White"><center>Customize Your Pizza</center></font></text>
	<br>
    	<div class="col-md-10 col-md-offset-1">	
    	<!-- <div class="panel panel"> -->
	        <center>             
	               <table class="table table-striped table-hover">
	              <thead>
	                <tr>
	                    <td><center><a href="#" class="highlightit  trigger open" data-target="#firstContainer"><img src="../images/choose.png" class="img-rounded" alt="Cinque Terre" width="250" height="250" data-toggle="modal" data-target="#modal-3"></a></center></td>
	                
	                    <td><center><a href="#" class="highlightit  trigger open" data-target="#secondContainer"><img src="../images/inputdetails.png" class="img-rounded" alt="Cinque Terre" width="250" height="250" data-toggle="modal" data-target="#modal-4"></a></center></td> 
	              
	                    <td><center><a href="#" class="highlightit  trigger open" data-target="#thirdContainer"><img src="../images/checkout.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></a></center></td>
	                   
	                    
	                </tr>               
	              </thead>          
	            </table>
	        </center>
	    </div>
		<!-- </div> -->
	    </div> 

	<div class="row">
	
		@yield('content')
		
	</div>

	<br>
	<br>
	<br>
	</div>
</div>

	@include('includes.foot')
	
</body>
</html>