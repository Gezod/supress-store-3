<?php
session_start();
$connect = mysqli_connect("localhost", "u444096365_suppress_store", "Ref4ngg4!", "u444096365_suppress_store");
include "DBconnection.php";
if (isset($_SESSION['name'])) {
    header("location:crud_vegetable.php");
} else {
   


    $mysqli = new mysqli('localhost', 'u444096365_suppress_store', 'Ref4ngg4!', 'u444096365_suppress_store') or die(mysqli_error($mysqli));
    $result  = $mysqli->query("SELECT * FROM vegetables") or die($mysqli->error);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link href="style/crud_vegetable.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <div class="nav-container">
        <header>
            <div class="logo">
                <img src="assets\Logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="admin_after_loginn.php" >Home</a></li>
                    <li><a href="crud_beverages.php" >Beverage</a></li>
                    <li><a href="crud_powder.php">Cooking Essentials</a></li>
                    <li><a href="crud_fruit.php">Fruits</a></li>
                    <li><a href="crud_vegetable.php"  class="active">Vegetables</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="new-button-container">
        <button type="button" onclick="openAddNewItemModal()" class="new-button">
            <i class="fa fa-user-secret"></i> &nbsp; Add New Items
        </button>
        <nav>
                <ul>
                <li><a class=""> <i class="fa fa-user-circle"></i> Admin </a> </li>
				 
                 <li><a class=""  href="userLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  </li> 
                </ul>
            </nav>
    </div>


    <div id="addNewItemModal" class="modal-overlay" style="display: none">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Items</h2>
            </div>
            <form method="post" action="vegetable_manage.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" name="name" class="form-control" placeholder="Name" required />
                    <input type="file" name="image" class="form-control" placeholder="Image" required />
                    <input type="text" name="price" class="form-control" placeholder="Price (Rupiah)" required />
                    <input type="text" name="details" class="form-control" placeholder="Details" required />
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-success">Insert Data</button>
                        <button type="button" onclick="closeAddNewItemModal()" class="btn btn-danger">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openAddNewItemModal() {
            document.getElementById('addNewItemModal').style.display = 'flex';
        }

        function closeAddNewItemModal() {
            document.getElementById('addNewItemModal').style.display = 'none';
        }

        // Add this function to close the modal when clicking outside the modal content
        window.onclick = function(event) {
            var modal = document.getElementById('addNewItemModal');
            if (event.target === modal) {
                closeAddNewItemModal();
            }
        };
    </script>
    <hr>
    <h1 align="center" style="color: #ddd";>Vegetables</h1>
    <table class="table table-striped table-hover" id="user-data">
        <thead>
            <tr>
                <th scope="span">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
                <th scope="span" style="width: 40px">Edit</th>
                <th scope="span">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) :  ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img width="35px" height="35px" src="images/vegetable/<?php echo $row['image']; ?>" </td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['details']; ?></td>

                    <td>
                        <!-- Edit button -->
                        <button type="button" class="edit-button btn btn-info btn-lg editbtn" data-toggle="modal" data-target="#editmodal" data-row='<?php echo json_encode($row); ?>'>
                            Edit
                        </button>
                    </td>

                    <!-- Delete button -->
                    <td>
                        <a href="vegetable_manage.php?delete=<?php echo $row['id']; ?>" class="delete-button btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete this item?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>


    <!-- Update model -->
    <div id="editmodal" class="modal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="modal-content">
            <form method="post" action="vegetable_update.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <span class="close" id="close-modal">&times;</span>
                    <h2>Update Existing Items</h2>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id" class="form-control" required />
                    <input type="text" name="id" id="id" class="form-control" placeholder="ID" readonly />
                    <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
                    <br>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Image" />
                    <br>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Price" />
                    <br>
                    <input type="text" name="details" id="details" class="form-control" placeholder="Details" />
                </div>
                <div class="modal-footer">
                    <button type="submit" value="submit" name="updatedata" class="btn btn-info">Update</button>
                    <button type="button" class="btn btn-danger" id="close-modal-btn">Close</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Get the modal element
        var modal = document.getElementById('editmodal');

        // Get the button that opens the modal
        var editBtns = document.getElementsByClassName('editbtn');

        // Get the <span> element that closes the modal
        var closeBtn = document.getElementById('close-modal');
        var closeBtnModal = document.getElementById('close-modal-btn');

        // Function to open the modal
        function openModal(row) {
            // Populate the modal fields
            document.getElementById('update_id').value = row.id;
            document.getElementById('id').value = row.id;
            document.getElementById('name').value = row.name;
            document.getElementById('price').value = row.price;
            document.getElementById('details').value = row.details;

            // Display the modal
            modal.style.display = 'block';
        }

        // When the user clicks the button, open the modal 
        Array.from(editBtns).forEach(function(btn) {
            btn.addEventListener('click', function() {
                var row = JSON.parse(btn.getAttribute('data-row'));
                openModal(row);
            });
        });

        // When the user clicks on <span> (x) or the Close button, close the modal
        function closeModal() {
            modal.style.display = 'none';
        }

        closeBtn.onclick = closeModal;
        closeBtnModal.onclick = closeModal;

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>


    <!-- Category Section -->
    <div id="category-section" class="category-section">
        <h1>Pilih kategori produk</h1>

        <button class="category-button" onclick="redirectTo('crud_fruit.php')">
            <img src="assets\fruit.png" alt="Category 1">
        </button>

        <button class="category-button" onclick="redirectTo('crud_vegetable.php')">
            <img src="assets\vegetable.png" alt="Category 2">
        </button>

        <button class="category-button" onclick="redirectTo('crud_powder.php')">
            <img src="assets\powder.png" alt="Category 3">
        </button>

        <button class="category-button" onclick="redirectTo('crud_beverages.php')">
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

    <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');


                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {

                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#id').val(data[0]);
                $('#name').val(data[1]);
                $('#price').val(data[3]);
                $('#details').val(data[4]);

            });

        });
    </script>
</body>

</html>