<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
<!-- <h1>Hello</h1>
<h2>Let's start learning Laravel</h2> -->
<!-- <h2>Welcome {{$name}} from {{$location}}</h2> -->
<h3>Welcome <?php echo $name;?></h3>
@if($location == 'Alappuzha')
<h3>{{"You are from Alappuzha"}}</h3>
@else
<h3>{{"You are not from Alappuzha"}}</h3>
@endif
</body>
</html>