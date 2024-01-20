<?php
session_start();
$connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");
include "DBconnection.php";
if (!isset($_SESSION['name'])) {
    header("location:product.php");
} else {
    $name = $_SESSION['name'];
    $id = $_SESSION["id"];


    $result = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE CustomerID='" . $id . "'");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="style/header_after_login.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
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
                    <li><a href="#category-section">All Category</a></li>
                    <li>
                        <button type="button" class="image-button">
                            <img src="assets\Asset 3.png" alt="Image Button">
                        </button>
                        <div class="circle">
                            <span class="circle-number">0</span>
                        </div>
                        <button type="button" class="rounded-button" onclick="redirectTo('customer_profile.php')">&nbsp; <?php echo $name; ?></button>

                        <button type="button" class="image-button2" onclick="window.location.href='userLogout.php'">
                            <img src="assets\Asset 1.png" alt="Second Image Button">
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <h3>ONLINE FOOD DELIVERY</h3>
        <h1>Don't Starve</h1>
        <h2>Just Order</h2>
        <h2::after></h2::after>
        <p>Your one-stop destination for a seamless and </p>
        <p> online grocery shopping experience!</p>
        <a href="#category-section" class="explore-button">Explore Now</a>
    </div>

    <!-- Showcase Section -->
    <div class="showcase-section">
        <div class="benefit">
            <img src="assets\benefit1.png" alt="Benefit 1">
            <h3>Convenience at Your Fingertips</h3>
            <p>Shop anytime, anywhere with our user-friendly online platform, making grocery shopping a breeze.</p>
        </div>

        <div class="benefit">
            <img src="assets\benefit2.png" alt="Benefit 2">
            <h3>Freshness Guaranteed</h3>
            <p>Enjoy high-quality and fresh produce delivered right to your doorstep, ensuring a delightful culinary
                experience.</p>
        </div>

        <div class="benefit">
            <img src="assets\benefit3.png" alt="Benefit 3">
            <h3>About No Pesticide</h3>
            <p>Discover our commitment to providing pesticide-free products, ensuring your health and well-being.</p>
        </div>

        <!-- Category Section -->
        <div id="category-section" class="category-section">
            <h1>What do you want to buy today ?</h1>

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
                    <a href="mail to:support@suppress.com">support@suppress.com</a>
                    <a href="tel: +62 - 81936781616">+62 - 81936781616</a>
                </div>
            </div>
        </footer>
</body>

</html>