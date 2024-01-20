<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");  
 
include "DBconnection.php";
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
    <link href="style/adminlogin.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Header -->
    <div class="nav-container">
        <header>
            <div class="logo">
                <img src="assets/Logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="adminlogin.php" class="active">Home</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="index.php">Account</a></li>
                </ul>
            </nav>
        </header>
    </div>



    
    <!-- Login Form Section -->
    <div class="login-container">
        <h2> Admin Registration</h2>
        <form class="form" action="admin_insert.php" method="post">
            <label for="admin_name">Name:</label>
            <input type="text" id="admin_name" name="admin_name" required>

            <label for="admin_email">Email:</label>
            <input type="email" id="admin_email" name="admin_email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Register</button>
        </form>
    </div>



    <footer class="footer-container" >
        <div class="footer-menu">
            <section>
                <h3>Download Our App</h3>
                <p>Get our app for a seamless shopping experience.</p>
                <div class="app-download">
                    <button><img src="assets/googleplay.png" alt="Google Play Store"></button>

                    <button><img src="assets/apple.png" alt="Apple App Store"></button>
                </div>
            </section>

    <div class="footerlogo">
            <section>
                    <img src="assets/logo.png" alt="Logo">
            </section>
        </div>
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

        <div class="footer-copyright" style="padding-bottom: 20px;">
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
    </div>
    </footer>
</body>
</html>