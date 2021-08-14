<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
</head>
<body>
<form method="post" action="/insertdata">
	@csrf
	<label for="uname">Name: </label>
	<input type="text" name="username" id="uname" class="@error('username') is-invalid @enderror"><br>
	@error('username')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
	<input type="submit" name="submit" value="Insert">
</form>
</body>
</html>