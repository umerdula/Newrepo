<form method="get" action='/edit'>
    <input type="hidden" name="id" value="{{$data['id']}}"/>
    <input type="text" name="name" value="{{$data['name']}}"/>
    <input type="text" name="address" value="{{$data['address']}}"/>
    <input type="date" name="dob" value="{{$data['dob']}}"/>
    <input type="submit" name="ubdate" />

</form>