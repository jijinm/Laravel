<!DOCTYPE html>
<html>
<head>
	<title>Update Employee</title>
</head>
<body>
	<h1>Update Employee Details</h1>
<form method="post" action="/updatedata">
	@csrf
	@foreach ($empdatas as $empdata)
	<input type="hidden" name="id" value="{{$empdata->id}}">
	<p><label for="empname">Name </label>
	<input type="text" name="empname" id="empname" value="{{$empdata->name}}" required></p>
    <p><label for="designation">Designation </label>
	<input type="text" name="designation" id="designation" value="{{$empdata->designation}}" required></p>
	@endforeach
	<input type="submit" name="submit" value="Update">
</form>
<p><a href="/empform"><button>Registration Page</button></a></p>
</body>
</html>