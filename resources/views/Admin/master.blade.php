<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('Admin.Partials._head')
	</head>
	
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			@include('Admin.Partials._header')

			@include('Admin.Partials._left-sidebar')
			<div class="content-wrapper">
			    @include('Admin.Partials._message')

				@yield('content')
  			</div>
			
			@include('Admin.Partials._footer')
		</div><!-- ./wrapper -->

		@include('Admin.Partials._javascript')
	</body>
</html>