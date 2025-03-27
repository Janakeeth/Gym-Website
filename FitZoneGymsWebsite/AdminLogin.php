<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AdminLogin</title>
<style>
	
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Body and Background */
body {
    background-color: #f4f5f7;
    color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

/* Form Container */
form {
    width: 400px;
    border: 2px solid #d1d1d1;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

/* Form Heading */
h2 {
    text-align: center;
    color: #100C50;
    margin-bottom: 10px;
    font-size: 22px;
}

h4 {
    text-align: center;
    color: #666;
    font-size: 16px;
    margin-bottom: 20px;
}

/* Input Fields */
input {
    display: block;
    border: 1px solid #ccc;
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fafafa;
    transition: border-color 0.3s ease;
}

input:focus {
    border-color: #100C50;
    outline: none;
}

label {
    color: #333;
    font-size: 14px;
    margin-bottom: 5px;
}

/* Button */
button {
    background-color: #100C50;
    width: 100%;
    padding: 12px;
    color: #fff;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
    background-color: #28227c;
    transform: scale(1.02);
}

/* Error Message */
.ErrMsg {
    color: #e01717;
    font-size: 14px;
    text-align: center;
    margin-top: -10px;
    margin-bottom: 10px;
}

/* Link to Home Page */
a {
    display: inline-block;
    color: #100C50;
    font-size: 14px;
    margin-top: 20px;
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #28227c;
}


</style>
</head>
<body bgcolor="BCB8B8">
<br>
<br>
<div align="center"> 
 <form action="AdminLogin.php" method="post">

 <h2>Welcome to Fitzone Gym's Admin Login...!</h2>
 <h4>Ordinary Customers cannot Log from here. Note that only<br> Admin of the Fitzone Gym can Log In from here.</h4>
<br>
<?php
	
   include("Config.php");

$ErrMsg="";
	
if (isset($_POST['Adminuname']) && isset($_POST['Adminpassword'])) {

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$uname = validate($_POST['Adminuname']);
$pass = validate($_POST['Adminpassword']);

    if (empty($uname)) 
	{
        $ErrMsg= "Admin Username Field Cannot Be Empty!";
		
    }
	else if(empty($pass))
	{
       $ErrMsg= "Admin Password Field Cannot Be Empty!";
    }
	else
	{
        $sql = "SELECT * FROM adminuser WHERE AdminUsername='$uname' AND AdminPassword='$pass'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) 
		 {
            $row = mysqli_fetch_assoc($result);
            if ($row['AdminUsername'] === $uname && $row['AdminPassword'] === $pass) 
			{
                header("Location: AdminDashboard.html");
            }
			else
			{
                $ErrMsg= "Incorect Username or Password!";
            }

         }
		else
		{
            $ErrMsg= "Incorect Username or Password Entered!";
        }
    }

}
?>
<br>
 <span class="ErrMsg">*<?php echo $ErrMsg; ?></span><br>
<br>
<br>
        <label>Admin Username:</label>
        <input type="text" name="Adminuname" placeholder="Enter Admin Username Here"><br>
 
        <label>Admin Password:</label>
        <input type="password" name="Adminpassword" placeholder="Enter Admin Password Here"><br> 
<br>
<br>
<br>
        <button type="submit">LOG AS ADMIN</button>
<br>
<br>
<br>
<br>
	 <center><a href="Index.php">Click Here to Home Page</a></center><br>

     </form>
</div>
</body>
</html>