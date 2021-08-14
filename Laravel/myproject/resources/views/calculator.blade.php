<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form method="post" action="/getresult">
	@csrf
    <h1>Calculator</h1>
	<p><label for="num1">First Number </label>
	<input type="number" name="num1" id="num1" required>
    </p>
	
    <p><label for="num2">Second Number </label>
	<input type="number" name="num2" id="num2" required>
    </p>
	
	<p><input type="submit" name="add" value="Add"></p>
    <p><input type="submit" name="subtract" value="Subtract"></p>
    <p><input type="submit" name="multiply" value="Multiply"></p>
    <p><input type="submit" name="divide" value="Divide"></p>

</form>
</body>
</html>