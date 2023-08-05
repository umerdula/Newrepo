  <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
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
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <a href="home"><span class="material-symbols-outlined">arrow_back</span></a>
</a>
  <h1 style="text-align: center;"> You can cancle your test drive booking from here. <br> You can also view your test drive details </h1> 
            @include('layout_yield')<br><br>
  <h1 style="text-align: center;">Test Drive Details </h1><br>
  
  



<script>
function myFunction() {
  var txt;
  if (confirm("Do you want to cancle your test drive...?")) {
    txt = "Your test drive is Cancled...";
  } else {
    txt = "";
  }
  document.getElementById("demo").innerHTML = txt;
}

document.getElementById("back").onclick = function () {
      location.href = "admin_page";
    };
</script>
<table border="1" align="center" bgcolor="lightgreen">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Date-Of-Booking</th>
    <th>Time</th>
    <th>Vehicle</th>
    <th>Vehicle Color</th>
    <th>
      Cancle Drive 
    </th>
    <th>
      Update Details
    </th>
  </tr>
  @foreach($data as $in)
  <tr>
    <td>{{$in['id']}}</td>
    <td>{{$in['name']}}</td>
    <td>{{$in['phoneno']}}</td>
    <td>{{$in['address']}}</td>
    <td>{{$in['bookingdate']}}</td>
    <td>{{$in['bookingtime']}}</td>
    <td>{{$in['carname']}}</td>
    <td>{{$in['carcolor']}}</td>
    <td onclick="myFunction()"><a href="delete/{{$in['id']}}">Cancle </a> 
    </td>
    <td>
      <a href="edit/{{$in['id']}}">Edit </a></td>
    
    
  </tr>
  @endforeach
</table> <br><br>

<!-- <button id="back" class="button button2">Back</button> -->
<p id="demo"></p>
<!-- <script>
  document.getElementById("back").onclick = function () {
      location.href = "home";
    };
</script> -->
</body>
</html>
