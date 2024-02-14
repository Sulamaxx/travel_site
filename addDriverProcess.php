<?php
require "libs/connection.php";
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

    $query = "INSERT INTO `rental_car` (`name`, `description`, img, status_id) VALUES ('" . $name . "', '" . $desc . "', '" . $mainImagePath . "', '1')";
    Database::iud($query);

    echo "Driver added successfully";
}
