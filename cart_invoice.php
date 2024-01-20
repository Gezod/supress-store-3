<?php
//cart.php
session_start();
$connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");

if(!isset($_SESSION['id']))
{
	header("location:show_vegetable_product.php");
}
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];


?> 
 
 


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name;?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<br />
<div class="container">
<div class="header" >	
 <link rel="stylesheet" href="style/cart.css">
 <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <?php
    if(isset($_POST["place_order"]))
    {
        $insert_order = "  
                     INSERT INTO tbl_order(customer_id, creation_date, order_status)  
                     VALUES('$id', '".date('Y-m-d')."', 'pending')  
                     ";
        $order_id = "";
        if(mysqli_query($connect, $insert_order))
        {
            $order_id = mysqli_insert_id($connect);
        }
        $_SESSION["order_id"] = $order_id;
        $order_details = "";
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            $order_details .= "  
                          INSERT INTO tbl_order_details(order_id, product_name, product_price, product_quantity)  
                          VALUES('".$order_id."', '".$values["product_name"]."', '".$values["product_price"]."', '".$values["product_quantity"]."');  
                          ";
        }
        if(mysqli_multi_query($connect, $order_details))
        {
            unset($_SESSION["shopping_cart"]);
            echo '<script>alert("You have successfully place an order......Thank you")</script>';
            
            //header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
        }
    }
    if(isset($_SESSION["order_id"]))
    {
        $customer_details = '';
        $order_details = '';
        $total = 0;
        $query = '  
                     SELECT * FROM tbl_order  
                     INNER JOIN tbl_order_details  
                     ON tbl_order_details.order_id = tbl_order.order_id  
                     INNER JOIN tbl_customer  
                     ON tbl_customer.CustomerID = tbl_order.customer_id  
                     WHERE tbl_order.order_id = "'.$_SESSION["order_id"].'"  
                     ';
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result))
        {
            $tbl_customer = '  
                          <label>'.$row["CustomerName"].'</label>  
                          <p>'.$row["Address"].'</p>  
                          <p>'.$row["City"].', '.$row["PostalCode"].'</p>  
                          <p>'.$row["Country"].'</p>  
                          ';
            $order_details .= "  
                               <tr>  
                                    <td>".$row["product_name"]."</td>  
                                    <td>".$row["product_quantity"]."</td>  
                                    <td>".$row["product_price"]."</td>  
                                    <td>".($row["product_quantity"] * $row["product_price"])."</td>  
                               </tr>  
                          ";
            $total = $total + ($row["product_quantity"] * $row["product_price"]);
        }
        echo '  
                     <h2 align="center"> Bill for Order Summary  No :- '.$_SESSION["order_id"].'</h2>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Customer Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'. $tbl_customer.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Order Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th>  
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$order_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>Rp'.($total).'</td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table> 
						 
                     </div>  
                     ';
    }
    ?>


             
               <div>
                    <a class="btn" href="header_after_login.php">Shop Again</a>
               </div>
               <div>
                    <a class="btn btn-primary" href="userLogout.php">Logout</a>
               </div>

               <div align="center">
                    <button onClick="window.print();" class="btn btn-danger">Print</button>
               </div>
	</div>
</body>
</html>