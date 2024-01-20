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
    include 'DBconnection.php';

    $message = "";
    $url = "";
    $type = ""; // Type of notification

    if (isset($_POST['submit'])) {
        // Prepare a statement to avoid SQL injection
        $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_email = ?");
        $stmt->bind_param("s", $_POST["admin_email"]);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            // Verify the password
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION["id"] = $row['id']; // Assuming you have an 'id' column
                $_SESSION["email"] = $row['admin_email'];

                $message = "Login successful!";
                $url = "admin_after_loginn.php"; // Redirect to the desired page after login
                $type = "success";
            } else {
                $message = "Invalid Username or Password!";
                $url = "adminlogin.php";
                $type = "error";
            }
        } else {
            $message = "Invalid Username or Password!";
            $url = "adminlogin.php";
            $type = "error";
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
