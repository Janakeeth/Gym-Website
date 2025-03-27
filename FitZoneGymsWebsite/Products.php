<?php

$servername='localhost:3306';
$username='root';
$password='';
$database_name='fitzonegymsdb';

//creating the databse connection
$connect=mysqli_connect("localhost:3306","root","","fitzonegymsdb");
//checking the databse connection


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
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
    background-color: #f0f4f8;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Navigation Bar */
nav {
    width: 100%;
    background-color: #100C50;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav .logo img {
    width: 220px;
    margin-left: -50px;
    margin-top: 120px;
    margin-bottom: 60px;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 8px 15px;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    color: #ff5722;
}
nav ul li button a {
    color: white;
    text-decoration: none;
}

/* Welcome and Instructions */
h1, h4 {
    text-align: center;
    margin-top: 10px;
    color: #2C3E50;
}

/* Search Form */
.searchbar, .searchbtn {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.searchbar input[type="text"] {
    width: 60%;
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.searchbtn input[type="submit"] {
    padding: 8px 20px;
    background-color: #2FB3B5;
    color: #fff;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.searchbtn input[type="submit"]:hover {
    background-color: #238d93;
}

/* Product Display */
.structure {
    border: 1px solid #eaeaec;
    background-color: #fff;
    margin: 10px;
    padding: 10px;
    text-align: center;
    width: 220px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.structure img {
    width: 180px;
    height: 180px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.structure h5 {
    color: #2C3E50;
    margin-bottom: 5px;
    font-weight: 500;
}

/* Footer Styling */
.footer {
    background-color: #2C3538;
    color: #fff;
    padding: 20px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 40px;
}

.footer h2, .footer h1 {
    color: #fff;
}

.footer p {
    color: #ddd;
    line-height: 1.5em;
}

.CompanySection, .NavSection, .AddressSection {
    flex: 1;
    padding: 20px;
}

.CompanySection p {
    font-size: 14px;
    color: #999;
    line-height: 1.6;
}

.NavSection h2, .AddressSection h2 {
    font-size: 18px;
    color: #fff;
}

.footer ul {
    list-style-type: none;
    padding-left: 0;
}

.footer li {
    line-height: 2em;
    color: #999;
}

.footer a {
    color: #00AEEF;
    text-decoration: none;
}

.footer a:hover {
    color: #f5f5f5;
}

.Endfooter {
    width: 100%;
    text-align: center;
    padding-top: 10px;
    font-size: 14px;
    color: #999;
    margin-top: 20px;
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
	<img src="Images/gym-bg.jpg">
	<div class="centered">PODUCTS</div>
	</div>
<br>
    <h1 style="text-align: center">Welcome to Fitzone Gym's Product Store!</h1>
    <h4 style="text-align: center; color: #100C50">Note that you can only view our products from here...If you want to buy these products, Login/Register first.</h4>

<br>
<form action="SearchProduct.php" method="post"> 
<h4 align="center">Enter the value you want to search about a product detail inside the following searching box and press on the search button below :</h4>
<form action="SearchProduct.php" method="post">
	<div class="searchbar">
      <input type="text" name="valueToSearch" placeholder="Enter value to Search Product Details....."/>
    </div>
	<br>
    <div class="searchbtn">
      <input type ="submit" name="search" value="SEARCH"/>
	</div>
</form>
<br>
<br>
<br>
        <?php
            $query = "select * from product order by Product_ID asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="ProductsCart.php?action=Product_ID=<?php echo $row["Product_ID"];?>">
                            <div class="structure">
                                <img src="<?php echo $row["Image"];?>" width="190px" height="200px">
                                <h5><?php echo $row["Product_Name"];?></h5>
                                <h5>LKR<?php echo $row["Product_Price"];?></h5>
                                <h5>Available Quantity<br><?php echo $row["Quantity"];?></h5>
                                <h5>1=Equipment / 2=Supplement<br><?php echo $row["TypeID"];?></h5>
                            </div>
                        </form>
                    </div>
              
        <?php
                }
            }
        ?>

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