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

// Create table for beverages
$sql = "CREATE TABLE beverages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    details TEXT,
    image VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'beverages' created successfully<br>";
} else {
    echo "Error creating table 'beverages': " . $conn->error;
}

// Create table for fruit
$sql = "CREATE TABLE fruit (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    details TEXT,
    image VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'fruit' created successfully<br>";
} else {
    echo "Error creating table 'fruit': " . $conn->error;
}

// Create table for cooking essentials
$sql = "CREATE TABLE cooking_essentials (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    details TEXT,
    image VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'cooking_essentials' created successfully<br>";
} else {
    echo "Error creating table 'cooking_essentials': " . $conn->error;
}

// Create table for vegetables
$sql = "CREATE TABLE vegetables (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    details TEXT,
    image VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'vegetables' created successfully<br>";
} else {
    echo "Error creating table 'vegetables': " . $conn->error;
}

// Close the connection
$conn->close();
?>
