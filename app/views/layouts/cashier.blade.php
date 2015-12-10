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

		
		
			<div class="row">
				@include('includes.navBar2')
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