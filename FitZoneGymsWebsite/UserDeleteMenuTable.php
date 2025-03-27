<?php
    $con = mysqli_connect("localhost:3306", "root", "", "fitzonegymsdb");
    $sql = mysqli_query($con, "SELECT * FROM user");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>UserDeleteMenu</title>
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
            background-color: #f7f7f7;
            font-size: 16px;
            color: #333;
            padding: 20px;
        }

        /* Heading Styling */
        h1, h3 {
            text-align: center;
            color: #333;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 40px;
            color: #4CAF50;
        }

        /* Table Styling */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }

        table td {
            font-size: 16px;
            color: #555;
        }

        /* Delete Button Styling */
        a {
            display: inline-block;
            padding: 8px 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e53935;
        }

        /* Centered Link Styling */
        .back-link {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        .back-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Admin! This is the Users Table Menu</h1>
    <h3>Where you can add, update, and delete users</h3>

    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Delete Existing Records</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td><a href="UserDeletion.php?usrdelvariable=<?php echo $row['UserID']; ?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <center><a href="AdminDashboard.html" class="back-link">Click here to go to Admin Dashboard</a></center>

</body>
</html>
