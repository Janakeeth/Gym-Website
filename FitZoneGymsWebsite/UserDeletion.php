<?php
	
//Getting usrdelvariable variables value
$uid=$_GET['usrdelvariable'];

//connection
$con=mysqli_connect("localhost:3306","root","","fitzonegymsdb");
$query="delete from user where UserID='$uid'";
$data=mysqli_query($con,$query);

header("location:UserDeleteMenuTable.php");

?> 