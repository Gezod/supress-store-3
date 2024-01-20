<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suppress_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";
}

// Insert data into 'cooking_essentials' table
$sql = "INSERT INTO cooking_essentials (name, price, details, image)
VALUES
    ('BLACK PEPPER', 20000, '50g', 'TUBES/images/cooking_essentials/black_pepper.png'),
    ('CUMIN', 16000, '50g', 'TUBES/images/cooking_essentials/cumin.png'),
    ('CURRY', 20000, '50g', 'TUBES/images/cooking_essentials/curry.png'),
    ('GALANGAL POWDER', 4000, '22g', 'TUBES/images/cooking_essentials/galangel_powder.png'),
    ('GINGER GROUND', 8000, '500g', 'TUBES/images/cooking_essentials/ginger_ground.png'),
    ('ITALIAN SEASONING', 25000, '50g', 'TUBES/images/cooking_essentials/italian.png'),
    ('LEMON PEPPER', 50000, '75g', 'TUBES/images/cooking_essentials/lemon_pepper.png'),
    ('OREGANO', 13000, '50g', 'TUBES/images/cooking_essentials/oregano.png'),
    ('LEMONGRASS POWDER', 15000, '50g', 'TUBES/images/cooking_essentials/lemongrass_powder.png'),
    ('SHALLOT POWDER', 15000, '50g', 'TUBES/images/cooking_essentials/red_onion_powder.png'),
    ('TURMERIC POWDER', 10000, '40g', 'TUBES/images/cooking_essentials/turmeric_powder.png'),
    ('PAPRIKA POWDER', 25000, '50g', 'TUBES/images/cooking_essentials/paprika.png')";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted into 'cooking_essentials' successfully<br>";
} else {
    echo "Error inserting records into 'cooking_essentials': " . $conn->error;
}

// Close the connection
$conn->close();
?>
