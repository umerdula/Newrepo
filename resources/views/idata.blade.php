<form method="post" action="/edit2" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{$data['id']}}">
	<input type="file" name="images"  value="{{$data['images']}}"><br><br>
	<input type="text" name="name" value="{{$data['name']}}"/><br/>
<input type="text" name="modelyear" value="{{$data['modelyear']}}"/><br/>
<input type="text" name="colour" value="{{$data['colour']}}"/><br/>
<input type="text" name="battery" value="{{$data['battery']}}"/><br/>
<input type="text" name="topspeed" value="{{$data['topspeed']}}"/><br/>
<input type="text" name="charginghrs" value="{{$data['charginghrs']}}"/><br/>
<input type="text" name="price" value="{{$data['price']}}"/><br/>
<input type="text" name="arairange" value="{{$data['arairange']}}"/><br/>
<input type="text" name="bodytype" value="{{$data['bodytype']}}"/><br/>
<input type="text" name="fueltype" value="{{$data['fueltype']}}"/><br/>
<input type="text" name="noofseats" value="{{$data['noofseats']}}"/><br/>

	<input type="submit" value="Update" />
</form>