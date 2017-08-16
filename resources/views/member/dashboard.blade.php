<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>dashboard member</title>
	<link rel="stylesheet" href="">
</head>
<body>

@if (session('message'))
<p>{{ session('message') }}</p>
@endif

<h3>hallo member {{Auth::User()->name}}</h3>
	
</body>
</html>