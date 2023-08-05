
<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>price</th>
        
        <th>Opration</th>
    </tr>
    @foreach($data as $in)
    <tr>
        <td>{{$in['id']}}</td>
        <td>{{$in['name']}}</td>
        <td>{{$in['price']}}</td>
        
        <td><a href="delete/{{$in['id']}}">Delete</a>
        <a href="edit/{{$in['id']}}">Edit</a></td>
    </tr>
    @endforeach
</table>
