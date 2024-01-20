<?php
$servername = "localhost";
$username = "u444096365_suppress_store";
$password = "Ref4ngg4!";
$dbname = "u444096365_suppress_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Fetch data from 'cooking_essentials' table
$query = "SELECT * FROM cooking_essentials ORDER BY id ASC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching data from 'cooking_essentials': " . mysqli_error($conn));
}

session_start();
$connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");
include "DBconnection.php";
if (!isset($_SESSION['name'])) {
    header("location:product.php");
} else {
    $name = $_SESSION['name'];
    $id = $_SESSION["id"];


    $resultt = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE CustomerID='" . $id . "'");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Express Supermarket</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link href="style/showcookingessentialsproduct.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <div class="nav-container">
        <header>
            <div class="logo">
                <a href="header_after_login.php">
                    <img src="assets/logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="header_after_login.php" class="active">Home</a></li>

                    <li><a href="#">All Product</a></li>
                    <li>
                        <button type="button" class="image-button">
                            <img src="assets\Asset 3.png" alt="Image Button">
                        </button>
                        <li><a data-toggle="tab" href="#cart">Cart &nbsp; <i class="fa fa-shopping-cart"></i>&nbsp;<span
                                    class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a>
                        </li>
                        <button type="button" class="rounded-button" onclick="redirectTo('customer_profile.php')">&nbsp; <?php echo $name; ?></button>

                        <button type="button" class="image-button2" onclick="window.location.href='userLogout.php'">
                            <img src="assets\Asset 1.png" alt="Second Image Button">
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- Header for Category Buttons -->
    <div class="category-header">
        <h2>Explore Categories</h2>
    </div>

    <!-- Category Buttons with Images -->
    <div class="category-section">
        <button type="button" class="category-button" onclick="redirectTo('show_beverages_product.php')">
            <img src="assets/beverages.png" alt="Category Image 1">
        </button>

        <button class="category-button" onclick="redirectTo('show_fruit_product.php')">
            <img src="assets/fruit.png" alt="Category Image 2">
        </button>

        <button class="category-button" onclick="redirectTo('show_vegetable_product.php')">
            <img src="assets/vegetable.png" alt="Category Image 3">
        </button>
    </div>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>


    <div class="productsection" align="center">

        <div class="col-2">
            <h1 style="color: #ffffff;">Cooking Essentials<br></h1>
        </div>

        <div class="tab-content">
            <div id="Gents" class="tab-pane fade in active">
                <?php
                $counter = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($counter % 6 == 0) {
                        // Start a new row after every 6 products
                        if ($counter > 0) {
                            echo '</div>';
                        }
                        echo '<div class="product-row">';
                    }
                ?>
                    <div class="product-container">
                        <img src="images/cookingessentials/<?php echo $row["image"]; ?>" class="img-responsive" />
                        <div class="product-details">
                            <h4 style="font-size: 20px;" class="text-danger"><a href="productdetailscookingessentials.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?> - <?php echo $row["details"]; ?></a></h4>
                            <h4 style="font-size: 20px;" class="text-danger">Rp <?php echo $row["price"]; ?></h4>
                            <input type="number" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" style="font-size: 12px;" min="1" />

                            <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
                            <input type="hidden" name="hidden_image" id="image<?php echo $row["id"]; ?>" value="<?php echo $row["image"]; ?>" />
                            <br>
                            <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" class="btn btn-warning form-control add_to_cart" value="Add to Cart" onClick='conf()' style="font-size: 16px;" />
                        </div>
                    </div>
                <?php
                    $counter++;
                }
                // Close the last row
                echo '</div>';
                ?>
            </div>
            <div id="cart" class="tab-pane fade">
                        <div class="table-responsive" id="order_table">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="40%">Product Name</th>
                                    <th width="10%">Quantity</th>
                                    <th width="20%">Price</th>
                                    <th width="15%">Total</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>
                                <tr>
                                    <td><?php echo $values["product_name"]; ?></td>
                                    <td align="right"><?php echo $values["product_quantity"]; ?></td>
                                    <td align="right">Rp.<?php echo $values["product_price"]; ?></td>
                                    <td align="right">
                                        Rp.<?php echo ($values["product_quantity"] * $values["product_price"]); ?>
                                    </td>

                                    <td><button name="delete" class="btn btn-danger btn-xs delete"
                                            id="<?php echo $values["product_id"]; ?>">Remove</button></td>
                                </tr>
                                <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>
                                <tr>
                                    <td colspan="3" align="right">Total</td>
                                    <td align="right">Rp.<?php echo ($total); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right">
                                        <form method="post" action="cart.php">
                                            <input type="submit" name="place_order" class="btn btn-success"
                                                value="Place Order" />
                                        </form>
                                    </td>
                                </tr>
                                <?php  
                                    }  
                                    ?>
                            </table>
                        </div>
                    </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-menu">
            <section>
                <h3>Download Our App</h3>
                <p>Get our app for a seamless shopping experience.</p>
                <div class="app-download">
                    <button><img src="assets\googleplay.png" alt="Google Play Store"></button>
                    <button><img src="assets\apple.png" alt="Apple App Store"></button>
                </div>
            </section>

            <section>
                <img src="assets/logo.png" alt="Logo">
            </section>

            <section>
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">Coupon</a></li>
                    <li><a href="#">Blog Post</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Join Affiliate</a></li>
                </ul>
            </section>

            <section>
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </section>
        </div>

        <div class="footer-copyright">
            <div>
                <p>&copy; 2023 SUPPRESS</p>
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
            </div>

            <div>
                <p>Contact Us:</p>
                <a href="mailto:support@suppress.com">support@suppress.com</a>
                <a href="tel:+62-81936781616">+62 - 81936781616</a>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>  
