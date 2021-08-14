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
	<title>Toppers</title>
</head>
<body>
<h1>Toppers</h1>
<table>
	<tr>
	<th>Name</th>
	<th>Branch</th>
	<th>Total Marks</th>
	</tr>
	
@foreach ($civil as $value)
    <tr>
    <td>{{ $value->name }}</td>
    <td>{{ $value->branch }}</td>
    <td>{{ $value->totalmarks }}</td>
    </tr>
@endforeach
@foreach ($mechanical as $value)
    <tr>
    <td>{{ $value->name }}</td>
    <td>{{ $value->branch }}</td>
    <td>{{ $value->totalmarks }}</td>
    </tr>
@endforeach
@foreach ($electrical as $value)
    <tr>
    <td>{{ $value->name }}</td>
    <td>{{ $value->branch }}</td>
    <td>{{ $value->totalmarks }}</td>
    </tr>
@endforeach
	
</table>
</ul>
</body>
</html>