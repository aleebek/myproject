<!doctype html>
<html lang="en">

<head>
	@include('partials._head')
</head>

<body>

	@include('partials._navs')

	<div class="container">

		@yield('content') 
		
		@include('partials._footer')

	</div>
	<!-- End of .container -->


	@include('partials._javascript')
	
</body>

</html>