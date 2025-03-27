<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Package Table Menu</title>
<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Body */
    body {
        background-color: #f4f5f7;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px;
    }

    h1, h3 {
        color: #2C3538;
        text-align: center;
    }

    h1 {
        margin-bottom: 10px;
    }

    h3 {
        margin-bottom: 30px;
        font-weight: 400;
        color: #555;
    }

    /* Table */
    table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #2FB3B5;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
    }

    td {
        font-size: 15px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Links */
    a {
        text-decoration: none;
        color: #2C3538;
        padding: 10px 20px;
        background-color: #2C3538;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #1a8a8e;
    }

    .add-btn {
        background-color: #4CAF50;
    }

    .update-btn {
        background-color: #FFA500;
    }

    .delete-btn {
        background-color: #f44336;
    }

    .dashboard-link {
        margin-top: 30px;
        font-weight: bold;
        color: white;
        font-size: 18px;
    }

    .dashboard-link:hover {
        color: #2FB3B5;
		background-color: black;
    }

</style>
</head>
<body>

<?php
    $con = mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");
    $sql = mysqli_query($con, "SELECT * FROM fitnesspackages");
?>

<h1>Admin! This is the Packages Table Menu</h1> 
<h3>Where you can add, update, and delete packages</h3>

<table>
    <tr>
        <th>Package Name</th>
        <th>Package Price</th>
        <th>Add New Packages</th>
        <th>Update/Edit Packages</th>
        <th>Delete Existing Records</th>
    </tr>

<?php
while ($row = mysqli_fetch_array($sql)) {
?> 	
    <tr>
        <td><?php echo $row['PackageName']; ?></td>
        <td><?php echo $row['PackagePrice']; ?></td>
        <td><a class="add-btn" href="PackageInsertion.php">ADD</a></td>
        <td><a class="update-btn" href="UpdatePackageFormDisplay.php">UPDATE</a></td>
        <td><a class="delete-btn" href="PackageDeletion.php?pkgdelvariable=<?php echo $row['PackageID']; ?>">DELETE</a></td>
    </tr>
<?php
}
?>
</table>

<a class="dashboard-link" href="AdminDashboard.html">Click here to Admin Dashboard</a>

</body>
</html>
