
<!-- @section('content')
  <h1> E-Vehicle </h1>
@endsection -->
<style>
    body{
      color: white;
      background-image: url(b6.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }
  *{ 
    margin: 0;
    padding: 0;
    font-family: 'poppins',calibri;
  } 
  section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background: url('images/i4.jpg')no-repeat;
    background-color: #609EA2;
    background-position: center;
    background-size: cover;
  } 
  .form-box{
    position: relative;
    width: 400px;
    height: 640px;
    background: rgba(0, 0, 0, 0.3);
    padding: 10px;
    overflow: hidden;
    border-radius: 2px solid rgba(255,255,255,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin: 2% auto;
  }
  h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
  }
  .inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
  }
  .inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
  }
  input:focus ~ label,
  input:valid ~ label{
  top: -5px;
  }
  .inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 0 35px 0 5px;
    color: #fff;
  }
  .inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
  }
  .forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
  }
  .forget label input{
    margin-right: 3px;
  }
  .forget label a{
    color: #fff;
    text-decoration: none;
  }
  .forget label a:hover{
    text-decoration: underline;
  }
  button{
    width: 100%;
    height: 40px;
    border-radius: 4px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
  }
  .register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
  }
  .register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 800;
  }
  .register p a:hover{
    text-decoration: underline;
  }

  //for register btn
button
{
  position: relative;
  display: inline-block;
  padding: 15px 30px;
  color: #39ff14;
  text-transform: uppercase;
  left-spacing: 4px;
  text-decoration: none;
  font-size: 24px;
  overflow: hidden;
  transition: 0.2s;
}
button:hover
{
  color: #255784;
  background: #39ff14;
  box-shadow: 0 0 10px #39ff14,0 0 40px #39ff14,0 0 80px #39ff14;
  transition-delay: 1s;
}
button span{
  position: absolute;
  display: block;
}
button span:nth-child(1)
{
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg,transparent,#39ff14);
}
button:hover span:nth-child(1)
{
  left: 100%;
  transition: 1s;

}
button span:nth-child(3)
{
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg,transparent,#39ff14);
}
button:hover span:nth-child(3)
{
  right: 100%;
  transition: 1s;
  transition-delay: 0.5s;
  
}
button span:nth-child(2)
{
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg,transparent,#39ff14);
}
button:hover span:nth-child(2)
{
  top: 100%;
  transition: 1s;
  transition-delay: 0.25s;
  
}
button span:nth-child(4)
{
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg,transparent,#39ff14);
}
button:hover span:nth-child(4)
{
  bottom: 100%;
  transition: 1s;
  transition-delay: 0.75s;  
}
  </style>
  <head>
    <!-- <link rel="stylesheet" type="text/css" href="{{url('cssfile/style2.css')}}"> -->

  </head>
    <body>

      <section>
        <div class="form-box">
        <div class="form-value">
      <form method="post" action="reg" >
       @csrf
        <center>
        <div class="container">
    <h1> Registration Form </h1>
   <!--  <p>Please fill in this form to create an account.</p> --></button><br>
    </center>

      <div class="inputbox">
        
        <input type="text" name="name" required>
        <label for="">Name</label> 
      </div>
        <div class="inputbox">
        
        <input type="text" name="phoneno"  required maxlength="10">
        <label for="">Phone</label> 
      </div>
      <div class="inputbox">
        <input type="email" name="email"  required>
        <label for="">Email</label>
      </div>
      <div class="inputbox">
        <input type="password" name="password"  required>
        <label for="">Password</label>
      </div>
        <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br> -->
        <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
          Register
        </button>
  
    <p align="center">Already have an account? <a href="login" style="color:white;">Sign in</a>.</p>
    <!-- <script>
          document.getElementById("myButton").onclick = function () {
          location.href = "login";
          };
    </script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- <script>
  
  // document.getElementById("myButton").onclick = function () {
  //        location.href = "login";
  // };

  // function fun(){
  //   window.open("login");
  // }

  function myFunction() {
  alert("Registered Successfully..!!");
  }
</script> -->

</body>
</html>





<!-- <!DOCTYPE html>
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
  #form{
      margin:0 auto;
      background:white;
      color:black; 
      width: 445px;
    }
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
  background: url('images/i4.jpg')no-repeat;
  background-position: center;
  background-size: cover; 
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
  width: 70%;
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
/*hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 5px;
}*/

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
/*section{
  display:flex;
  justify-content: center;
  align-items:center;
  min-height:500vh;
  width:100px;
  background: url('images/i4.jpg')no-repeat;
  background-position: center;
  background-size: cover;  
}*/
/*
 Set a grey background color and center the text of the "sign in" section 
.signin {
  background-color: #f1f1f1;
  text-align: center;
}*/
</style>
</head>
<body>
 <section>

 </section> 
</body>
</html>
 --> 