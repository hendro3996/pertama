<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }} ">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="{{route('kredit.index')}}">kredit</a>
				<a class="nav-item nav-link" href="{{route('merek.index')}}">merk</a>
				<a class="nav-item nav-link" href="{{route('spesifikasi.index')}}">spesifikasi</a>
				<a class="nav-item nav-link" href="{{route('tipe.index')}}">tipe</a>				
			</div>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>