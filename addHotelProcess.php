<?php
require "libs/connection.php";
$name = $_POST['name'];
$desc = $_POST['desc'];

if (empty($name)) {
    echo "Please enter hotel name";
} else if (empty($desc)) {
    echo "Please enter description";
} else if (!isset($_FILES['mainImage']['tmp_name'])) {
    echo "Please set main image";
} else {
    $mainImageTmpName = $_FILES['mainImage']['tmp_name'];
    $mainImageName = $_FILES['mainImage']['name'];
    $uniqueFilename = uniqid('image_') . '_' . time() . '_' . $mainImageName;
    $mainImagePath = "assets/img/hotels/" . $uniqueFilename;
    move_uploaded_file($mainImageTmpName, $mainImagePath);
    Database::setUpConnection();
    $query = "INSERT INTO hotel (name, description, img, status_id) VALUES ('" . $name . "', '" . mysqli_real_escape_string(Database::$connection, $desc) . "', '" . $mainImagePath . "', '1')";
    Database::iud($query);

    echo "Hotel added successfully";
}
