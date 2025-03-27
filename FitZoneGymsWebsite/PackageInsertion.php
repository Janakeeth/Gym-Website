<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Package Insert</title>
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
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    color: #333;
}

/* Container */
.container {
    width: 40%;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Header */
.container h3 {
    color: #2C3538;
    font-size: 22px;
    margin-bottom: 20px;
}

/* Form Fields */
input[type="text"], 
input[type="submit"] {
    width: 80%;
    padding: 12px;
    margin: 10px 0;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
}

input[type="text"] {
    background-color: #f9f9f9;
    transition: border-color 0.3s;
}

input[type="text"]:focus {
    border-color: #2C3538;
}

/* Submit Button */
input[type="submit"] {
    background-color: #2FB3B5;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 30%;
}

input[type="submit"]:hover {
    background-color: #1a8a8e;
}

/* Message Box */
.message-box {
    text-align: center;
    background-color: #e0f7fa;
    color: #00796b;
    padding: 15px;
    border-radius: 8px;
    font-weight: bold;
    margin-top: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Link */
.container a {
    display: inline-block;
    margin-top: 20px;
    color: #2C3538;
    text-decoration: none;
    font-weight: bold;
}

.container a:hover {
    color: #2FB3B5;
    text-decoration: underline;
}
</style>
</head>
<body>
	
<?php
if (isset($_POST['btnsub'])) { 
    // Database connection
    $con = mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "<div class='message-box' style='color: #ff0000;'>Failed to connect to MySQL: " . mysqli_connect_error() . "</div>";
    }
    
    // Passing variables and values
    $packname = $_POST['pkgname']; 
    $packprice = $_POST['pkgprice'];
    
    // Insert data
    if ($packname && $packprice) {
        mysqli_query($con, "INSERT INTO fitnesspackages (PackageName, PackagePrice) VALUES ('$packname', '$packprice')");
        echo "<div class='message-box'>Inserted Successfully!</div>";
    } else {
        echo "<div class='message-box' style='color: #ff0000;'>Please fill out both fields.</div>";
    }
    
    // Close connection
    mysqli_close($con);
}
?>

<div class="container">
    <h3>Add New Record To The Fitness Packages Table Here</h3>
    <form action="" method="post">
        <input type="text" name="pkgname" placeholder="Enter Package Name">
        <input type="text" name="pkgprice" placeholder="Enter Package Price">
        <input type="submit" name="btnsub" value="INSERT">
    </form>
    <a href="PackageMenuTable.php">Back To Package Records Table</a>
</div>	

</body>
</html>
