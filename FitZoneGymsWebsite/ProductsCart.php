<?php
include('session.php');

$servername='localhost:3306';
$username='root';
$password='';
$database_name='fitzonegymsdb';

//creating the databse connection
$conn= mysqli_connect($servername, $username, $password, $database_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["productCartSessionVariable"])){
            $products_array_id = array_column($_SESSION["productCartSessionVariable"],"product_id");
            if(!in_array($_GET["Product_ID"],$products_array_id)){
                $count = count($_SESSION["productCartSessionVariable"]);
                $products_array = array(
                    'product_id' => $_GET["Product_ID"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"], 
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["productCartSessionVariable"][$count] = $products_array;
                echo '<script>location="ProductsCart.php"</script>';
            }else{
                echo '<script>alert("This Product is already in  the cart")</script>';
                echo '<script>location="ProductsCart.php"</script>';
            }
        }else{
            $products_array = array(
                'product_id' => $_GET["Product_ID"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["productCartSessionVariable"][0] = $products_array;
        }
    }
 
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["productCartSessionVariable"] as $keys => $value){
                if($value["product_id"] == $_GET["Product_ID"]){
                    unset($_SESSION["productCartSessionVariable"][$keys]);
                    echo '<script>alert("Product Removed Successfull!")</script>';
                    echo '<script>location="ProductsCart.php"</script>';
                }
            }
        }
    }
?>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Cart</title>
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
    background-color: #f4f6f9;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Headers */
h1, h2, h3, h5 {
    color: #2C3E50;
    text-align: center;
    margin: 10px 0;
}

/* Cart Table */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    overflow-x: auto;
}

table th, table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

table th {
    background-color: #2C3E50;
    color: #fff;
    font-weight: bold;
}

table td {
    color: #333;
}

table tr:hover {
    background-color: #f4f4f4;
}

/* Buttons */
button, .add-to-cart-btn {
    padding: 10px 20px;
    font-size: 15px;
    color: #fff;
    background-color: #2C3E50;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

button:hover, .add-to-cart-btn:hover {
    background-color: #4E4E4A;
}

#btnUnderline {
    color: #fff;
    text-decoration: none;
}

/* Cart Items */
.structure {
    border: 1px solid #eaeaec;
    margin: 15px;
    padding: 10px;
    text-align: center;
    background-color: #fff;
    width: 220px;
    height: 500px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.structure img {
    width: 190px;
    height: 200px;
    border-radius: 8px;
    margin-bottom: 10px;
}

.structure h5 {
    color: #2C3E50;
    font-size: 16px;
    margin-bottom: 5px;
}

.structure input[type="text"] {
    width: 50px;
    text-align: center;
    margin: 10px 0;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

/* Messages */
.title2, .message {
    background-color: #2C3E50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    width: 80%;
    margin: 10px auto;
    text-align: center;
    font-size: 20px;
}

/* Layout Adjustments */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px 0;
}

.col-md-3 {
    width: 220px;
    margin: 10px;
}

@media (max-width: 768px) {
    table, .structure {
        width: 90%;
    }
    
    .container {
        flex-direction: column;
        align-items: center;
    }
}

</style>
</head>
<body bgcolor="#F4E6E6">
<br>
<br>
	<h1>You are in the Fitzone Gym's Online Products Store Now Where you can buy products online!</h1>
	<h3 align="right">Welcome for our online products store - <?php echo $login_session; ?></h3> 
    <h5 align="right"><a href = "LogOut.php">Log Out</a></h5>
<br>
<br>
   <h2 class="title2">Products Cart Details</h2>
  
   <table align="center">
     <tr>
        <th width="30%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="13%">Product Price(LKR)</th>
        <th width="10%">Total Price(LKR)</th>
        <th width="17%">Remove</th>
     </tr>
            <?php
                if(!empty($_SESSION["productCartSessionVariable"])){
                    $total=0;
                    foreach($_SESSION["productCartSessionVariable"] as $key => $value){
             ?>
                <tr>
                   <td><?php echo $value["product_name"];?></td>
                   <td><?php echo $value["product_quantity"];?></td>
                   <td><?php echo $value["product_price"];?></td>
                   <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                   <td><a href="ProductsCart.php?action=delete&Product_ID=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
             <?php
                 $total = $total + ($value["product_quantity"]*$value["product_price"]);
               }
             ?>
                <tr>
                   <td colspan="3" align="right">Total</td>
                   <td align="right"><?php echo number_format($total,2);?></td>
                   <td></td>
                </tr>
            <?php
               }
            ?>
    </table>
 
<br>
<br>
<br>
	<div align="center">
	<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="Payment.php">PROCEED TO PAY</a></button>
    </div>
<br>
<br>
 <h2>Products Cart</h2>
        <?php
            $query = "select * from product order by Product_ID asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="ProductsCart.php?action=add&Product_ID=<?php echo $row["Product_ID"];?>">
                            <div class="structure">
                                <img src="<?php echo $row["Image"];?>" width="190px" height="200px">
                                <h5><?php echo $row["Product_Name"];?></h5>
                                <h5>LKR <?php echo $row["Product_Price"];?></h5>
								<h5>Available Quantity<br><?php echo $row["Quantity"];?></h5>
                                <h5>1=Equipment / 2=Supplement<br><?php echo $row["TypeID"];?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["Product_Name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["Product_Price"];?>">
                                <input type="submit" name="add" style="margin-top: 5px; background-color: #2D4382; border-radius:20px; cursor: pointer;" value="Add to Cart">
                            </div>
                        </form>
                    </div>
              
        <?php
                }
            }
        ?>
</div>
<br>
<br>
<br>
<br>
</body>
</html>