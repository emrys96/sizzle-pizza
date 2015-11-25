@extends('layouts.default')

@section('content')

<div class="container">
	<div class="col-md-12">
	<br>
	<center><img src="../images/placeorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
		<div class="container">
			<div class="col-md-10">	
			<text><font face="Supercell-Magic" size="1" color="White">{{Auth::user()->username}}'s Cart!</font></text>
			</div>
		</div>	
	<div>
</div>	

@stop