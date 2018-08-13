<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('Partials._head')
	</head>

	<body>
		@include('Partials._nav')
		
		@yield('header')
		
		<div class="container">
      
		      @include('Partials._message')

		      @yield('content')

		      @include('Partials._footer')
	    
	    </div><!--end of .container-->

	    @include('Partials._javascript')

	</body>
</html>
