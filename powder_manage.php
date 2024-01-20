<?php

$mysqli = new mysqli('localhost', 'u444096365_suppress_store', 'Ref4ngg4!', 'u444096365_suppress_store') or die(mysqli_error($mysqli));

$targetDir = "images/cookingessentials/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $details = $_POST['details'];

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    $mysqli->query("INSERT INTO cooking_essentials (name, image, price, details) VALUES('$name','$image','$price','$details')") or die($mysqli->error);
    header("location:crud_powder.php");
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cooking_essentials WHERE id=$id") or die($mysqli->error);
    header("location:crud_powder.php");
    exit();
}
?>
