<?php
session_start();
$connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");
include "DBconnection.php";
if (!isset($_SESSION['name'])) {
    header("");
} else {
    $name = $_SESSION['name'];
    $id = $_SESSION["id"];

    $result = mysqli_query($connect, "SELECT * FROM tbl_customer WHERE CustomerID='" . $id . "'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - <?php echo $CustomerName; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="style/customer_profile.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
</head>

<body style="margin-top: -20px; background: linear-gradient(155deg, rgba(170, 0, 93, 1) 0%, rgba(144, 8, 136, 1) 48%, rgba(56, 15, 227, 1) 100%);">

    <!-- Header -->
    <div class="nav-container">
        <header>
            <div class="logo">
                <a href="header_after_login.php">
                    <img src="assets/logo.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="header_after_login.php" class="active">Home</a></li>
                    <li><a href="#category-section">All Category</a></li>
                    <li>
                        <button type="button" class="image-button">
                            <img src="assets/Asset 3.png" alt="Image Button">
                        </button>
                        <div class="circle">
                            <span class="circle-number">0</span>
                        </div>
                        <button type="button" class="rounded-button">&nbsp; <?php echo $name; ?></button>
                        <button type="button" class="image-button2">
                            <img src="assets\Asset 1.png" alt="Second Image Button">
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
    </div>


<!--customer table-->
    <table class="table table-striped table-hover">
    <caption>Customer Profile</caption>
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody align="center" style="font-size: 20px">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td style="background-color: azure; color: black">My ID</td>
                <td><?php echo $row['CustomerID']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Name</td>
                <td><?php echo $row['CustomerName']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Address</td>
                <td><?php echo $row['Address']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">City</td>
                <td><?php echo $row['City']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Postal Code</td>
                <td><?php echo $row['PostalCode']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Country</td>
                <td><?php echo $row['Country']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Email</td>
                <td><?php echo $row['Email']; ?></td>
            </tr>
            <tr>
                <td style="background-color: azure; color: black">Password</td>
                <td>
                    <span id="password" style="display: none;"><?php echo $row['password']; ?></span>
                    <span class="hide-password" onclick="togglePassword()"> (show)</span>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    function togglePassword() {
        var passwordElement = document.getElementById("password");
        var hidePasswordElement = document.querySelector(".hide-password");
        
        if (passwordElement.style.display === "none") {
            passwordElement.style.display = "inline";
            hidePasswordElement.textContent = " (hide)";
        } else {
            passwordElement.style.display = "none";
            hidePasswordElement.textContent = " (show)";
        }
    }
</script>


    <!-- Category Section -->
    <div id="category-section" class="category-section">
        <h1>Pilih kategori produk</h1>

        <button class="category-button" onclick="redirectTo('show_fruit_product.php')">
            <img src="assets\fruit.png" alt="Category 1">
        </button>

        <button class="category-button" onclick="redirectTo('show_vegetable_product.php')">
            <img src="assets\vegetable.png" alt="Category 2">
        </button>

        <button class="category-button" onclick="redirectTo('show_cooking_essentials_product.php')">
            <img src="assets\powder.png" alt="Category 3">
        </button>

        <button class="category-button" onclick="redirectTo('show_beverages_product.php')">
            <img src="assets\beverages.png" alt="Category 4">
        </button>
    </div>

<script>
            function redirectTo(url) {
                window.location.href = url;
            }
        </script>

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


</body>

</html>