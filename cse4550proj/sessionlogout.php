<?php
   session_start();
   $_SESSION = array();
   session_destroy();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

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
<body>
<!-- Navigation -->
<nav>
  <ul class="w3-navbar w3-black">
    <li><a href="javascript:void(0)">Home</a></li>
    <li><a href="javascript:void(0)">About the Project</a></li>
    <li><a href="javascript:void(0)">Services</a></li>
    <li><a href="javascript:void(0)">Contact</a></li>
  </ul>
</nav>

<! Content Starts>
<div class="imgcontainer">
    <h1><center>California State University</center></h1>
  </div>
<center><h2>CSE 4550 Project Sign In Form</h2>

<form name="signin" method="post" action="authenticatelogin.php">
  
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <a href="https://www.securetsys.com/ad/register.html">Not Signed Up? click here</a>
   <br>
   <br>
    <a href="#">Forgot Password? click here</a>
  </div>
</form>
</center>
<br>
<center><img src=securityimage.jpg width="100%"></center>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  (c) Copyright CSE 4550, 2024.
  </p>
</footer>

</body>
</html>
