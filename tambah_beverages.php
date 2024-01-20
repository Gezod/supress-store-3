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

// Insert data into 'beverages' table
$sql = "INSERT INTO beverages (name, price, details, image)
VALUES
    ('MILO', 16000, '500g', 'TUBES/images/beverages/milo.png'),
    ('OVALTINE', 70000, '820g', 'TUBES/images/beverages/ovaltine.png'),
    ('HOT COCOA', 55000, '500g', 'TUBES/images/beverages/hot_cocoa.png'),
    ('VICO MALT', 40000, '200g', 'TUBES/images/beverages/vico.png'),
    ('INDOMILK BANANA', 5000, '180ml', 'TUBES/images/beverages/indomilk.png'),
    ('COCA – COLA', 13000, '1.5L', 'TUBES/images/beverages/coca_cola.png'),
    ('FANTA', 13000, '1.5L', 'TUBES/images/beverages/fanta.png'),
    ('SPRITE', 13000, '1.5L', 'TUBES/images/beverages/sprite.png'),
    ('YAKULT', 12000, '350ml', 'TUBES/images/beverages/Yakult.png'),
    ('HYDRO COCO', 6000, '250ml', 'TUBES/images/beverages/hydrococo.png'),
    ('FLORIDINA', 3000, '350ml', 'TUBES/images/beverages/floridina.png'),
    ('A&W ROOTBEER', 8000, '250ml', 'TUBES/images/beverages/rootbeer.png')
    ('TEH BOTOL', 8500, '1L', 'teh_botol.png')";
    

if ($conn->query($sql) === TRUE) {
    echo "Records inserted into 'beverages' successfully<br>";
} else {
    echo "Error inserting records into 'beverages': " . $conn->error;
}

// Close the connection
$conn->close();
?>
