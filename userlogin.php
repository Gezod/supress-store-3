<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
    session_start();
    $connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");

    $message = "";
    $url = "";
    $type = ""; // Type of notification

    if (isset($_POST['submit'])) {
        if (count($_POST) > 0) {
            include 'DBconnection.php';

            // Fetch the user's data based on the username (or email)
            $result = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE email='" . $_POST["username"] . "'");
            $row = mysqli_fetch_array($result);

            if (is_array($row)) {
                // Verify the password
                if (password_verify($_POST['password'], $row['password'])) {
                    $_SESSION["id"] = $row['CustomerID'];
                    $_SESSION["name"] = $row['CustomerName'];
                    $_SESSION["email"] = $row['email'];

                    $message = "Login successful!";
                    $url = "header_after_login.php";
                    $type = "success";
                } else {
                    $message = "Invalid Username or Password!";
                    $url = "index.php";
                    $type = "error";
                }
            } else {
                $message = "Invalid Username or Password!";
                $url = "index.php";
                $type = "error";
            }
        }
    }
    ?>

    <script>
        <?php if (!empty($message)): ?>
            Swal.fire({
                title: "<?php echo $type === 'success' ? 'Success!' : 'Error!'; ?>",
                text: "<?php echo $message; ?>",
                icon: "<?php echo $type; ?>",
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '<?php echo $url; ?>';
                }
            });
        <?php endif; ?>
    </script>
</body>
</html>
