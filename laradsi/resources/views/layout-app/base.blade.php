<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('tittle')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	
	<div class="container">
		@yield('content')
	</div>

	<script src="{{asset('js/jquery-3.1.1.js')}}"></script> 
	<script src="{{asset('js/bootstrap.min.js')}}"></script> 
</body>
</html>