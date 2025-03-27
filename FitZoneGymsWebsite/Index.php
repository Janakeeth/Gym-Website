<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fitzone Gym</title>
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

/* Navigation Bar */
nav {
    background-color: #100C50;
    padding: 60px 0;
    margin-top: -120px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

nav .logo img {
    width: 220px;
    margin-left: 20px;
    margin-top: -120px;
    
}

nav ul {
    display: flex;
    justify-content: center;
    padding: 0;
    list-style: none;
    margin-top: -20px;
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

nav ul li button a {
    color: white;
    text-decoration: none;
}

/* Hero Section */
.image {
    position: relative;
    width: 1600px;
    margin-top: 120px;
 
}

.image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    margin-bottom: 20px;
}

.centered {
    position: absolute;
    font-weight: bolder;
    color: chartreuse;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    font-size: 76px;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}

/* Intro Section */
.intro {
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.intro h1 {
    font-size: 32px;
    color: #100C50;
    text-align: center;
    margin-bottom: 20px;
}

.intro p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    text-align: justify;
    margin-bottom: 30px;
}

.intro button {
    display: block;
    background-color: #100C50;
    color: #fff;
    font-size: 16px;
    padding: 12px 30px;
    margin: 0 auto;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.intro button:hover {
    background-color: #28227c;
}

/* Schedule Section */
h3 {
    font-size: 24px;
    text-align: center;
    color: #100C50;
    margin-bottom: 20px;
}

table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
}

table th, table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
    font-size: 16px;
}

table th {
    background-color: #100C50;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
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

/* Button styling for admin login */
button a {
    color: white;
    text-decoration: none;
    padding: 10px;
}

</style>
</head>
<body>
	 <nav> 
	 <div class="logo">
     <img width="250px" height="250px" src="Images/fitzone.png"> 
     </div>
		 
	  <ul>
		  <li><a href="Index.php" class="active">Home</a></li>
		  <li><a href="AboutUs.php">About Us</a></li>
		  <li><a href="html_php_FitnesPackages.php">Fitness Packages</a></li>
		  <li><a href="Products.php">Products</a></li>
		  <li><a href="ContactUs.php">Contact Us</a></li>
		  <li><a href="Login.php">Login/Register</a></li> 
		  <li><button style="padding: 1px 1px; border-radius:20px; background-color: #383838; font-size: 20px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="AdminLogin.php">Admin Login</a></button></li>
	  </ul>
   </nav>
	
    <div class="image"> 
	<img src="Images/bg-gym.jpg">
		
	<div class="centered">Welcome to<br> Fitzone GYM.</div>
  
		
	</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="intro">		
<h1>Why Fitzone Fitness Centre fits for you ?</h1> <br><br>
<p>Fitzone GYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all<br><br> Fitzone GYMS. They help members prevent and overcome degenerative diseases, achieve their optimum fitness goals, realize personal lifestyle development objectives and rehabilitate them into good health.<br><br> This is accomplished by designing exercise programs that are effective, efficient and motivational. A team of well-trained, committed and passionate professionals is delivering all of these healthcare services, whilst<br><br> being managed and guided by some of the most qualified and respected experts of the healthcare and fitness industry.</p>			
<br>
<br>
<br>	
<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="AboutUs.php">READ MORE</a></button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
<h3 align="center">Schedule</h3>

<table align="center">
  <tr>
    <th>Day</th>
    <th>Opening and Closing</th>
    <th>Number of Instrustors</th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>9 am to 9 pm</td>
    <td>5</td>
  </tr>
  <tr>
    <td>Tuesday</td>
    <td>9 am to 9 pm</td>
    <td>5</td>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>9 am to 9 pm</td>
    <td>4</td>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>9 am to 9 pm</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Friday</td>
    <td>9 am to 9 pm</td>
    <td>5</td>
  </tr>
  <tr>
    <td>Saturday</td>
    <td>8 am to 11 pm</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Sunday</td>
    <td>8 am to 11 pm</td>
    <td>7</td>
  </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
<div class="CompanySection">
<h1><img width="118px" src="Images/fitzone.png" alt="Logo Of Fitzonea Gym"></h1>
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