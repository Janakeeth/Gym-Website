<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Insert</title>
<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Body Styling */
    body {
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    /* Form Container */
    .form-container {
        width: 90%;
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Title Styling */
    h3 {
        color: #2C3538;
        font-size: 22px;
        margin-bottom: 20px;
    }

    /* Form Fields */
    .form-field {
        margin-bottom: 15px;
    }

    .form-field input[type="text"],
    .form-field input[type="number"],
    .form-field select {
        width: 80%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    /* Submit Button */
    .submit-btn {
        background-color: #2FB3B5;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        width: 40%;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #1e8083;
    }

    /* Back Link */
    a {
        color: #2C3538;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        margin-top: 20px;
    }

    a:hover {
        color: #1a73e8;
        text-decoration: underline;
    }

    /* Success Message */
    .success-message {
        color: #2FB3B5;
        font-weight: bold;
        text-align: center;
        margin: 15px 0;
    }

</style>
</head>
<body>

<?php
if (isset($_POST['btnsub'])) { 
    // Connection
    $con = mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");
    // Passing variables and values
    $proname = $_POST['proname']; 
    $proprice = $_POST['proprice'];
    $proquantity = $_POST['proquantity'];
    $proimage = $_POST['proimage'];
    $protypeid = $_POST['protypeid'];

    // Insert query
    mysqli_query($con, "INSERT INTO product (Product_Name, Product_Price, Quantity, Image, TypeID) VALUES ('$proname', '$proprice', '$proquantity', '$proimage', '$protypeid')");
    
    echo "<div class='success-message'>Inserted Successfully!</div>";
}
?>

<div class="form-container">
    <h3>Add New Record To The Product Table</h3>
    <form action="" method="post">
        <div class="form-field">
            <input type="text" name="proname" placeholder="Enter Product Name">
        </div>
        <div class="form-field">
            <input type="text" name="proprice" value="LKR" placeholder="Enter Product Price">
        </div>
        <div class="form-field">
            <input type="number" name="proquantity" placeholder="Select Product Quantity">
        </div>
        <div class="form-field">
            <input type="text" name="proimage" value="Images/" placeholder="Enter Product Image Path">
        </div>
        <div class="form-field">
            <label>Choose the Product Type (1-Equipment / 2-Supplement):</label>
            <select name="protypeid">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        <div class="form-field">
            <input type="submit" name="btnsub" value="INSERT" class="submit-btn">
        </div>
    </form>
    <a href="ProductMenuTable.php">Back To Product Records Table</a>
</div>

</body>
</html>
