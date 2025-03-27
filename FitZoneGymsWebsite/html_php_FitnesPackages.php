<?php
  if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM fitnesspackages WHERE CONCAT(PackageID, PackageName, PackagePrice) LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
   } else {
     $query = "SELECT * FROM fitnesspackages";
     $search_result = filterTable($query);
   }

   function filterTable($query) {
      $servername = "localhost:3306";
      $username = "root";
      $password = "";	
      $connect = mysqli_connect($servername, $username, $password, "fitzonegymsdb");
      $filter_Result = mysqli_query($connect, $query);
      return $filter_Result;
   }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fitness Packages</title>
<style>
/* General Body Styling */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  background-color: #f3f4f6;
  color: #333;
}

/* Navbar Styling */
nav {
    background-color: #100C50;
    padding: 20px 0;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

nav .logo img {
    width: 220px;
    margin-left: -20px;
    margin-top: -110px;
    margin-bottom: -120px;
}

nav ul {
    display: flex;
    justify-content: right;
    padding: 0;
    list-style: none;
    margin-top: 10px;
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

/* Header Image Styling */
.image {
  position: relative;
  text-align: center;
}

.image img {
  width: 100%;
  height: auto;
  opacity: 0.7;
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

/* Search Section */
h4 {
  text-align: center;
  font-size: 18px;
  color: #555;
}

.searchbar, .searchbtn {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.searchbar input[type="text"] {
  padding: 10px;
  width: 50%;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
}

.searchbtn input[type="submit"] {
  background-color: #333;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.searchbtn input[type="submit"]:hover {
  background-color: #575757;
}

/* Table Styling */
table.tbl {
  width: 80%;
  margin: 30px auto;
  border-collapse: collapse;
  font-size: 16px;
}

table.tbl th, table.tbl td {
  padding: 12px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

table.tbl th {
  background-color: #333;
  color: white;
  font-weight: bold;
}

table.tbl tr:hover {
  background-color: #f1f1f1;
}

/* Footer Styling */
.footer {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 20px;
  background-color: #333;
  color: #fff;
  margin-top: 50px;
}

.footer .CompanySection, .footer .NavSection, .footer .AddressSection {
  flex: 1;
  margin: 10px;
  color: #aaa;
}

.footer h2 {
  font-size: 18px;
  color: #fff;
  margin-bottom: 15px;
}

.footer ul {
  list-style: none;
  padding: 0;
}

.footer li {
  margin-bottom: 8px;
  color: #aaa;
}

.footer a {
  color: #bbb;
  text-decoration: none;
  transition: color 0.3s;
}

.footer a:hover {
  color: #fff;
}

.Endfooter {
  text-align: center;
  color: #aaa;
  padding: 15px 0;
  font-size: 14px;
}

/* Responsive Styling */
@media (max-width: 768px) {
  nav ul {
    flex-direction: column;
    gap: 10px;
  }

  .image .centered {
    font-size: 28px;
  }

  .searchbar input[type="text"], .searchbtn input[type="submit"] {
    width: 80%;
  }

  table.tbl {
    width: 90%;
  }

  .footer {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
}
</style>
</head>
<body>

<!-- Navbar -->
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

<!-- Header Image -->
<div class="image">
  <img src="images/bg-gym.jpg">
  <div class="centered">FITNESS PACKAGES</div>
</div>

<br><br><br><br><br><br>

<!-- Search Form -->
<h4 align="center">Enter the value you want to search about a package detail inside the following searching box and press on the search button below :</h4>
<form action="html_php_FitnesPackages.php" method="post">
  <div class="searchbar">
    <input type="text" name="valueToSearch" placeholder="Enter value to Search Package Details....."/>
  </div>
  <br>
  <div class="searchbtn">
    <input type ="submit" name="search" value="SEARCH"/>
  </div>
  <br><br><br><br>

  <!-- Table Display -->
  <table class="tbl">
    <tr>
      <th>Package ID</th>
      <th>Package Name</th>
      <th>Package Price</th>
    </tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
    <tr>
      <td><?php echo $row['PackageID'];?></td>
      <td><?php echo $row['PackageName'];?></td>
      <td><?php echo $row['PackagePrice'];?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</form>	

<br><br><br><br><br><br><br><br>

<!-- Footer -->
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
        <li>No.132/5</li>
        <li>Rathnayaka Street</li>
        <li>Kurunegala</li>
      </ul>
    </li>
  </ul>
  
  <div class="Endfooter">
    <p>All rights reserved by ©Fitzone GYM 2024 </p>
  </div>
</footer>

</body
