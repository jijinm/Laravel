<!DOCTYPE html>
<html>
<head>
	<title>Rating results</title>
	<style type="text/css">
	table,td,th{
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center;
		width : 200px;
	}
	</style>
</head>
<body><table>
	<tr>
		<th>Actor</th>
		<th>Total Rating</th>
	</tr>
	@foreach($docs as $doc)
	<tr>
		<td>{{$doc->favactor}}</td>
		<td>{{$doc->sum}}</td>
	</tr>
	@endforeach
</table>
<h1>{{$message}}</h1>
<a href="/ratingform"><button>Back</button></a>
</body>
</html>