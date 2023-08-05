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
    width: 380px;
    height: 590px;
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
    margin: 60px 0;
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
  <title>Login Form</title>
  <head>
<!--     <script> 
      function welcome() { 
      window.open("home");
      } 
    </script>  -->

    <body align="center">
      <section>
        <div class="form-box">
        <div class="form-value">
          <form action="login" method="post" >
             @csrf
        <h2>Login Form</h2>
  <center>
   
    <div class="inputbox">
      <ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email"  required>
      <label for="">Email</label>
    </div>
    <div class="inputbox">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input type="password" name="password"  required>
      <label for="">Password</label>
    </div>
    <div>
        <ul>Don't have an account?<a style="color: whitesmoke;" href="reg" class="register">Register</a><br>
      </ul>
      </div><br>
<!--     <div class="forget">
      <label for="">
        <link><a style="color: whitesmoke;" href="#">Forget Password</a></link></label>
    </div> -->
      <button>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
          Login
        </button>
      
</center>
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>