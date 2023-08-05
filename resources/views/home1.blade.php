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
	
    <script>
       function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
        }
    </script>

    <style>
		body{
			margin:0;
			font-family:Arial;
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
    background: #282A35;
    color:white;
}
.dark-mode {
              background-color: white;
              color: black;
            }
.wrapper .sidebar{
    background: #04AA6D;
    position: fixed;
    top: 0;
    left: 0;
    width: 410px;
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
}

    /*For search and login btn*/
    * {box-sizing: border-box;}

    .topnav {
      overflow: hidden;
      background-color:#282A35 ;
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
        background: #282A35;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #282A35;
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

</style>

</head>
<body>
    <nav>
        <h4></h4>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <div class="topnav">
            <div class="search-container">
                <form method="post" action="home1">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <a href="login"><span class="material-symbols-outlined">login</span></a>
            <button style="float:right;margin-top: 12px; padding: auto;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon>
                    </button> <br><br>
        </div>
        </div>
            <a href="logout"><span class="material-symbols-outlined">logout</span></a>
            <button style="float:right;margin-top: 12px; padding: auto;"> <ion-icon size="small" name="moon-outline" onclick="myFunction()"></ion-icon>
                    </button> <br><br>
        </div>
    </nav>
    <form method="post" action="home1">
	<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  		<li class="w3-large"><i class="fa fa-bars"></i></li>
	</a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">


    <div class="wrapper">
        <div class="sidebar">
        <div class="links">
       <h2 class="offcanvas-title" id="offcanvasExampleLabel" style="color:white;">{{session ('name')}}</h2>
       <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            <ul>
                <li>
                	<h4>
                    <a href="home" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span><br><br>
                    </a>
                    </h4>
                </li>
                <li>
                	<h4>
                    <a href="data">
                        <span class="icon"><i class="glyphicon glyphicon-user"></i></span>
                        <span class="item">Profile</span><br><br>
                    </a>
                    </h4>
                </li>
                <li>
                	<h4>
                    <a href="#">
                        <span class="icon"><i class="glyphicon glyphicon-file"></i></span>
                        <span class="item">My bills</span><br><br>
                    </a>
                    </h4>
                </li>
                <li>
                	<h4>
                    <a href="tform">
                        <span class="icon"><i class="material-icons"></i></span>
                        <span class="item">Test Drive</span><br><br>
                    </a>
                    </h4>
                </li>
                <li>
                	<h4>
                    <a href="#">
                        <span class="icon"><i class="fa fa-trash"></i></span>
                        <span class="item">Cancle</span><br><br>
                    </a>
                    </h4>
                </li>
                <li>
                	<h4>
                    <a href="#">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <span class="item">About Us</span><br><br>
                    </a>
                    </h4>
                </li>
            </ul>
        </div>
        </div>
        </div>
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
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>