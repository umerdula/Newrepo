<form method="post" action="caredit">
	@csrf
	<input type="hidden" name="id" value="{{$car['id']}}">
	<input type="text" name="name" value="{{$car['name']}}"/><br/>
<input type="text" name="modelyear" value="{{$car['modelyear']}}"/><br/>
<input type="text" name="colour" value="{{$car['colour']}}"/><br/>
<input type="text" name="battery" value="{{$car['battery']}}"/><br/>
<input type="text" name="topspeed" value="{{$car['topspeed']}}"/><br/>
<input type="text" name="charginghrs" value="{{$car['charginhrs']}}"/><br/>
<input type="text" name="price" value="{{$car['price']}}"/><br/>
<input type="text" name="arairange" value="{{$car['arairange']}}"/><br/>
<input type="text" name="bodytype" value="{{$car['bodytype']}}"/><br/>
<input type="text" name="fueltype" value="{{$car['fueltype']}}"/><br/>
<input type="text" name="noofseats" value="{{$car['noofseats']}}"/><br/>

	<input type="submit" value="Update" />
</form>