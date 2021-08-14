<!DOCTYPE html>
<html>
<head>
	<title>Employee Form</title>
</head>
<body>
	<h1>Employee Registration Form</h1>
<form method="post" action="/insertempdata">
	@csrf
	<p><label for="empname">Name </label>
	<input type="text" name="empname" id="empname" required></p>
    <p><label for="designation">Designation </label>
	<input type="text" name="designation" id="designation" required></p>
	<input type="submit" name="submit" value="Register">
</form>
   <p><a href="/showemployees"><button>Employee List</button></a></p>
</body>
</html>