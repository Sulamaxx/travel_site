<?php
require "libs/connection.php";
$id = $_POST['id'];
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

    $query = "UPDATE `gallery` SET `title`='" . $title . "', path='" . $mainImagePath . "' WHERE id='".$id."'";
    Database::iud($query);

    echo "Image updated successfully";
}
