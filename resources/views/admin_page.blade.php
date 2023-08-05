<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  body{
    background-image: url(images/bg10.jpg); width:100px ;+
    
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
  }
  .wrapper{
        color: #fff;
        width: 350px;
        /*padding-left: 10px;*/
        height: 100vh;
        position: fixed;
        background-image:linear-gradient(30deg, #11c, #055e21);
        border-top-right-radius: 70px;
        overflow: hidden;
        margin-top: 50px;

      }
  
      /* Div header */
      .wrapper h2 {

        padding:0 0 0;
        cursor: pointer;
      }
  
      /* Div links */
      .wrapper a {
        font-size: 20px;
        color: #fff;
        display: block;
        padding: 12px;
        padding-left: 30px;
        text-decoration: none;
        outline: none;
      } 
  
      /* Div link on hover */
      .wrapper a:hover {
        color: #56ff38;
        background: #fff;
        position: relative;
        background-color: #fff;
        border-top-left-radius: 22px;
        border-bottom-left-radius: 22px;
      }
</style>
<body>
  <div class="wrapper">
      <!-- Div Header-->
      @include('layout_yield') 
                     <!-- <h1 align="center" style="padding-left: 350px;">
                         Electric-Vehicles
                     </h1> -->
      <h2 style="background-color: black; ">
          <img src="logo.png" height="100px" width="100px"  >&nbsp;Electric Vehicles</h2>
     
      <!-- Links in Div -->
      <a href="home">
        Home
      </a>
      <!-- <a href="data"> -->
        <!-- Profile -->
      <!-- </a> -->
       <a href="data1">
        Registered User
      </a>
      <a href="tdDetails">
        Test Drive Details
      </a>
     <!-- <a href="manage">
       Manage Vehicles
       
     </a> -->
       
        <!-- <select type="">
           Vehciles Management 
            <option value=""> <a href="image">Add Vehciles </option>
            <option value=""><a href=""></a>Upadte Vehicles</option>
            <option><a href="data">Delete Vehicles</a></option>
        </select> -->
     <!--  <a href="image">
        Add vehciles 
      </a> -->
      <a href="rvDetails">
        Rental Vehicle Detail
      </a>
      <a href="about">
        About Us
      </a>
      <a href="logout">
        Logout
    </a>

    </div>
</body>
</html>