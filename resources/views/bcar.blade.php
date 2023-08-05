<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">
            #form {
                 border: 2px;
                 width: 350px;
                 height: 500px;
                 text-align: center;
                 background-color: #bbb;
                 margin: 0 auto;
            }
        </style>
    </head>
    <body>
        
        <form method="post" action="bcar" id="form">
            @csrf
                        <label for="name"> Name:</label><br><br>
  <input type="text" id="name" name="name" ><br>


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
  <input type="submit" value="Submit">
 
        </form>

        
        <script src="" async defer></script>
    </body>
</html>