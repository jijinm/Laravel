<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    table,th,td{
    	border : 1px solid black;
    	border-collapse: collapse;
    	width: 400px;
    	height: 50px;
    }
	</style>
	<title>Users</title>
</head>
<body>
<h1>Users</h1>
<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Created At</th>
	<th>Updated at</th>
	</tr>
	
@foreach ($data as $value)
    <tr>
    <td>{{ $value->id }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $value->created_at }}</td>
    <td>{{ $value->updated_at }}</td>
    </tr>
@endforeach
	
</table>
</ul>
</body>
</html>