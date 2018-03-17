<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.flash-message')
		@yield('content')
	</div>

<footer class="footer text-center">
	<p>Copyright &copy; 2018 Todo List</p>
</footer>
</body>
</html>