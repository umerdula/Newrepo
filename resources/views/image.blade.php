@if (Session::has('success'))
<?php echo"<script>alert ('".Session::get('success')."')</script>" ?>
@endif

<form action="image" method="post" enctype="multipart/form-data">
  @csrf
  <div class="container">
    <label><b>name</b></label><br>
    <input type="text" placeholder=" Username" name="name" required><br>
    
   
    <label><b>Image</b></label><br>
    <input type="file" name="images"  required><br><br>
     <label for="name"> Name:</label><br><br>
  <input type="text" id="carname" name="carname" ><br>


  <label for="name">Model Year:</label><br>
  <input type="text" id="modelyear" name="modelyear" ><br>


  <label for="name">Colour:</label><br>
  <input type="text" id="colour" name="colour" ><br>


  <label for="name">Battery:</label><br>
  <input type="text" id="battery" name="battery" ><br>


  <label for="name">Top Speed:</label><br>
  <input type="text" id="topspeed" name="topspeed" ><br>


  <label for="name">Charging Hrs :</label><br>
  <input type="text" id="charginghrs" name="charginghrs" ><br>


  <label for="name">Price:</label><br>
  <input type="text" id="price" name="price" ><br>


  <label for="name">ARAI Range:</label><br>
  <input type="text" id="arairange" name="arairange" ><br>


  <label for="name">Vehicle Type:</label><br>
  <input type="text" id="bodytype" name="bodytype" ><br>


  <label for="name">Fuel Type:</label><br>
  <input type="text" id="fueltype" name="fueltype" ><br>


  <label for="name">No Of Seats:</label><br>
  <input type="text" id="noofseats" name="noofseats" ><br><br>

    <br><button type="submit" class="lbutton">submit</button>&nbsp;&nbsp;&nbsp;
    

 
  </div>
</form>