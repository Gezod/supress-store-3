<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
</head>
 <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
    <?php
	
if (isset($_POST['submit'])) {
    include("DBconnection.php");

    $CustomerName = $_POST['CustomerName'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $PostalCode = $_POST['PostalCode'];
    $Country = $_POST['Country'];
    $email = $_POST['email'];	
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_customer (CustomerName, Address, City, PostalCode, Country, email, password) 
            VALUES('$CustomerName', '$Address', '$City', '$PostalCode', '$Country', '$email', '$hashedPassword')";
	
    $results = mysqli_query($conn, $sql);
	
    if (!$results) {
        die('Could not enter data: ' . mysqli_error($conn));
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'Registration successful!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'index.php';
                    }
                });
              </script>";
    }
} else {
    // Echo 'submit the form first';
}
?>

</body>
</html>