<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
</head>
<body>
<form method="post" action="/register">
	@csrf
	<p><label for="name">Name </label>
	<input type="text" name="name" id="name">
    @error('name')
    <small>{{ $message }}</small>
    @enderror</p>
	
    <p><label for="branch">Branch </label>
	<input type="text" name="branch" id="branch">
    @error('branch')
    <small>{{ $message }}</small>
    @enderror</p>
	
    <p><label for="totalmarks">Total Mark </label>
	<input type="number" name="totalmarks" id="totalmarks">
    @error('totalmarks')
    <small>{{ $message }}</small>
    @enderror</p>
	
	<p><input type="submit" name="submit" value="Submit"></p>

</form>

<p><a href="/viewallstudents"><button>View All</button></a></p>
<p><a href="/viewtoppers"><button>View Toppers</button></a></p>
<p><a href="/viewcount"><button>Total Count</button></a></p>
</body>
</html>