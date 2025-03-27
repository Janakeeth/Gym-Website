<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Package</title>
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
        height: 100vh;
        color: #333;
    }

    /* Message Container */
    .message-container {
        text-align: center;
        padding: 30px;
        width: 70%;
        max-width: 400px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 24px;
        color: #2C3538;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        color: #4CAF50;
    }

    .error-message {
        color: #f44336;
    }

</style>
</head>
<body>

<div class="message-container">
    <?php
    // Create database connection
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);

    // Select database
    mysqli_select_db($conn, 'fitzonegymsdb');

    // Update query
    $sql = "UPDATE fitnesspackages SET PackageName='$_POST[pkgName]', PackagePrice='$_POST[pkgPrice]' WHERE PackageID='$_POST[pkgId]'";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Update Successful</h1>";
        echo "<p>Record Successfully Updated...You will be redirected back now!</p>";
        header("refresh:1; url=UpdatePackageFormDisplay.php");
    } else {
        echo "<h1 class='error-message'>Update Failed</h1>";
        echo "<p class='error-message'>Error: Unable to update record.</p>";
    }

    ?>
</div>

</body>
</html>


