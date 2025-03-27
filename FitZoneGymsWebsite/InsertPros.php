<?php
$connect=mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");


if(isset($_POST['psubmit'])){
	
$Product_Name=$_POST['Product_Name'];
$Product_Price=$_POST['Product_Price'];
$Quantity=$_POST['Quantity'];
$Image=$_POST['Image'];
$TypeID=$_POST['TypeID'];

$sql="INSERT INTO `product`(`Product_Name`, `Product_Price`, `Quantity`, `Image`, `TypeID`) 
                   VALUES ('$Product_Name','$Product_Name','$Quantity','$Image','$TypeID')";
	
$qry=mysqli_query($connect,$sql);
if($qry){
	echo "inserted successfully";
}
	
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>InsertProduct</title>
</head>
<body>
	
	<form>
	
		<input type="text" name="Product_Name">
		<input type="text" name="Product_Price">
		<input type="number" name="Quantity">
		<input type="text" name="Image" value="Images&#47">
		Choose the Product Type(1-Equipment / 2-Supplement):
        <select name="TypeID">
           <option value="1">1</option>
           <option value="2">2</option>
        </select>
		<input type="submit" name="psubmit">
	
	</form>
	
</body>
</html>