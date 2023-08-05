<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<style>
form{
  margin: 0 auto;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  /*background-color: white;*/
  color: white;
  /*height: 729px;*/
  background-color: #282A35;  
 /* background-image: linear-gradient(#A96F44,#F2ECB6);
  opacity: 1;*/
}
.dark-mode {
  background-color: white;
  color: black;
}
/*form {border: 3px solid #f1f1f1;}*/

input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.lbutton {
  background-color: #04AA6D;
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

.reset {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/*span.psw {
  float: right;
  padding-top: 16px;
}
a {
  color: dodgerblue;
}
*/

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;  
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<form action="alogin" method="post">
  @csrf
<center>
<!-- <table> -->
  <button style="float:right;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon></button>
  <br>
  <br><br><button class="lbutton"><h2 align="center">Login</h2></button>
<!-- <button onclick="myFunction()">Dark mode</button> -->
<!-- <form method="post"> -->

  <div class="container">
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="name"  required><br>
    
   
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>

    <br><button type="submit" class="lbutton">Login</button>&nbsp;&nbsp;&nbsp;
    

  <!-- <tr><td>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </tr></td> -->
  </div>

   

</form>
@if($errors->any())
<span style="color::red"><h4>{{$errors->first()}}</h4></span>
@endif
<script>
  
  document.getElementById("myButton").onclick = function () {
        location.href = "reg";
    };
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>