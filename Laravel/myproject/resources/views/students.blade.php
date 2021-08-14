<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    table,th,td{
    	border : 1px solid black;
    	border-collapse: collapse;
    	width: 400px;
    	height: 50px;
        text-align: center;
    }
	</style>
	<title>Students</title>
</head>
<body>
<h1>Students</h1>
<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Branch</th>
	<th>Total Marks</th>
	</tr>
	
@foreach ($details as $value)
    <tr>
    <td>{{ $value->id }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $value->branch }}</td>
    <td>{{ $value->totalmarks }}</td>
    </tr>
@endforeach
	
</table>
</ul>
</body>
</html>