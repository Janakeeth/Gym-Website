<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

/* Body Styling */
body {
  background-color: #f2f2f2;
  color: #333;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Container for Form */
.container {
  width: 90%;
  max-width: 400px;
  padding: 20px;
  margin: 20px auto;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
}

/* Form Heading */
.container h1 {
  color: #333333;
  font-size: 24px;
  margin-bottom: 5px;
}

.container p {
  font-size: 14px;
  color: #555;
  margin-bottom: 20px;
}

/* Input Fields */
input[type="text"], input[type="password"] {
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
  color: #333;
}

input[type="text"]::placeholder, input[type="password"]::placeholder {
  color: #888;
}

/* Submit Button */
.buttonReg {
  width: 100%;
  padding: 12px;
  background-color: #0d6efd;
  color: #fff;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

.buttonReg:hover {
  background-color: #0a58ca;
}

/* Error and Success Messages */
.error {
  color: #e74c3c;
  font-size: 13px;
  margin-bottom: 10px;
}

.successUnsuccess {
  color: #28a745;
  font-size: 14px;
  margin-bottom: 15px;
}

/* Login Section */
.container .Login {
  font-size: 14px;
  color: #555;
  margin-top: 15px;
}

.container .Login a {
  color: #0d6efd;
  text-decoration: none;
}

.container .Login a:hover {
  text-decoration: underline;
}

/* Footer */
.footer {
  width: 100%;
  padding: 20px;
  background-color: #2c3538;
  color: #ffffff;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.footer .CompanySection, .footer .NavSection, .footer .AddressSection {
  flex: 1 1 250px;
  padding: 15px;
}

.footer h2 {
  font-size: 18px;
  color: #ffffff;
  margin-bottom: 10px;
}

.footer p, .footer li {
  color: #aaaaaa;
  font-size: 14px;
  line-height: 1.5em;
}

.footer li {
  list-style: none;
}

.footer a {
  color: #0d6efd;
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

.Endfooter {
  width: 100%;
  text-align: center;
  color: #aaaaaa;
  font-size: 13px;
  margin-top: 15px;
}

/* Logo Styling */
.logo img {
  width: 100px;
  margin: 10px auto;
  display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
  .container, .footer .CompanySection, .footer .NavSection, .footer .AddressSection {
    width: 90%;
    margin: 0 auto;
  }

  .footer {
    flex-direction: column;
    align-items: center;
  }
}

</style>
</head>
<body bgcolor="#BCB8B8">


<?php
//Register Form Validation
// define variables and set to empty values
$usernameErr = $usernameErrr = $passwordErr = $confirmPasswordErr = $PassConPassErr = "";
$username = $password = $confirmPassword = "";
$SuccessUnsuccessMsg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	    if (empty($_POST["passwd"]) || empty($_POST["conpassword"]) || empty($_POST["uname"]) ) 
	     {
          $passwordErr = "Password is required";
	      $confirmPasswordErr = "Confirm Password is required";
	      $usernameErr = "Username is required";
         }
	     else if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['uname']))
         {
          $usernameErrr = "Only letters and white space allowed";
         }
	     else
	     {
			 	
            $password = test_input($_POST["passwd"]);
			$confirmPassword = test_input($_POST["conpassword"]);
		    $username = test_input($_POST["uname"]);
         
	        if($password!=$confirmPassword)
		     {
	         $PassConPassErr="Password & Confirm Password should match !";
             }
	          else{ 
              $conn= mysqli_connect('localhost:3306','root','');
			 
	             if(!$conn)
			     {
		           echo "Not connected to the server!";
	             }
			 
	                if(!mysqli_select_db($conn,'fitzonegymsdb'))
	                 {
	                   echo "Database not selected!!";	
	                 }
				
	                   $sql="INSERT INTO user(Username,Password) VALUES ('$username','$password')";
	
	                    if(!mysqli_query($conn,$sql))
	                    {
	                      $SuccessUnsuccessMsg= "Not Inserted";
	                    }
	                    else
	                    {
	            	      $SuccessUnsuccessMsg= "You are successfully Registered!";
						  header("refresh:3 url=Login.php");
	                    }
	          }
	       } 
}	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	
	
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
<div class="container">
<form action="Register.php" method="post">

    <h1>Register</h1>
    <p>Create an account from here successfully to Login !</p>
<br>
<br>
	<span class="error">* <?php echo $PassConPassErr; ?></span><br>
	<span class="successUnsuccess"> <?php echo $SuccessUnsuccessMsg ?></span><br>
	
<br>
    <span class="error">* <?php echo $usernameErr; echo $usernameErrr;?></span><br>
    Username:<br> <input type="text" placeholder="Enter Username" name="uname" id="uname">
<br>
	<span class="error">* <?php echo $passwordErr;?></span><br>
    Password:<br> <input type="password" placeholder="Enter Password" name="passwd" id="passwd">
<br>
	<span class="error">* <?php echo $confirmPasswordErr;?></span><br>
    Confirm Password:<br> <input type="password" placeholder="Enter Confirm Password" name="conpassword" id="conpassword">
<br>
<br>
<br>
<br>
    <button type="submit" class="buttonReg">REGISTER</button>
  
  
  <div class="container Login">
    <p>Have you already created an account?<a href="Login.php"> Login</a>.</p>
  </div>
	  </div>
</form>
<br>
<br>
<footer class="footer">
<div class="CompanySection">
<h1><img width="118px" src="Images/fitzone.png" alt="Logo Of Fitzone Gym"></h1>
<p>You have visited to one of the Sri Lanka's best Gyms' website. FitzoneGYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all Fitzone GYMS.</p>
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