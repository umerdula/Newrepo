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
		<div class="jumbotron">
			<!-- <h1> Cured opration</h1> -->
			<table class="table  table-stripped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
  
    </tr>
  </thead>
  <tbody>
  	@foreach ($data as $in)
    <tr>
      <th scope="row">{{$in->id}}</th>
      <th scope="row">{{$in->name}}</th>
      <th scope="row">{{$in->name}}</th>
    </tr>
    @endforeach
   
  </tbody>
</table>
		</div>
	</div>
</body>
</html>