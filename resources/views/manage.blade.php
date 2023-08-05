 

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	
</head>
<body bgcolor="lightgreen">
	<form method="get" action="manage">
	@csrf
  @foreach($data as $in)
 		<table border="1">
 			<tr>
 				<!-- <th>image</th> -->
 				<th>name</th>
 				<th>carname</th>
 				<th>modelyear</th>
 				<th>Colour</th>
 				<th>Battry</th>
 				<th>Top Speed</th>
 				<th>Charging Hrs.</th>
 				<th>Price</th>
 				<th>ARAI Range.</th>
 				<th>Body Type</th>
				<th>Fuel Type</th>
 				<th>No of Seats</th> 
 				<th>option</th>				
 				<tr>
            	<!-- <td><img src="{{url('/images/'.$in->image)}}" width="100px" height="100px" align="left"/></td> -->
            	<td><h3>{{$in->name}}</h3></td>
            	<td>{{$in->carname}}</td>
            	<td>{{$in->modelyear}}</td>
            	<td>{{$in->colour}}</td>
            	<td>{{$in->battery}}</td>
            	<td>{{$in->topspeed}}</td>
            	<td>{{$in->charginghrs}}</td>
            	<td>{{$in->price}}</td>
            	<td>{{$in->arairange}}</td>
            	<td>{{$in->bodytype}}</td>
            	<td>{{$in->fueltype}}</td>
            	<td>{{$in->noofseats}}</td>
            	<td><a href="delete2/{{$in->id}}">Delete</a>
					<a href="edit2/{{$in->id}}">Edit</a>
				</td>
            </tr>
            <br clear="left"/>
            </tr>
        </table>
                @endforeach
<button class="button">
<a href="image">
	Add Vehicles
</a> 
</button>
</form>
</body>
</html>