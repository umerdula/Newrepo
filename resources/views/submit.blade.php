   <head>
     <style>
          .button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.7),0 17px 50px 0 rgba(0,0,0,0.19);
}
     </style>
</head>
<body style="background-color: #ddd; text-align: center;"> 
    <br><br> <h1>
          Upadte Your Booking Details
     </h1><br>
<form method="get" action="/edit">
     @csrf
       <input  name="id" value="{{$data['id']}}"> 
    Name: &nbsp; <input type="text" name="name" value="{{$data['name']}}"/><br><br>
Contact No:  &nbsp;<input type="text" name="phoneno" value="{{$data['phoneno']}}"/><br/><br>
Address:  &nbsp;<input type="text" name="address" value="{{$data['address']}}"/><br/><br>
Vehicle Name:  &nbsp;<input type="text" name="carname" value="{{$data['carname']}}"/><br/><br>
Booking Date:  &nbsp;<input type="text" name="bookingdate" value="{{$data['bookingdate']}}"/><br/><br>

 Booking Time Slot: &nbsp; <input type="text" name="bookingtime" value="{{$data['bookingtime']}}"/><br/><br>
<input type="submit" name="ubdate">
  <!-- <button class="button button2">Update</button>  -->
</form>

</body>