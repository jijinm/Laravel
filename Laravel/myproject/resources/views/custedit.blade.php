<!DOCTYPE html>
<html>
<head>
	<title>Update Customer</title>
</head>
<body>
	<h1>Update Customer Details</h1>
<form method="post" action="/updatedetails">
	@csrf
	@foreach ($custdatas as $custdata)
	<input type="hidden" name="id" value="{{$custdata->id}}">
	<p><label for="name">Name </label>
	<input type="text" name="name" id="name" value="{{$custdata->name}}" required></p>
    <p><label for="location">Location </label>
	<input type="text" name="location" id="location" value="{{$custdata->location}}" required></p>
	<p><label for="phone">Phone </label>
	<input type="number" name="phone" id="phone" value="{{$custdata->phone}}" required></p>
	@endforeach
	<input type="submit" name="submit" value="Update">
</form>
<p><a href="/customerform"><button>Registration Page</button></a></p>
</body>
</html>