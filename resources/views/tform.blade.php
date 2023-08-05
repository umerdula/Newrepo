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
			<form method="post" action="tform">   
			@csrf 
			 	<h1>Test Drive Form </h1><br>
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
					<input type="text" name="address" maxlength="30" required>
					<span>Address</span> 
				</div><br>

				<div class="inputBox">
					<input type="date" name="bookingdate"  required> 
					<span>Booking Date</span>
				</div><br>
				<div class="inputBox">
					<input type="time" name="bookingtime" required>
					<span>Time slot</span> 
				</div><br>
				<div class="inputBox">
					<input type="text" name="carname" required>
					<span>Vehicle Type</span> 
				</div><br>
				<div class="inputBox">
					<input type="text" name="carcolor"  required>
					<span>Vehicle Color</span> 
				</div><br>
				<!-- <div class="inputBox">
					<input type="file" name="file" required><br>
					<span>Driving License</span>
				</div> -->
			<!-- </form>
		</div> -->
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
		<!-- <button type="submit" class="lbutton" onclick="myFunction()">Submit</button><br><br> -->
 		<!-- <button type="reset" onclick="resetFun()" class="lbutton">Reset</button>  -->
 		</label>
 		</center>
 		</div>
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


