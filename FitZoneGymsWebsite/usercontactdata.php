<?php
	$connection = mysqli_connect('localhost:3306', 'root', '');
	if (!$connection) {
		echo "Not connected to the server!!";
	}
	if (!mysqli_select_db($connection, 'fitzonegymsdb')) {
		echo "Database not selected!!";	
	}
	
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	
	$sql = "INSERT INTO usercontactdata(FirstName, LastName, Email, Message) VALUES ('$FirstName', '$LastName', '$Email', '$Message')";
	
	if (!mysqli_query($connection, $sql)) {
		echo "Not Inserted";
	} else {
		echo "Inserted successfully. You will be redirected now.";
	}
	header("refresh:2 url=ContactUs.php");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacted Info</title>
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
      background-color: #f2f2f2;
      font-size: 16px;
      color: #333;
      padding: 20px;
    }

    /* Container for message display */
    .message-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    /* Heading */
    h3 {
      font-size: 24px;
      color: #4CAF50;
      margin-bottom: 20px;
    }

    /* Paragraph for message */
    p {
      font-size: 18px;
      color: #555;
    }

    /* Back Link */
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }

    a:hover {
      background-color: #45a049;
    }

    /* Success/Failure Message */
    .success-message {
      color: #4CAF50;
      font-size: 18px;
    }

    .error-message {
      color: #f44336;
      font-size: 18px;
    }
  </style>
</head>
<body>

<div class="message-container">
  <h3>Contact Information</h3>
  <?php
    if (mysqli_query($connection, $sql)) {
      echo '<p class="success-message">Inserted successfully. You will be redirected now.</p>';
    } else {
      echo '<p class="error-message">There was an error inserting the data. Please try again later.</p>';
    }
  ?>
  <a href="ContactUs.php">Go Back to Contact Us</a>
</div>

</body>
</html>
