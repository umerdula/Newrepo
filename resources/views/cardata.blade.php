<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="lightgreen">
		<!-- <h1 align="center"> User  data </h1> -->
		@csrf

<table border="1" align="center">
	<tr>
    @foreach($car as $in)
    <tr>
		<th> ID </th>
        <td>{{$in['id']}}</td>
    </tr>
    <tr>
		<th>Name</th>
        <td>{{$in['name']}}</td>
    </tr>
    <tr>
		<th>Model Year</th>
        <td>{{$in['modelyear']}}</td>
    </tr>
    <tr>
		<th>Colour</th>
        <td>{{$in['colour']}}</td>
    </tr>
    <tr>
        <th>Battery</th>
        <td>{{$in['battery']}}</td>
    </tr>
    <tr>
        <th>Top Speed</th>
        <td>{{$in['topspeed']}}</td>
    </tr>
    <tr>
        <th>Charging Hrs.</th>
        <td>{{$in['charginghrs']}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$in['price']}}</td>
    </tr>
    <tr>
        <th>ARAI Range</th>
        <td>{{$in['arairange']}}</td>
    </tr>
    <tr>
        <th>Body Type</th>
        <td>{{$in['bodytype']}}</td>
    </tr>
    <tr>
        <th>Fuel Type</th>
        <td>{{$in['fueltype']}}</td>
    </tr>
    <tr>
        <th>No of Seats</th>
        <td>{{$in['noofseats']}}</td>
    </tr>
    <td><a href="delete/{{$in['id']}}">Delete</a>
			<a href="edit/{{$in['id']}}">Edit</a></td>
		
	</tr>
    @endforeach
	
</table>
</body>
</html>