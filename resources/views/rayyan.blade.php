
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="{{url('cssfile/style1.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{url('style3.css')}}">
	<script>
		function resetFun() {
	  	document.getElementById("myForm").reset();
		}
</script>
	</script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
	<style>

  </style>
</head>
<body>
	<section>
	 	
		<dl>
		<dt>
		<h2>
			<ul style="list-style-type: none; text-align: center;font-family:'Abel',sans-serif;">
				<br>
				<li> Form Instructions </li>
				<br>
			</ul>
		</h2>
		</dt>
		<dd>
			<ul align="left">
	    	<li>
				For Booking a Test Drive Customer Must Enter Time.
			</li>
			<li>
				Accurate Details Must Be Filled By Customer
			</li>
			<li>
				Select Date On Which Customer Want Test Drive
			</li>
		</ul>
		</dd>
		<dt>
		<h2>
			<hr>
			
			<hr>
			<ul style="list-style-type: none; text-align: center;font-family:'Abel',sans-serif;">
				<br>
				<li> NOTES</li>
			</ul>
		</h2>
		</dt>
		<dd>
		<ul align="left">
	    	<li>
				Test Drive will Charge you 0<span>&#8377;</span>.
			</li>
			<li>
				If any Damage caused by customer, The customer will pay panelty.		
			</li>
			<li>
				Company employee will give all such information regarding the vehicle.
			</li>
			<li>
				Employee will take a picture/copy of your driving license for safety purpose. 
			</li>
			<li>
				Once you booked the ride, detials will provide you at "My Ride". 
			</li>
			<li>
				If any legal action happnes, comapny will not be responsible<br>(for eg. Police Custody, Driving without License, etc).
			</li>
			<li>
				Driver must carry driving license while driving and helmet for 2 wheeler.
			</li>
		</ul>
		
		</dd>
		</dl>
	<div class="form-box">
		<div class="form-value">
			<form>  
			<br><br>  
			 	<h1 align="center">Test Drive Form </h1><br>
			<center>
				<div class="inputBox">
					<input type="text" name="Name" maxlength="30" required>
					<span>Name</span> 
				</div><br>
				<div class="inputBox">
					<input type="number" name="Mobile No" maxlength="10" required>
					<span>Mobile No</span>
				</div><br>
				<div class="inputBox">
					 <input type="text" name="address" maxlength="50" required>
					 
					 <span>Address</span>
				</div><br>
				<div class="inputBox">
					<input type="date" name="booking Date"  required> 
					<span></span>
				</div><br>
			
				<div class="inputBox">
					

					 <input type="time" name="time" required>
					<span><br></span>
					 
				
				</div><br>
				<div class="inputBox">
				<input type="text" name="" required> 
					<span>Vehicle Type</span>
				</div><br>
				<div class="inputBox">
						<input type="text" name="color" required>
					<span>Vehicle Color</span>
				</div><br>
			
				<div class="inputBox">
					 <input type="file" name="file"  required>
					 
					 <span><p>Driving License</p></span>
				</div><br>
	
		<label>
		<button onclick="myFunction()">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Submit
		</button><br><br>
		<button onclick="resetFun()">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Reset
		</button>
<br><br>
		

</div>
	</section>
</form>
<script>
	function myFunction() {
		  alert("Test Drive Booked Successfully..!!");
  	}
</script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body> 
</html>


<!-- 	<script>
	   function myFunction() {
	   var element = document.body;
	   element.classList.toggle("dark-mode");
		}

		function resetFun() {
	  	document.getElementById("myForm").reset();
		}
	</script>
	<style>
		form{
			margin:0 auto;
		}
		body {
  			font-family: Arial, Helvetica, sans-serif;
  			color: white;
  			background-color: #282A35;
			}
		.dark-mode {
			  background-color: white;
			  color: black;
			}
		input[type=text], input[type=password] {
			  width: 20%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}
		.lbutton {
			  background-color:#04AA6D;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none; 
			  cursor: pointer;
			  width: 16%;	
			}

		.lbutton:hover {
			  opacity: 0.8;
			}

		.hbutton{
			background-color: #04AA6D;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none; 
			cursor: pointer;
			width: 30%;	
			}

		.hbutton:hover{
			opacity: 0.8;
		}

		.reset {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}
	</style>
</head>
<body align="center"> 
	<form name="tform" onsubmit="return validateform()">
		<button style="float:right;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon></button> <br><br>
	<button class="hbutton">
	<h2>Test Drive Form</h2>
	</button><br><b/>
	Name: <input type="text" name="Name" maxlength="30" placeholder="Name" required> <br></div>
	Mobile No: <input type="number" name="MobileNo" maxlength="10" placeholder="Mobile no" required>
		<br><br></div>
	<div class="inputbox">Address: <textarea required maxlength="50" placeholder="Address"></textarea> <br><br></div>
	<div class="inputbox">Booking Date: <input type="date" name="BookingDate" maxlength="30" required> <br><br><div>
	
	 <form> 
	<div class="inputbox">		
	<label>
		Choose Time Slot:
	</label>
	<select name="Time" id="Time" required>
		<option value="">10:00 AM - 11:00 AM</option>
		<option value="">11:00 AM - 12:00 PM</option>
		<option value="">12:00 AM - 1:00 PM</option>
		<option value="">2:00 AM  - 3:00 PM</option>
		<option value="">3:00 AM  - 4:00 PM</option>
		<option value="">4:00 AM  - 5:00 PM</option>
	</select>
	</form> </div> <br>
	<br>
	
	 <form>
		<div class="inputbox">
		<label>
	Vehicle type:
	  </label>
	  <select type="type" required>
	  	<option value="">Car1</option>
		<option value="">Bike1</option>
		<option value="">scooter1</option>
	  </select>
	</div>
	<br><br>
	
	
		<div class="inputbox">
	<label>
		Vehicle Color:
	</label>
	<select type="Color">
		<option value="">Red</option>
		<option value="">Black</option>
		<option value="">Silver</option>
		<option value="">White</option>
		<option value="">Darkpink</option>
		<option value="">Yellow</option>
	</select>
	<div>
	<br>

	<div class="inputbox">
	Driving License : <input type="file" name="file" required>
	</div> <br><br>
	 <button type="submit" class="lbutton" name="submit">Submit</button>
 	 <button type="reset" class="lbutton" onclick="resetFun()">Reset</button>
</form>	<br>
<hr> 
 		<h3 >
			Notes :- 
		</h3>	
		<ul align="left">

	    	<li>
			Test Drive will Charge you 0<span>&#8377;</span>.
			</li>
			<li>
			If any Damage caused by customer, The customer will pay panelty.		
			</li>
			<li>
			Company employee will give all such information regarding the vehicle.
			</li>
			<li>
				Employee will take a picture/copy of your driving license for safety purpose. 
			</li>
			<li>
			Once you booked the ride, detials will provide you at "My Ride". 
			</li>
			<li>
				If any legal action happnes, comapny will not be responsible (for eg. Police Custody, Driving without License, etc).
			</li>
			<li>
				Driver must carry driving license while driving and helmet for 2 wheeler.
			</li>
		</ul>
	<script>
		function required() {
		// 	var empt = document.MobileNo.Name.value || document.tform.Address.value || document.tform.BookingDate.value;
		// if (empt === "")
		// {
		// 	alert("Please input a Value");
		// 	return false;
		// }
		// else 
		// {
			alert("Your Ride Booked Successfully!! Have a safe Ride ");
		// 	return true; 
		// }
			
		}
	</script> -->
tform.blade.php
Displaying tform.blade.php.