<?php
$servername = "localhost";
$username = "u444096365_suppress_store";
$password = "Ref4ngg4!";
$dbname = "u444096365_suppress_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";
}
?>
