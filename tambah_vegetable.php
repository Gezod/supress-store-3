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

// Insert data into 'vegetables' table
$sql = "INSERT INTO vegetables (name, price, details, image)
VALUES
    ('CARROT', 13000, '500g', 'TUBES/images/vegetables/carrot.png'),
    ('CABBAGE', 5000, '500g', 'TUBES/images/vegetables/cabbage.png'),
    ('RED ONION', 20000, '100g', 'TUBES/images/vegetables/red_onion.png'),
    ('SPINACH', 150000, '500g', 'TUBES/images/vegetables/spinach.png'),
    ('CAULIFLOWER', 13000, '500g', 'TUBES/images/vegetables/cauliflower.png'),
    ('BROCOLLI', 20000, '500g', 'TUBES/images/vegetables/broccoli.png'),
    ('POTATO', 10000, '500g', 'TUBES/images/vegetables/potato.png'),
    ('MUSTARD GREENS', 10000, '500g', 'TUBES/images/vegetables/mustard.png'),
    ('RED TOMATOES', 15000, '500g', 'TUBES/images/vegetables/red_tomatoes.png'),
    ('EGGPLANT', 8000, '500g', 'TUBES/images/vegetables/eggplant.png'),
    ('CUCUMBER', 5000, '500g', 'TUBES/images/vegetables/cucumber.png'),
    ('RED CHILI', 12000, '100g', 'TUBES/images/vegetables/chili.png')";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted into 'vegetables' successfully<br>";
} else {
    echo "Error inserting records into 'vegetables': " . $conn->error;
}

// Close the connection
$conn->close();
?>
