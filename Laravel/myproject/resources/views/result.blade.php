<!DOCTYPE html>
<html>
<head>
	
	<title>Result</title>
</head>
<body>
<h1>Result</h1>
@if(isset($add))
<p>Sum is {{$add}}</p>
@endif
@if(isset($sub))
<p>Difference is {{$sub}}</p>
@endif
@if(isset($mul))
<p>Multiplication result is {{$mul}}</p>
@endif
@if(isset($div))
<p>Division result is {{$div}}</p>
@endif
</body>
</html>