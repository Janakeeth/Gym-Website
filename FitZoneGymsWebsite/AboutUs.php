<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
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

/* Navbar */
nav {
    background-color: #100C50;
    padding: 50px 0;
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
    margin-top: -30px;
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

/* Header Image */
.image {
    position: relative;
    text-align: center;
}

.image img {
    width: 100%;
    height: auto;
    opacity: 0.8;
}

.image .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 48px;
    color: #fff;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}

/* Services Section */
.services {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}

.s-heading h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #333;
}

.s-box-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.s-box {
    background-color: #e9ecef;
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.s-box:hover {
    transform: translateY(-10px);
}

.s-box h1 {
    font-size: 20px;
    color: #333;
}

.s-box p {
    color: #666;
    margin: 10px 0 20px;
}

.s-box button {
    padding: 8px 16px;
    border-radius: 20px;
    background-color: #100C50;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 15px;
    transition: background-color 0.3s ease;
}

.s-box button:hover {
    background-color: #28227c;
}

.s-box a {
    text-decoration: none;
    color: inherit;
}

/* Gallery */
.glry {
    font-size: 32px;
    text-align: center;
    padding: 20px 0;
    color: #333;
}

.ImageContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 20px;
}

.images img {
    border-radius: 8px;
    width: 300px;
    height: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.images img:hover {
    transform: scale(1.05);
}

/* Footer */
.footer {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
    background-color: #333;
    color: #fff;
}

.CompanySection,
.NavSection,
.AddressSection {
    flex: 1;
    min-width: 200px;
    padding: 20px;
}

.CompanySection p,
.AddressSection li,
.NavSection ul {
    color: #ccc;
    font-size: 14px;
}

.footer h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.footer ul {
    list-style: none;
    padding-left: 0;
}

.footer li {
    line-height: 2em;
}

.footer a {
    color: #aaa;
    text-decoration: none;
    transition: color 0.3s;
}

.footer a:hover {
    color: #fff;
}

.Endfooter {
    text-align: center;
    color: #aaa;
    padding: 20px;
    font-size: 14px;
}

@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
        gap: 10px;
    }

    .image .centered {
        font-size: 32px;
    }

    .s-box-container {
        flex-direction: column;
    }

    .ImageContainer {
        flex-direction: column;
        align-items: center;
    }

    .footer {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
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
	<img src="Images/forHomePage4.jpg">
	<div class="centered">ABOUT US</div>
	</div>
<br>
<br>
<br>
<br>
<br>	

<!--heading of container---------------->	
<section class="services">
	
	<div class="s-heading">
	<h1>Here are our Services</h1>
	</div>
		
  <!--services-box-container------------------->
  <div class="s-box-container">
		
	<!--service-box-1---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<!--servies-name---------->
	<h1>Fitness Packages</h1><br>
		<br><p>We provide various types of fitness packges which are the best for reasonable prices</p>
	    <button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="html_php_FitnesPackages.php">VIEW PACKGES</a></button>
	</div>
		
	<!--service-box-2---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<h1>Food Supplements</h1><br>
		<p>We are having a large number of food supplements store where customers are eligible to buy them online</p>
		<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="Products.php">VIEW SUPPLEMENTS</a></button>
	</div>
		
	<!--service-box-3---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<h1>Fitness Equipments</h1><br>
		<p>We own various types of fitness equipments which are best in quality and ypu can order at a fair proce now trough this website</p>
		<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="Products.php">VIEW EQUIPMENTS</a></button>
	</div>		
  </div>
</section>

	
<div class="glry">GALLERY</div>
<br>
<br>
<br>
<div class="ImageContainer">
	<div class="images"><img src="Images/gallery1.jpg" alt="First Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery2.jpeg" alt="Second Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery3.jpg" alt="Third Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery4.jpg" alt="Fourth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery5.jpg" alt="Fifth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery6.jpg" alt="Sixth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery7.jpg" alt="First Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery8.jpg" alt="Second Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery9.jpg" alt="Third Gallery Image" width="300" height="200"></div>
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