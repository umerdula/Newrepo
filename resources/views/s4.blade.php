<!DOCTYPE html>
<html>
<head>
<style>
	  body{
    background-color: lightgrey;
  }
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
<body>
<center style="background-color: #4CAF50;">
	@include('layout_yield')<br><br>
	<h1>Car details</h1>
	<h2>Book a test drive or rental car in your favourite color at your door step.</h2>
	<h1>Book now</h1>
<table border="2" style="width:400px;height: 450px;text-align: center;">
	<tr>
		<th>
			Name
		</th>
		<td>
			Photon LP
	</td>
	</tr>
	<tr>
		<th>
			Model year
		</th>
		<td>
			2022
		</td>
	</tr>
	<tr>
		<th>
			Colour
		</th>
		<td>
			<label>
				
		<select type="Color">
		<option value="">Gold</option>
		<option value="">Black</option>

	</select>
			</label>
		</td>
	</tr>
	<tr>
		<th>
			Battery
		</th>
		<td>
			4 KWH
		</td>
	</tr>
	<tr>
		<th>
			Top Speed
		</th>
		<td>
			45 kmph
		</td>
	</tr>
	<tr>
		<th>
			Charging Hrs.
		</th>
		<td>
			5 hours 
		</td>
	</tr>
	<tr>
		<th>
			Price
		</th>
		<td>
		Rs. 86,391
		</td>
	</tr>
	<tr>
		<th>
			ARAI Range
		</th>
		<td>
	181km
		</td>
	</tr>
	<tr>
		<th>
			Body Type
		</th>
		<td>
			Scooter
		</td>
	</tr>
	<tr>
		<th>
			Fuel Type
		</th>
		<td>
			Electric
		</td>
	</tr>
	<tr>
		<th>
			No of Seats
		</th>
		<td>
		2
		</td>
	<tr>

</table><br><br>
<button class="button button2" id="myButton">Test Drive</button>

<button class="button button2" id="rButton">Rental car</button><br><br>

<button class="button button2" id="back">Back</button>

<script>
  document.getElementById("myButton").onclick = function () {
        location.href = "tform";
    };

    document.getElementById("rButton").onclick = function () {
    	location.href = "rform";
    };

    document.getElementById("back").onclick = function () {
    	location.href = "home";
    };
</script>

</center>
</body>
</html>