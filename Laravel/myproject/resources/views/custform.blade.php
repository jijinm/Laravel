<!DOCTYPE html>
<html>
<head>
	<title>Customer Form</title>
</head>
<body>
	<h1>Customer Registration Form</h1>
<form method="post" action="/insertcustdata">
	@csrf
	<p><label for="name">Name </label>
	<input type="text" name="name" id="name" required></p>
    <p><label for="location">Location </label>
	<input type="text" name="location" id="location" required></p>
	<p><label for="phone">Phone </label>
	<input type="number" name="phone" id="phone" required></p>
	<input type="submit" name="submit" value="Register">
</form>
   <p><a href="/showcustomers"><button>Customers List</button></a></p>
</body>
</html>