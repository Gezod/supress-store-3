<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="style/login.css" rel="stylesheet">
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="index.php">Account</a></li>
                </ul>
            </nav>
        </header>
    </div>



    
    <!-- Login Form Section -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container" style="height: 600px">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                        </div>
                        <div class="login-container">
                        <form id="Loginform" class="form" action="userlogin.php" method="post">
                            <input type="text"   name="username" id="username" placeholder="email"required> 
                            <input type="password" name="password" id="password" placeholder="password">
                            <button name="submit" type="submit" class="btn">Login</button>
                          	<div class="panel-danger"><a  href="adminlogin.php">Admin ? Log in Here</a></div>
                        </form>
                        </div>
                        <div class="register-container">
                        <form id="Regform" method="post" action="userinsert.php">
                            <input type="text" id="CustomerName" name="CustomerName" placeholder="Customer Name" required>
							<input type="text" id="Address" name="Address" placeholder="Address" required>  
							<input type="text" id="City" name="City" placeholder="City" required>
							<input type="text" id="PostalCode" name="PostalCode" placeholder="PostalCode" required>
							<input type="text" id="Country" name="Country" placeholder="Country" required>
                        <input type="email"  id="email" name="email" placeholder="email" required>
						<input type="password" id="password" name="password" placeholder="password" required>
                            <button type="submit" name="submit"  class="btn"  value="Register">Register </button>
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
    var Loginform = document.getElementById("Loginform");
    var Regform = document.getElementById("Regform");
    var indicator = document.getElementById("indicator");

        function register(){
            Regform.style.transform = "translateX(0px)";
            Loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login(){
            Regform.style.transform = "translateX(300px)";
            Loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }
</script> 
</html>