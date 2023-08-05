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
/*img {
    padding-left: 70px ;
    padding-right: 70px;
    margin-right: 60px;
    margin-left: 560px;
    }*/
body {
  font-family: Arial, Helvetica, sans-serif;
  /*background-color: black;*/
  /*padding: 25px;*/
  color: white;
  /*font-size: 25px;*/
  height: 727px;
  /*background: url('bgw.jpg')no-repeat;*/
  background-color: #282A35;  /*For browsers that do not support gradients*/ 
  /*background-image: linear-gradient(lightgreen  , white);
  opacity: 1;*/
}
.dark-mode {
  background-color:white;
  color: black;
}
* {
  box-sizing: border-box;
}

form{
  margin: 0 auto;
}
/*Add padding to containers*/ 
.container {
  padding: 16px;
  /*background-color: white;*/
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 5px;
}

/* Set a style for the submit button  rgb(5, 68, 104) */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 15px 19px;
  margin: auto;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/*
 Set a grey background color and center the text of the "sign in" section 
.signin {
  background-color: #f1f1f1;
  text-align: center;
}*/
</style>
</head>
<body>
<form action="form1" method="post">
  @csrf
<center>
  <div class="container">
       <button style="float:right;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon></button> <br><br><br>
    <!-- <img src="C/wamp64/www/project/resources/views/logo.jpg" style="height:128px;"> -->
    <button type="button" class="btn"><h1>Register</h1>
    <p>Please fill in this form to create an account.</p></button><br>

    <br><label><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <br><label><b>Price</b></label><br>
    <input type="text" placeholder="Enter Price" name="price" id="price" required><br>

    <br><label><b>color</b></label><br>
    <input type="text" placeholder="Enter color" name="color" id="color" required><br>

    <br><label><b>year</b></label><br>
    <input type="text" placeholder="Enter year" name="year" id="year" required><br>

     <br><label><b>vtype</b></label><br>
    <input type="text" placeholder="Enter vtype" name="vtype" id="vtype" required><br>
   

    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br> -->

    <input type="submit" value="Insert"><br>
  <!-- </div> -->
  
    
    <!-- <script>
          document.getElementById("myButton").onclick = function () {
          location.href = "login";
          };
    </script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</center>
</form>
</body>
</html>