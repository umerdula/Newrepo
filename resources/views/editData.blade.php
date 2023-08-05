<form method="get" action="/edit">
	@csrf
	<input type="hidden" name="id" value="{{$data['id']}}">
	<input type="text" name="name" value="{{$data['name']}}"/><br/>
<input type="text" name="price" value="{{$data['price']}}"/><br/>
<input type="text" name="color" value="{{$data['color']}}"/><br/>
<input type="text" name="year" value="{{$data['year']}}"/><br/>
<input type="text" name="vtype" value="{{$data['vtype']}}"/><br/>

	<input type="submit" value="Update" />
</form>