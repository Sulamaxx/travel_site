<?php
require "libs/connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];

if (empty($name)) {
    echo "Please enter event name";
} else if (empty($desc)) {
    echo "Please enter description";
} else if (!isset($_FILES['mainImage']['tmp_name'])) {
    echo "Please set main image";
} else {
    $mainImageTmpName = $_FILES['mainImage']['tmp_name'];
    $mainImageName = $_FILES['mainImage']['name'];
    $uniqueFilename = uniqid('image_') . '_' . time() . '_' . $mainImageName;
    $mainImagePath = "assets/img/events/" . $uniqueFilename;
    move_uploaded_file($mainImageTmpName, $mainImagePath);

    Database::setUpConnection();

    $query = "UPDATE rental_car SET name='" . $name . "', description='" . mysqli_real_escape_string(Database::$connection, $desc) . "', img='" . $mainImagePath . "' WHERE `id`='" . $id . "'";
    Database::iud($query);


    echo "Driver updated successfully";
}
