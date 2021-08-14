<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
</head>
<body>
<form method="post" action="/insert">
	@csrf
	<p><label for="studname">Name </label>
	<input type="text" name="studname" id="studname"></p>
	@error('studname')
    <small>{{ $message }}</small>
    @enderror
    <p><label for="course">Course </label>
	<input type="text" name="course" id="course"></p>
	@error('course')
    <small>{{ $message }}</small>
    @enderror
    <p><label for="place">Place </label>
	<input type="text" name="place" id="place"></p>
	@error('place')
    <small>{{ $message }}</small>
    @enderror
    <p><label for="phone">Phone </label>
	<input type="number" name="phone" id="phone"></p>
	@error('phone')
    <small>{{ $message }}</small>
    @enderror
	<input type="submit" name="submit" value="Register">
</form>
</body>
</html>