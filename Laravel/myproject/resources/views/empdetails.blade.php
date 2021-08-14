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
	<title>Employee Details</title>
</head>
<body>
<h1>Employee Details</h1>
<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Designation</th>
    <th>Action</th>
	</tr>
	
@foreach ($employees as $employee)
    <tr>
    <td>{{ $employee->id }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->designation }}</td>
    <td><a href="/editdata/{{ $employee->id }}"><button>Edit</button></a><a href="/deleteemployee/{{ $employee->id }}"><button>Delete</button></a></td>
    </tr>
@endforeach
	
</table>
</ul>
<p><a href="/empform"><button>Registration Page</button></a></p>
</body>
</html>