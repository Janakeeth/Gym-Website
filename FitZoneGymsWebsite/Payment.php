<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
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
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    /* Container */
    .container {
        width: 90%;
        max-width: 600px;
        background-color: #ffffff;
        padding: 20px;
        margin: auto;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }

    h1 {
        color: #1a73e8;
        font-size: 28px;
        margin-bottom: 10px;
    }

    p {
        color: #555;
        margin-bottom: 20px;
    }

    fieldset {
        border: none;
        padding: 10px;
        margin-bottom: 20px;
    }

    /* Form Label */
    label {
        display: block;
        font-weight: bold;
        text-align: left;
        width: 100%;
        margin-top: 15px;
    }

    /* Form Fields */
    input[type=text],
    input[type=number],
    select {
        width: calc(100% - 22px);
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type=radio] {
        margin: 0 10px;
    }

    /* Payment Button */
    .buttonPay {
        background-color: #1a73e8;
        color: white;
        padding: 12px;
        margin: 15px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        border-radius: 5px;
    }

    .buttonPay:hover {
        background-color: #155bb5;
    }

    /* Clear Button */
    button[type=reset] {
        background-color: #f44336;
        color: white;
        padding: 12px;
        margin: 15px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        border-radius: 5px;
    }

    button[type=reset]:hover {
        background-color: #d32f2f;
    }

    /* Links */
    a {
        color: #1a73e8;
        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="container">
<form action="Payment.php" method="post">
<?php
$connection = mysqli_connect('localhost:3306','root','');	  	
if(!$connection) {
  echo "Not connected to the server!";
} else if(!mysqli_select_db($connection, 'fitzonegymsdb')) {
  echo "Database not selected!";
} else {  
    if (isset($_POST['buttonPay'])) {
        $custName = $_POST['name'];
        $cardTp = $_POST['CrdType'];
        $cardNo = $_POST['CardNumber'];
        $expDate = $_POST['ExpDate'];
        $cvv = $_POST['cvv'];
        $addNo = $_POST['stCode'];
        $addSt = $_POST['stName'];
        $addCity = $_POST['city'];
    
        if (empty($custName) || empty($cardTp) || empty($cardNo) || empty($expDate) || empty($cvv) || empty($addNo) || empty($addSt) || empty($addCity)) {
            echo "Fields Can't Be Empty!";
        } else {
            $sql = "INSERT INTO payment (CustomerName, CardType, CardNumber, ExpiryDate, CVV, AddressNo, AddressStreet, AddressCity) VALUES ('$custName','$cardTp','$cardNo','$expDate','$cvv','$addNo','$addSt','$addCity')";
            if (!mysqli_query($connection, $sql)) {
                echo "Not Inserted";
            } else {
                echo "Inserted successfully... Thanks for contacting us!";
                header('location: Payment.php');
            }  
        }
    }
}
?>
	
<fieldset>
	<h1>Payment Details</h1>
    <p>Please fill the following form to complete your payment and place the order!</p>

    <label>Your Name:</label> 
    <input type="text" placeholder="Enter Your Name Here" name="name" id="name">

    <label>Card Type:</label> 
    <input type="radio" name="CrdType" value="Visa">Visa
    <input type="radio" name="CrdType" value="Master Card">Master Card
    <input type="radio" name="CrdType" value="American Express">American Express

    <label>Card Number:</label>
    <input type="text" placeholder="Enter Your Card Number Here" name="CardNumber" id="CardNumber">

    <label>Expiry Date:</label>
    <select name="ExpDate" id="ExpDate">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
    <input type="number" placeholder="Year (e.g., 2025)" name="ExpDateYear" id="ExpDateYear">

    <label>CVV:</label>
    <input type="text" placeholder="xxx" name="cvv" id="cvv">

    <label>Street Code:</label>
    <input type="number" placeholder="Street Number" name="stCode" id="stCode">

    <label>Street Name:</label>
    <input type="text" placeholder="Street Name" name="stName" id="stName">

    <label>City:</label>
    <input type="text" placeholder="City" name="city" id="city">

    <label>Contact Number:</label>
    <input type="text" placeholder="Contact Number" name="cNo" id="cNo">

    <button type="reset" value="Reset">CLEAR</button>
    <button type="submit" name="buttonPay" class="buttonPay">PAY NOW</button>  

    <br><br>
    <a href="ProductsCart.php">Back to Cart</a>
</fieldset>
</form>
</div>

</body>
</html>
