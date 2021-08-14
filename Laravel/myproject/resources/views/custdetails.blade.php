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
	<title>Customer Details</title>
</head>
<body>
<h1>Customer Details</h1>
<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Location</th>
    <th>Phone</th>
    <th>Action</th>
	</tr>
	
@foreach ($customers as $customer)
    <tr>
    <td>{{ $customer->id }}</td>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->location }}</td>
    <td>{{ $customer->phone }}</td>
    <td><a href="/editdetails/{{ $customer->id }}"><button>Edit</button></a><a href="/deletecustomer/{{ $customer->id }}"><button>Delete</button></a></td>
    </tr>
@endforeach
	
</table>
</ul>
<p><a href="/customerform"><button>Registration Page</button></a></p>
</body>
</html>