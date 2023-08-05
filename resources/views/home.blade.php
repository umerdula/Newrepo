<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>
		body{
			margin:0;
/*			font-family:Arial;*/
            font-family: 'Abel', sans-serif;
		}

		/* for sidebar
		.topnav{
			background-color: black;
			overflow:hidden;
		}
		.topnav a{
			float: right;
			display: block;
			color:white;
			text-align: center;
			padding:14px 16px;
			font-size:17px;
		}
		.topnav a:hover{
			background-color: grey;
			color: black;
		}




		.topnav a.active{
			background-color: #04AA6D;
			color:white;
		}
		.topnav .icon{
			display:none;
		}*/

*{
    list-style: none;
    text-decoration: none;
    margin: auto;
    padding: auto;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body{
    background: #bbb;
    color:white;
}

/*.wrapper .sidebar{
    background: #04AA6D;
    position: fixed;
    top: 0;
    left: 0;
    width: 350px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
}

		.wrapper .sidebar ul li a{
    		display: block;
    		padding: 13px 30px;
    		border-bottom: 1px solid #10558d;
    		color: rgb(241, 237, 237);
    		font-size: 16px;
    		position: relative;
		}

        .btn-primary{
            color:#fff;
            background-color:#04AA6D;
            border-color:#04AA6D;
        }

.wrapper .sidebar ul li a .icon{
    color: #dee4ec;
    width: 40px;
    display: inline-block;
}


.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: #0c7db1;

    background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: auto;
}*/
    
    .wrapper{
        color: #fff;
        width: 350px;
        /*padding-left: 10px;*/
        height: 100vh;
        position: fixed;
        background-image: linear-gradient(30deg, #11cf4d, #055e21);
        border-top-right-radius: 70px;
        overflow: hidden;

      }
  
      /* Div header */
      .wrapper h2 {
        padding: 40px 0 0 0;
        cursor: pointer;
      }
  
      /* Div links */
      .wrapper a {
        font-size: 18px;
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

    /*For search and login btn*/
    * {box-sizing: border-box;}

    .topnav {
      overflow: hidden;
      background-color:#bbb;
      color:black;
      
    }

    .topnav a {
      float: right;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: white;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: white;
        } 

    .links a{
        text-decoration:none;
    }

    /*For login btn*/
    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
    }
    .text{
        text-align: right;
        color:black;
        height: 5px;
    }
    h3{
        padding-top: 150px;
        margin-right: 150px;
        color:black;
    }
.button {
  background-color: #4CAF50; /* Green */
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
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.image-container{
    width: 401px;
    height: 225px;
}
.image-container img{
    width: 100%;
    height: 100%;
}

#div1{
/*    width:23.33%;*/
    float: right;
    margin-top: 90px;
    margin-right: 50px;
    margin-bottom: 50px;
}
#div2{
/*    width:23.33%;*/
    margin:0 auto;
}

</style>

</head>
<body>
  
    <nav>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <div class="topnav">
            <!-- <div>A</div> -->
            <div class="search-container">
                <form action="home" method="post">
                     @csrf
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" style="color:black;">
                        <i class="fa fa-search"></i></button>
                </form>

            </div>
            <a href="login"><span class="material-symbols-outlined">login</span></a><br><br>
                     @include('layout_yield') 
                     <h1 align="center" style="padding-left: 350px;">
                         Electric-Vehicles
                     </h1>
                    
        </div>
    </nav>
    
    <div class="wrapper">
      <!-- Div Header-->

      <h1 style="background-color: black; ">
          <img src="logo.png" height="100px" width="100px"  >&nbsp; &nbsp;Electric Vehicles</h1>
     
      <!-- Links in Div -->
      <a href="home">
        Home
      </a>
      <a href="data">
        Profile
      </a>
      <a href="tdDetails">
        Test Drive Details
      </a>
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
        
        @foreach($data as $in)
 <div id="div1" class="image-container">
            <img src="{{url('/images/'.$in->image)}}" width="100px" height="100px" align="left"/>
            <h3>{{$in->name}}<a href="/b4/{{$in->id}}"><br>
                <button class="button button2">View Details</button>
            </a></h3>

            <br clear="left"/>

        </div>
                @endforeach
        

</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

    <!-- </div>
    </div>
 -->


    <!-- for book drive and Rental car in navbar   -->
    <!-- <div class="topnav" id="myTopnav">
        <a href="bookdrive">Book Drive</a>
        <a href="rentcar" class="active">Rental Car</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>
        function myFunction(){
            var x=document.getElementById("myTopnav");
            if(x.classname === "topnav"){
                x.classname += "resposnsive";
            }
            else{
                x.classname = "topnav";
            }
        }
    </script> -->




