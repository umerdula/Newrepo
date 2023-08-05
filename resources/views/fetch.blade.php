<table border="1"> 
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Image</th>
		</tr>
	</thead>
	@foreach($d as $in)
	<tr>
    <td>
   			{{$in->id}}
	</td>
	<td>{{$in->name}}</td>
	<td><img src="{{url('/images/'.$in->image)}}"width="100" height="100"></td>
	</tr>
	@endforeach
</table>