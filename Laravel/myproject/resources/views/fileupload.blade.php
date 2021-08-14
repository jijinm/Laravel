<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<style type="text/css">
		table, th,td{
      border: 1px solid black;
      border-collapse: collapse;
		}	
	</style>
</head>
<body>
<form method="post" action="/uploadfile" enctype="multipart/form-data">
	@csrf
	<label for="image">Upload an Image: </label>
	<input type="file" name="image" id="image" required>
	<input type="submit" name="submit" value="Upload">
</form><br>
@if(isset($details))
<h2>Uploaded Images</h2>
<table>
	<tr>
	<th>Id</th>
	<th>Image</th>
	</tr>
	@foreach ($details as $detail)
	<tr>
	<td>{{$detail->id}}</td>
	<td><img src="uploads/{{$detail->image}}" alt="Image" width="150" height="150">
	</td>
	</tr>
	@endforeach
</table>
@endif
</body>
</html>