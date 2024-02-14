<?php
require "libs/connection.php";
$title = $_POST['title'];

if (empty($title)) {
    echo "Please enter image title";
} else if (!isset($_FILES['mainImage']['tmp_name'])) {
    echo "Please set main image";
} else {
    $mainImageTmpName = $_FILES['mainImage']['tmp_name'];
    $mainImageName = $_FILES['mainImage']['name'];
    $uniqueFilename = uniqid('image_') . '_' . time() . '_' . $mainImageName;
    $mainImagePath = "assets/img/events/" . $uniqueFilename;
    move_uploaded_file($mainImageTmpName, $mainImagePath);

    $query = "INSERT INTO `gallery` (`title`, path, status_id) VALUES ('" . $title . "','" . $mainImagePath . "', '1')";
    Database::iud($query);

    echo "Image added successfully";
}
