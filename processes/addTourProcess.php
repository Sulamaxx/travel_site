<?php
require "libs/connection.php";

$title = $_POST['title'];
$days = $_POST['days'];
$nights = $_POST['nights'];
$desc = $_POST['desc'];

$query = "INSERT INTO tour (title, description, days, nights,status_id) VALUES ('" . $title . "', '" . $desc . "', '" . $days . "', '" . $nights . "','1')";
Database::iud($query);
$lastInsertId = mysqli_insert_id(Database::$connection);

foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
    $file_name = $_FILES['images']['name'][$key];
    $file_size = $_FILES['images']['size'][$key];
    $file_type = $_FILES['images']['type'][$key];
    $file_tmp = $_FILES['images']['tmp_name'][$key];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $newFileName = uniqid() . "." . $file_ext;

    $uploadDir = 'assets/img/tours/';
    $target_file = $uploadDir . $newFileName;

    // Move uploaded file to target location
    move_uploaded_file($file_tmp, $target_file);

    Database::iud("INSERT INTO images(path,tour_id) VALUES('" . $target_file . "','" . $lastInsertId . "')");
}

echo "Tour added successfully!";
