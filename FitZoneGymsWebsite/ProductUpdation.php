<?php
//create database connection
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
       
//select database
    mysqli_select_db($conn,'fitzonegymsdb');

//update query
   $sql = "UPDATE product SET Product_Name='$_POST[proName]',Product_Price='$_POST[proPrice]',Quantity='$_POST[proQuantity]',Image='$_POST[proImage]',TypeID='$_POST[proTypeId]' WHERE Product_ID='$_POST[proId]'";
       
//execute sql query
   if(mysqli_query($conn,$sql)) 
   {
	 echo "Record Successfully Updated...You will be redirected back now!";
     header("refresh:1 url=UpdateProductFormDisplay.php");
   }

   else
   {
	  echo "Not Updated";   
   }
       
?>
