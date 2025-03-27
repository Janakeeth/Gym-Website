<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
	
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Body */
body {
    background-color: #f4f5f7;
    color: #333;
}

/* Navigation Bar */
nav {
    background-color: #100C50;
    padding: 20px 0;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

nav .logo img {
    width: 220px;
    margin-left: 20px;
    margin-top: -100px;
}

nav ul {
    display: flex;
    justify-content: center;
    padding: 0;
    list-style: none;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    transition: color 0.3s;
}

nav ul li a:hover,
nav ul li a.active {
    color: #ff5722;
}

/* Container */
.container {
    max-width: 400px;
    background-color: #fff;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
}

/* Form Heading */
.container h1 {
    font-size: 28px;
    color: #100C50;
    margin-bottom: 20px;
}

/* Input Fields */
input[type=text], 
input[type=password] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 8px;
    background-color: #f4f4f4;
    color: #333;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type=text]:focus, 
input[type=password]:focus {
    border-color: #100C50;
}

/* Error Message */
.ErrorMsg, .EmptyErr {
    color: #E01717;
    font-size: 14px;
}

/* Login Button */
button {
    background-color: #04AA6D;
    color: #fff;
    padding: 15px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s;
}

button:hover {
    background-color: black;
}

/* Registration Link */
.container a {
    color: #0C21E8;
    font-size: 14px;
    text-decoration: none;
}

.container a:hover {
    text-decoration: underline;
}

/* Footer */
.footer {
    display: flex;
    flex-wrap: wrap;
    background-color: #2C3538;
    color: #fff;
    padding: 40px 20px;
}

.footer > * {
    flex: 1;
    margin: 10px;
}

.CompanySection h1 {
    margin-bottom: 20px;
}

.CompanySection p {
    font-size: 14px;
    color: #999;
}

.NavSection ul {
    list-style: none;
    padding-left: 0;
}

.NavSection li {
    line-height: 2em;
}

.NavSection a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.NavSection a:hover {
    color: #ff5722;
}

.AddressSection li {
    color: #999;
    font-size: 14px;
}

.Endfooter {
    text-align: center;
    color: #999;
    font-size: 14px;
    padding-top: 20px;
}

/* Links */
a {
    color: #0C21E8;
}

a:hover {
    color: #ff5722;
}

</style>   
</head>
<body bgcolor="#BCB8B8">
	<nav> 
	 <div class="logo">
     <img width="118px" src="Images/fitzone.png">
	 </div>
	<ul>	
		
		  <li><a href="Index.php" class="active">Home</a></li>
		  <li><a href="AboutUs.php">About Us</a></li>
		  <li><a href="html_php_FitnesPackages.php">Fitness Packages</a></li>
		  <li><a href="Products.php">Products</a></li>
		  <li><a href="ContactUs.php">Contact Us</a></li>
	      <li><a href="Login.php">Login/Register</a></li>
		  
	</ul>
 </nav>
<br>
<br>
<br>
<br>
<br>
<br>
	  
    <form action="Login.php" method="post">  
        <div class="container"> 
			<center> <h1>Login </h1> </center> 
<br>
<br>
<br>
<?php

   include("Config.php");
   session_start();
   
$ErrMsg = "";
$EmptyErrMsg = "";
			
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($connection,$_POST['Username']);
      $password = mysqli_real_escape_string($connection,$_POST['Password']); 
      
      $sql = "SELECT Username FROM user WHERE Username = '$username' and Password = '$password'";
      $result = mysqli_query($connection,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // If result matched $username and $password, table row must be 1 row
	 if(empty($username) || empty($password) )
	 {
		 $EmptyErrMsg = "Username and Password Fields Cannot Be Empty!";
	 }
	 else
	 {
      if($count == 1) {
         $_SESSION['Username'] = $username;
         
         header("location: ProductsCart.php");
      }
	   else {
         $ErrMsg = "You Entered Username or Password is invalid";
      } 
   }
}			
?>
<span class="EmptyErr">*<?php echo $EmptyErrMsg; ?></span><br>	
<span class="ErrorMsg">*<?php echo $ErrMsg; ?></span><br>
<br>
<br>
<br>
            Username : <br> 
            <input type="text" placeholder="Enter Username" name="Username">  <br>
            Password : <br>   
            <input type="password" placeholder="Enter Password" name="Password"> <br>
<br>
<br>
			<button type="submit"><a id="btnLog" href="ProductsCart.php">Login</a></button>  
<br>
<br>
<br>
<br>
			Don't have an account?<a href="Register.php"> Register</a>
        </div>   
    </form>     
<br>
<br>
<footer class="footer">
<div class="CompanySection">
<h1><img width="118px" src="Images/fitzone.png" alt="Logo Of Fitzone Gym"></h1>
<p>You have visited to one of the Sri Lanka's best Gyms' website. Fitzone GYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all Fitzone GYMS.</p>
</div>
	
<ul class="NavSection">
<li>
<h2>Navigation</h2>
<ul class="boxnav">
<li><a href="AboutUs.php">About Us</a></li>
<li><a href="html_php_FitnesPackages.php">Fitness Packages</a></li>
<li><a href="Products.php">Products</a></li>
<li><a href="ContactUs.php">Contact Us</a></li>
<li><a href="Login.php">Login/Register</a></li>
<li><a href="AdminLogin.php">Admin Login</a></li>
</ul>
</li>
	
	
<li>
<h2>Our Address</h2>
<ul class="AddressSection">
<li>No.132/5</a></li>
<li>Rathnayaka Street</li>
<li>Kurunegala</li>
</ul>
</li>
</ul>
	
<div class="Endfooter">
<p>All rights reserved by ©Fitzone GYM 2024 </p>
</div>
</footer>
</body>
</html>