$(document).ready(function(data){  
    $('.add_to_cart').click(function(){  
        var product_id = $(this).attr("id");  
        var product_name = $('#name'+product_id).val();  
        var product_price = $('#price'+product_id).val();  
        var product_quantity = $('#quantity'+product_id).val();  
        var action = "add";  
        if(product_quantity > 0)  
        {  
            $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    dataType:"json",  
                    data:{  
                        product_id:product_id,   
                        product_name:product_name,   
                        product_price:product_price,   
                        product_quantity:product_quantity,   
                        action:action  
                    },  
                    success:function(data)  
                    {  
                        $('#order_table').html(data.order_table);  
                        $('.badge').text(data.cart_item);  
                        alert("Product has been Added into Cart");  
                        location.reload(); // Menambahkan ini untuk refresh halaman
                    }  
            });  
        }  
        else  
        {  
            alert("Please Enter Number of Quantity")  
        }  
    });  
    $(document).on('click', '.delete', function(){  
        var product_id = $(this).attr("id");  
        var action = "remove";  
        if(confirm("Are you sure you want to remove this product?"))  
        {  
            $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    dataType:"json",  
                    data:{product_id:product_id, action:action},  
                    success:function(data){  
                        $('#order_table').html(data.order_table);  
                        $('.badge').text(data.cart_item);  
                        location.reload();
                    }  
            });  
        }  
        else  
        {  
            return false;  
        }  
    });  
    $(document).on('keyup', '.quantity', function(){  
        var product_id = $(this).data("product_id");  
        var quantity = $(this).val();  
        var action = "quantity_change";  
        if(quantity != '')  
        {  
            $.ajax({  
                    url :"action.php",  
                    method:"POST",  
                    dataType:"json",  
                    data:{product_id:product_id, quantity:quantity, action:action},  
                    success:function(data){  
                        $('#order_table').html(data.order_table);  
                    }  
            });  
        }  
    }); 

});

    
</script>	
</body>

</html>

<?php
// Close the connection
$conn->close();
?>