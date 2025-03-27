<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Body */
body {
    background-color: #f4f5f7;
    color: #333;
}

/* Header */
nav {
    background-color: #100C50;
    padding: 60px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

nav .logo img {
    width: 220px;
    margin-left: -50px;
    margin-top: -100px;
    margin-bottom: 25px;
}

nav ul {
    display: flex;
    justify-content: center;
    padding: 0;
    list-style: none;
    margin-top: -20px;
}

nav ul li {
    margin: 0 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
}

nav ul li a:hover,
nav ul li a.active {
    color: #ff5722;
}

/* Hero Image */
.image {
    position: relative;
    width: 100%;
}

.image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

/* Contact Section */
.contact {
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.contact-heading h1 {
    font-size: 28px;
    font-weight: 600;
    color: #100C50;
    text-align: center;
    margin-bottom: 10px;
}

.contact-heading p {
    font-size: 16px;
    color: #666;
    text-align: center;
    margin-bottom: 30px;
}

form input, form textarea {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fafafa;
    transition: border-color 0.3s ease;
}

form input:focus, form textarea:focus {
    border-color: #100C50;
    outline: none;
}

form textarea {
    resize: vertical;
    min-height: 120px;
}

button.contact-btn {
    display: block;
    background-color: #100C50;
    color: #fff;
    font-size: 18px;
    padding: 15px 25px;
    margin: 20px auto;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 50%;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button.contact-btn:hover {
    background-color: #28227c;
    transform: scale(1.05);
}

/* Error and Success Messages */
.successUnsuccess {
    color: #070472;
    text-align: center;
    margin-bottom: 20px;
}

.emailrequired {
    color: #E01717;
    text-align: center;
}

.error {
    color: #E01717;
    font-size: 14px;
    margin-top: 10px;
    text-align: center;
}

/* Footer */
.footer {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    background-color: #2C3538;
    color: #fff;
    padding: 40px 20px;
}

.footer > * {
    flex: 1;
    margin: 10px;
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
}

.NavSection a:hover {
    color: #ff5722;
}

.AddressSection li {
    color: #999;
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
	
    <div class="image">
	<img src="Images/forHomePage.jpg">
	<div class="centered">CONTACT US</div>
	</div>
	<br>
<section class="contact">
	<div class="contact-heading"> 
	<h1>Now you can Contact Us !</h1>
	<p>This is the simplest, secured and fastest way to contact Fitzone GYM online</p>
	</div>
  <form action="ContactUs.php" method="post">  
<?php
$fieldsErr =  "";
$SuccessUnsuccessMsg = $emailErr = $invalidFormatErr = "";
	  
$conn=mysqli_connect("localhost:3306","root","","fitzonegymsdb");
	  
if(!$connection)
 {
  echo "Not connected to the server!!";
 }
else if(!mysqli_select_db($connection,'fitzonegymsdb'))
{
 echo "Database not selected!!";	
}
else{  
	   
     if (isset($_POST['contact-btn']))
     {

         $firstname=$_POST['FirstName'];
         $lastname=$_POST['LastName'];
         $email=$_POST['Email'];
         $message=$_POST['Message'];

      if (empty($firstname)|| empty($lastname) || empty($message))
       {
        $fieldsErr= "Fields Can't Be Empty!";
       }
      else if (empty($email))
       {
        $emailErr = "Email is Requred !";
       }
	  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
       {
        $invalidFormatErr = "Invalid E-mail Format!";
       } 
      else{

        $sql="INSERT INTO usercontactdata(FirstName,LastName,Email,Message) VALUES ('$firstname','$lastname','$email','$message')";
	
	      if(!mysqli_query($connection,$sql))
	      {
	       $SuccessUnsuccessMsg = "Not Inserted";
	      }
	      else
	      {
           $SuccessUnsuccessMsg = "Inserted successfully...Thanks for contacting us!";
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
   <span class="successUnsuccess"> <?php echo $SuccessUnsuccessMsg ?></span><br>
   <span class="emailrequired">* <?php echo $emailErr; echo $invalidFormatErr;?></span><br>
<br>
	<div class="TextsOnFields">
	<span class="error">* <?php echo $fieldsErr;?></span><br>
	First Name:<input type="text" name="FirstName" placeholder="Enter your first name here">
	Last Name:<input type="text" name="LastName" placeholder="Enter your last name here">
	Email:<input type="text" name="Email" placeholder="Enter your E-mail here">
	<span class="error">* <?php echo $fieldsErr;?></span><br>
	Message:<textarea name="Message" placeholder="Type here the message you wanna send us...."></textarea>
	<center><button class="contact-btn" name="contact-btn" type="submit"><h1>Submit</h1></button></center>
  </form>
</section>

	
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