<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 600,
  'GRAD' 0,
  'opsz' 48,
}
</style>
</head>
<body style="background-color: #ddd;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<a href="/home"><span class="material-symbols-outlined">arrow_back</span>
</a>

<center >
	          @include('layout_yield')<br><br>
	          
	<h1>Car details</h1>
	<h2>Book a test drive or rental car in your favourite color at your door step.</h2>
	<h1>Book now</h1>
<table border="2" style="width:350px;height: 400px;text-align: center; background-color: #11cf4d;">
	
	<tr>
		<th>
			Name
		</th>
		<td>
		{{$data[0]->name}}
		</td>
	</tr>
	<tr>
		<th>
			Model year
		</th>
		<td>
			{{$data[0]->modelyear}}
		</td>
	</tr>
	<tr>
		<th>
			Colour
		</th>
		<td>
			{{$data[0]->colour}}
		</td>
	</tr>
	<tr>
		<th>
			Battery
		</th>
		<td>
			{{$data[0]->battery}}
		</td>
	</tr>
	<tr>
		<th>
			Top Speed
		</th>
		<td>
			{{$data[0]->topspeed}}
		</td>
	</tr>
	<tr>
		<th>
			Charging Hrs.
		</th>
		<td>
			{{$data[0]->charginghrs}}
		</td>
	</tr>
	<tr>
		<th>
			Price
		</th>
		<td>
			{{$data[0]->price}}
		</td>
	</tr>
	<tr>
		<th>
			ARAI Range
		</th>
		<td>
		{{$data[0]->arairange}}
		</td>
	</tr>
	<tr>
		<th>
			Body Type
		</th>
		<td>
			{{$data[0]->bodytype}}
		</td>
	</tr>
	<tr>
		<th>
			Fuel Type
		</th>
		<td>
			{{$data[0]->fueltype}}
		</td>
	</tr>
	<tr>
		<th>
			No of Seats
		</th>
		<td>
			{{$data[0]->noofseats}}
		</td>
	<tr>

</table><br><br>
<button class="button button2" id="myButton">Test Drive</button>

<button class="button button2" id="rButton">Rental car</button><br><br>


<script>
  document.getElementById("myButton").onclick = function () {
        location.href = "/tform";
    };

    document.getElementById("rButton").onclick = function () {
    	location.href = "/rform";
    };

    document.getElementById("back").onclick = function () {
    	location.href = "/home";
    };
</script>

</center>
</body>
</html>


