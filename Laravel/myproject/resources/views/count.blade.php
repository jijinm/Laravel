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
	<title>Total Count</title>
</head>
<body>
<h1>Total Count</h1>
<table>
	<tr>
	<th>Branch</th>
	<th>Total Count</th>
	</tr>
    <tr>
    <td>Civil</td>
    <td>{{$civil}}</td>
    </tr>
    <tr>
    <td>Mechanical</td>
    <td>{{$mechanical}}</td>
    </tr>
    <tr>
    <td>Electrical</td>
    <td>{{$electrical}}</td>
    </tr>
</table>
</ul>
</body>
</html>