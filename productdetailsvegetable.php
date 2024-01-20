<?php
$servername = "localhost";
$username = "u444096365_suppress_store";
$password = "Ref4ngg4!";
$dbname = "u444096365_suppress_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM vegetables WHERE id='" . $id . "'");
$row = $result->fetch_assoc();

$pid = $row['id'];
$image = $row['image'];
$pname = $row['name'];
$price = $row['price'];
$details = $row['details'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - <?php echo $pname; ?></title>

    <link href="style/productdetailsvegetables.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">

</head>

<body style="margin-top: -20px; background: linear-gradient(155deg, rgba(170, 0, 93, 1) 0%, rgba(144, 8, 136, 1) 48%, rgba(56, 15, 227, 1) 100%);">

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
                    <li> <button type="button" class="image-button">
                            <img src="assets/Asset 3.png" alt="Image Button">
                        </button>
                        <div class="circle">
                            <span class="circle-number">0</span>
                        </div>
                        <button type="button" class="rounded-button">AKUN</button>
                        <button type="button" class="image-button2">
                            <img src="assets\Asset 1.png" alt="Second Image Button">
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container single-product">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="product-image-container">
                    <img src="images/vegetable/<?php echo $image; ?>" alt="<?php echo $pname; ?>" class="img-fluid product-image">
                </div>
            </div>
            <div class="col-12 col-md-6 product-details-container">
                <div class="product-details-content">
                    <h1><?php echo $pname; ?></h1>
                    <h2>Price: Rp <?php echo $price; ?></h2>
                    <h2>Product Details : <?php echo $details; ?></h2>
                    <div class="go-back-button">
                        <button onclick="goBack()">Go Back</button>
                    </div>
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

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>

<?php
// Close the connection
$conn->close();
?>