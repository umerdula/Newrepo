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
	
</head>
<body>
	<section>
		<dl>
		<dt>
		<h2>
			<ul style="list-style-type: none; text-align: center;">
				<li> NOTES</li>
			</ul>
		</h2>
		</dt>
		<dd>
		<ul align="left">
	    	<li>
			Rental Car will Charge you 10<span>&#8377;</span> Per km.
			</li>
			<li>
			If any Damage caused by customer, The customer will pay panelty.		
			</li>
			<li>
			Customer must check "Car Meter" and click picture.
			</li>
			<li>
			If Kms number increased by the given km then extra money will be charged. 
			</li>
			<li>
				At the time of retuning the vehicle company will contact you before 45 mins of given time. 
			</li>
			<li>
				If any legal action happnes, comapny will not be responsible<br>
				(for eg. Police Custody, Driving without License, etc).
			</li>
			<li>
				Driver must carry driving license while driving.
			</li>
			<li>
				All necessary documents are delivered along with your vehicle.
			</li>
		</ul>
		</dd>
		</dl>
	<div class="form-box">
		<div class="form-value">
			<form method="post" action="rform">  
			@csrf  
			<h1>Rental Car Form </h1><br>
			<center>
				<div class="inputBox">
					<input type="text" name="name" maxlength="30" required>
					<span>Name</span> 
				</div><br>
				<div class="inputBox">
					<input type="text" name="phoneno" maxlength="10" required>
					<span>Mobile No</span>
				</div><br>
				<div class="inputBox">
					 <input type="text" name="address" maxlength="50" required>
					 <!-- <textarea required maxlength="50" placeholder="Address"></textarea> --> 
					 <span>Address</span>
				</div><br>
				<div class="inputBox"><br>
					<!-- <ion-icon name=""></ion-icon> -->
					<input type="date" name="bookingdate"  required> 
					<span>Booking Date</span>
				</div><br>
				<div class="inputBox">
					<input type="time" name="bookingtime" required>
					<span>Booking Time</span>
				</div><br>
				<div class="inputBox">
					<input type="date" name="returndate"  required> 
					<span>Return Date</span>
				</div><br>
				<div class="inputBox">
					<input type="time" name="returntime"  required>
					<span>Return Time</span>
				</div><br>
				<!-- <div class="inputBox">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 -->
					<div class="inputBox">
					<input type="text" name="carname" maxlength="10" required>
					<span>Vehicle Name</span>
				</div><br>
				<!-- <div class="inputBox">
					<input type="file" name="file" required><br>
					<span>Driving License</span>
				</div><br><br> -->
			<!-- </form>
		</div> -->
		<label>
		<button onclick="myFunction()" onclick="resetFun">
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
		
 		</label>
 		</center>
 		</div>
 	</div>
	</section>
</form>
<script>
	function myFunction() {
  		alert(" Rental Car Booked Successfully..!!");
  	}
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>














<!-- <style>
		#form{
			margin:0 auto;
			background:white;
			color:black; 
			width: 470px;
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
			  width: 15%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 2px solid #ccc;
			  box-sizing: border-box;
			}
		.hbutton {
			  background-color:#04AA6D;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none; 
			  cursor: pointer;
			  width: 30%;	
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

/*		.reset {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}*/
	</style>
</head>
<body align="center">
	<div class="container">
		<button style="float:right;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon></button> <br><br>
	    <button class="hbutton"><h1>
		Rental Car Form </h1></button><br>
		<b/>
				Name: <input type="text" name="Name" maxlength="30" placeholder="Name" required> <br> <br>
				Mobile No: <input type="number" name="Mobile No" maxlength="10" placeholder="Mobile no" required> <br><br>
				Address: <textarea required maxlength="50" placeholder="Address"></textarea> <br><br>
				Booking Date: <input type="date" name="Booking Date"  required> <br><br>
				Booking Time: <input type="time" name="time"> <br><br>
				Return Date: <input type="date" name="return Date"  required> <br><br>
				Return Time: <input type="time" name="time"><br></br>
				Vehicle Name:
				</label>
				<select name="name" id="name" type="text">
					<option value="">Car1</option>
					<option value="">Car2</option>
					<option value="">Car3</option>
					<option value="">Car4</option>
					<option value="">Car5</option>
					<option value="">Car6</option>
				</select> <br><br>
				Driving License : <input type="file" name="file" required> <br><br>
			 </form>
		</div> 
		<label>
		<button type="submit" class="lbutton">Submit</button> 
 		<button type="reset" onclick="resetFun()" class="lbutton">Reset</button> 
 		</label>
 		<hr>

 		<h3>
			Notes :- 
		</h3>	
		<ul align="left">
	    	<li>
			Rental Car will Charge you 10<span>&#8377;</span> Per km.
			</li>
			<li>
			If any Damage caused by customer, The customer will pay panelty.		
			</li>
			<li>
			Customer must check "Car Meter" and click picture.
			</li>
			<li>
			If Kms number increased by the given km then extra money will be charged. 
			</li>
			<li>
				At the time of retuning the vehicle company will contact you before 45 mins of given time. 
			</li>
			<li>
				If any legal action happnes, comapny will not be responsible (for eg. Police Custody, Driving without License, etc).
			</li>
			<li>
				Driver must carry driving license while driving.
			</li>
			<li>
				All necessary documents are delivered along with your vehicle.
			</li>
		</ul>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body> -->
