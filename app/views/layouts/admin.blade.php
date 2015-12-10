<!doctype html>
<html>
<head>
	@include('includes.head')
</head>


<body background="../images/background2.jpg">

	

<div class="container">
	<div class="panel">
	
		<!-- <div class="row" > -->
			@include('includes.header')
	<!-- 	</div> -->

		
		
			<div class="row">
				@include('includes.navBar3')
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