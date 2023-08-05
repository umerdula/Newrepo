<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
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
<body bgcolor="#ddd">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<a href="/home"><span class="material-symbols-outlined">arrow_back</span>
</a>
		<h1 align="center">Profile</h1>
	

<table border="1" align="center" bgcolor="#11cf4d">
	<tr>
		<th> ID </th>
		<th>Name</th>
		<th>Phone no</th>
		<th>Email</th>
		<th>Password</th>
		<!-- <th>Role</th> -->
				
	</tr>

	@foreach($data as $in)
	<tr>
		<td>{{$in->id}}</td>
		<td>{{$in->name}}</td>
		<td>{{$in->phoneno}}</td>
		<td>{{$in->email}}</td>
		<td>{{$in->password}}</td>
		<!-- <td>{{$in->role}}</td> -->		
	</tr>
	@endforeach	
</table>
<script type="text/javascript">
	document.getElementById("back").onclick = function () {
    	location.href = "admin_page";
    };
</script>
</body>
</html>
