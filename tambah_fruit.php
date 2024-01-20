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

// Insert data into 'fruit' table
$sql = "INSERT INTO fruit (name, price, details, image)
VALUES
    ('BANANA', 10000, '500g', 'TUBES/images/fruit/banana.png'),
    ('GREEN APPLE', 10000, '500g', 'TUBES/images/fruit/green_apple.png'),
    ('ORANGE', 20000, '500g', 'TUBES/images/fruit/orange.png'),
    ('POMEGRANATE', 15000, '500g', 'TUBES/images/fruit/pomegranate.png'),
    ('GUAVA', 8000, '500g', 'TUBES/images/fruit/guava.png'),
    ('PEAR', 15000, '500g', 'TUBES/images/fruit/pear.png'),
    ('MANDARIN', 30000, '500g', 'TUBES/images/fruit/mandarin.png'),
    ('RED GRAPES', 30000, '500g', 'TUBES/images/fruit/red_grape.png'),
    ('WHITE GRAPES', 40000, '500g', 'TUBES/images/fruit/white_grape.png'),
    ('FUJI APPLE', 18000, '500g', 'TUBES/images/fruit/fuji_apple.png'),
    ('STRAWBERRY', 25000, '500g', 'TUBES/images/fruit/strawberry.png'),
    ('GREEN KIWI', 20000, '500g', 'TUBES/images/fruit/kiwi.png')";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted into 'fruit' successfully<br>";
} else {
    echo "Error inserting records into 'fruit': " . $conn->error;
}

// Close the connection
$conn->close();
?>
    