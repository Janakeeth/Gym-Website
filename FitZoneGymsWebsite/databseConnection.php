<?php

$servername= "localhost:3306";
$username= "root";
$password = "";
$database_name = "fitzonegymsdb";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


