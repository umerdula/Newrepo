<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="lightgreen">
		<h1 align="center"> Profile </h1>
		@csrf

<table border="1" align="center">
	<tr>
		<th> ID </th>
		<th>Name</th>
		<th>Email</th>
		<th>password</th>
		<!-- <th>year</th>
		<th>vtype</th>
		<th>Opraction</th> -->
		
	</tr>
	@foreach($login as $in)
	<tr>
		<td>{{$in['id']}}</td>
		<td>{{$in['name']}}</td>
		<td>{{$in['email']}}</td>
		<td>{{$in['password']}}</td>
		<!-- <td>{{$in['year']}}</td>
		<td>{{$in['vtype']}}</td> -->
		
		<td><a href="delete/{{$in['id']}}">Delete</a>
			<a href="edit/{{$in['id']}}">Edit</a></td>
		
	</tr>
	@endforeach	
</table>
</body>
</html>
