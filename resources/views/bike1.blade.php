<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="bike1" method="post">
			@csrf
			<div class="form-group">
				<label>name</label>
				<input type="text" name="name" class="form-control" placeholder="enter a name of bike" >
			</div>

			<div class="form-group">
				<div class="custom-file">
				<input type="text"  name="price" class="custome-file-input">
				<label class="custome-file-input"> price</label>
				</div>
			</div>
			<button type="submit" name="submit">save data</button>
		</form>
	</div>
</body>
</html>