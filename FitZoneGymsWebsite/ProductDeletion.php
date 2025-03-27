<?php
	
//Getting delvariable variables value
$proid=$_GET['delvariable'];

//connection
$con=mysqli_connect("localhost:3306","root","","fitzonegymsdb");
$query="delete from product where Product_ID='$proid'";
$data=mysqli_query($con,$query);

header("location:ProductMenuTable.php");






//http://localhost:8077/FitzoneGymsWebsite/ProductMenuTable.php
?> 