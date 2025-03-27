<?php
  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $records = null;
  $conn = mysqli_connect($servername, $username, $password);

  if (!mysqli_select_db($conn,'fitzonegymsdb')) {
    echo("Database not selected");
  } else {
    $sql = "SELECT * FROM product";
    $records = mysqli_query($conn,$sql);
  }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Product Records</title>
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
  background-color: #f5f5f5;
  color: #333;
  padding: 20px;
  font-size: 16px;
}

/* Heading */
h3 {
  font-size: 28px;
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Table Styling */
table {
  width: 90%;
  margin: 20px auto;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Table Header */
th {
  background-color: #4CAF50;
  color: white;
  padding: 12px 15px;
  text-align: left;
}

/* Table Row */
td {
  padding: 12px 15px;
  text-align: left;
  border: 1px solid #ddd;
}

/* Input Fields */
input[type="text"] {
  padding: 10px;
  width: 100%;
  font-size: 16px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #fafafa;
}

/* Submit Button */
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Link Styling */
a {
  text-decoration: none;
  color: #4CAF50;
  font-size: 16px;
  margin-top: 20px;
  display: inline-block;
  padding: 10px;
}

a:hover {
  color: #357a38;
}
</style>
</head>
<body>

<h3>Update Existing Records In The Product Table</h3>

<table>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Quantity</th>
    <th>Image</th>
    <th>Product Type ID<br>1=Equipment / 2=Supplement</th>
    <th>Update</th>
  </tr>

  <?php
  while ($row = mysqli_fetch_array($records)) {
    echo "<tr>
            <form action='ProductUpdation.php' method='post'>
              <td><input type='text' name='proId' value='" . $row['Product_ID'] . "' readonly></td>
              <td><input type='text' name='proName' value='" . $row['Product_Name'] . "'></td>
              <td><input type='text' name='proPrice' value='" . $row['Product_Price'] . "'></td>
              <td><input type='text' name='proQuantity' value='" . $row['Quantity'] . "'></td>
              <td><input type='text' name='proImage' value='" . $row['Image'] . "'></td>
              <td><input type='text' name='proTypeId' value='" . $row['TypeID'] . "'></td>
              <td><input type='submit' value='UPDATE'></td>
            </form>
          </tr>";
  }
  ?>
</table>

<center><a href="ProductMenuTable.php">Back To Product Records Table</a></center>

</body>
</html>
