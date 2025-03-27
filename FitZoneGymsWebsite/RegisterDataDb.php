<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registered Info</title>
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
  background-color: #f3f4f6;
  color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Container for Message */
.message-container {
  width: 90%;
  max-width: 400px;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.message-container h1 {
  font-size: 24px;
  color: #4A90E2;
  margin-bottom: 10px;
}

.message-container p {
  font-size: 16px;
  color: #555;
  margin-bottom: 15px;
}

/* Success Message */
.success-message {
  color: #28a745;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Error Message */
.error-message {
  color: #e74c3c;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Button */
.back-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4A90E2;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.back-button:hover {
  background-color: #357ABD;
}

</style>
</head>
<body>

<div class="message-container">
  <?php
    $conn = mysqli_connect('localhost:3306', 'root', '');
    if (!$conn) {
        echo "<p class='error-message'>Not connected to the server!</p>";
    }
    if (!mysqli_select_db($conn, 'fitzonegymsdb')) {
        echo "<p class='error-message'>Database not selected!</p>";
    }

    $username = $_POST['uname'];
    $password = $_POST['passwd'];

    $sql = "INSERT INTO user(Username,Password) VALUES ('$username','$password')";

    if (!mysqli_query($conn, $sql)) {
        echo "<p class='error-message'>Registration failed.</p>";
    } else {
        echo "<p class='success-message'>You are successfully Registered!</p>";
    }
    
    header("refresh:2; url=Register.php");
  ?>
  <a href="Register.php" class="back-button">Back to Register</a>
</div>

</body>
</html>
