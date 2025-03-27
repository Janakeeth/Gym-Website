<?php
  if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM product WHERE CONCAT(Product_ID,Product_Name,Product_Price,Quantity,Image,TypeID) LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
   }
  else {
     $query = "SELECT * FROM product";
     $search_result = filterTable($query);
   }

   function filterTable($query) {
       $servername = "localhost:3306";
       $username = "root";
       $password = "";
       $connect = mysqli_connect($servername, $username, $password,"fitzonegymsdb");
       $filter_Result = mysqli_query($connect,$query);
       return $filter_Result;
   }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
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
  background-color: #f4f5f7;
  color: #333;
  padding: 20px;
}

/* Header Styling */
header {
  text-align: center;
  margin-bottom: 30px;
}

header h1 {
  font-size: 36px;
  color: #4A90E2;
}

/* Search Form Styling */
.search-form {
  text-align: center;
  margin-bottom: 30px;
}

.search-form input[type="text"] {
  padding: 10px;
  width: 40%;
  font-size: 16px;
  border: 2px solid #ccc;
  border-radius: 5px;
}

.search-form button {
  padding: 10px 15px;
  font-size: 16px;
  background-color: #4A90E2;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-form button:hover {
  background-color: #357ABD;
}

/* Container Styling for Products */
.product-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

/* Individual Product Card */
.product-card {
  background-color: #ffffff;
  width: 250px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  transition: transform 0.3s ease;
  text-align: center;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-card h5 {
  margin: 10px 0;
  font-size: 18px;
  color: #333;
}

/* Price & Quantity Styling */
.product-price,
.product-quantity,
.product-type {
  font-size: 16px;
  color: #555;
}

.product-card button {
  margin-top: 15px;
  padding: 10px 15px;
  font-size: 16px;
  background-color: #4A90E2;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.product-card button:hover {
  background-color: #357ABD;
}

/* Back Link */
.back-link {
  display: inline-block;
  margin-top: 30px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #4A90E2;
  color: #ffffff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.back-link:hover {
  background-color: #357ABD;
}
</style>
</head>
<body>

<header>
  <h1>Fitzone Gym Products</h1>
</header>

<!-- Search Form -->
<div class="search-form">
  <form action="Products.php" method="POST">
    <input type="text" name="valueToSearch" placeholder="Search products..." required>
    <button type="submit" name="search">Search</button>
  </form>
</div>

<!-- Display Products -->
<div class="product-container">
    <?php
        if(mysqli_num_rows($search_result) > 0){
            while($row = mysqli_fetch_array($search_result)){
    ?>
        <div class="product-card">
            <form method="post" action="ProductsCart.php?action=Product_ID=<?php echo $row["Product_ID"]; ?>">
                <img src="<?php echo $row["Image"]; ?>" alt="Product Image">
                <h5><?php echo $row["Product_Name"]; ?></h5>
                <div class="product-price">LKR <?php echo $row["Product_Price"]; ?></div>
                <div class="product-quantity">Available Quantity: <?php echo $row["Quantity"]; ?></div>
                <div class="product-type">
                    Type: <?php echo ($row["TypeID"] == 1) ? "Equipment" : "Supplement"; ?>
                </div>
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    <?php
            }
        }
    ?>
</div>

<!-- Back Link -->
<center><a href="Products.php" class="back-link">Back</a></center>

</body>
</html>
