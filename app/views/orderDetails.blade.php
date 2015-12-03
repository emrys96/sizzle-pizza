@extends('layouts.default')


@section('content')
 

<div class="container">
	<br>
	<text><font face="Supercell-Magic" size="5" color="White"><center>Order Details</center></font></text>
	<div class="col-md-10 col-md-offset-1">
		<text><font face="Supercell-Magic" size="1" color="White">Point Your Location</font></text>
		<br>
		<br>
		<div id="googleMap" style="width:100%;height:380px;"></div>
	</div>


</div>



<div class="col-md-offset-3">
	<div>Long: 
  <input type="text" id="lngclicked"></span></div>
</div>
<div>Lat: 
  <input type="text" id="latclicked"></span></div>
</div>

</div>


@stop