<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Table Menu</title>
<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Body Styling */
    body {
        background-color: #f0f4f8;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    /* Title and Subtitle */
    h1 {
        font-size: 28px;
        color: #2C3E50;
        text-align: center;
        margin-bottom: 10px;
    }

    h3 {
        font-size: 18px;
        color: #7F8C8D;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Table Styling */
    table {
        width: 90%;
        max-width: 1000px;
        margin: 0 auto;
        border-collapse: collapse;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #2FB3B5;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Action Links */
    a {
        text-decoration: none;
        color: #3498DB;
        font-weight: bold;
    }

    a:hover {
        color: #2980B9;
    }

    /* Back to Dashboard Link */
    .back-link {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #3498DB;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }

    .back-link:hover {
        background-color: #333;
    }

    /* Add, Update, Delete Button Styling */
    .action-btn {
        padding: 6px 12px;
        background-color: #3498DB;
        color: #fff;
        border-radius: 4px;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .action-btn:hover {
        background-color: #333;
    }
</style>
</head> 
<body>

<?php
    $con = mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");
    $sql = mysqli_query($con, "select * from product");
?>

<h1>Admin! This is the Product Table Menu</h1>
<h3>Where you can add, update, and delete products</h3>

<table>
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>ProductTypeID<br>(Equipment=1 / Supplement=2)</th>
        <th>Add New Products</th>
        <th>Update/Edit Products</th>
        <th>Delete Existing Records</th>
    </tr>

<?php
while ($row = mysqli_fetch_array($sql)) {
?>
    <tr>
        <td><?php echo $row['Product_Name']; ?></td>
        <td><?php echo $row['Product_Price']; ?></td>
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Image']; ?></td>
        <td><?php echo $row['TypeID']; ?></td>
        <td><a href="ProductInsertion.php" class="action-btn">ADD</a></td>
        <td><a href="UpdateProductFormDisplay.php" class="action-btn">UPDATE</a></td>
        <td><a href="ProductDeletion.php?delvariable=<?php echo $row['Product_ID']; ?>" class="action-btn">DELETE</a></td>
    </tr>
<?php
}
?>
</table>

<a href="AdminDashboard.html" class="back-link">Click here to Admin Dashboard</a>

</body>
</html>
