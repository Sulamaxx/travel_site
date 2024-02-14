<?php
include "libs/connection.php";



// Handle main tour data
$title = $_POST['title'];
$days = $_POST['days'];
$desc = $_POST['desc'];

if (empty($title)) {
    echo "Please enter title";
} else if (empty($days)) {
    echo "Please enter number of days";
} else if (empty($desc)) {
    echo "Please enter description";
} else if (!isset($_FILES['mainImage']['tmp_name'])) {
    echo "Please set main image";
} else {

    $found = false;

    for ($i = 1; $i <= $days; $i++) {
        $dayName = $_POST["name$i"];
        $dayDesc = $_POST["description$i"];
        if (empty($dayName)) {
            echo "Please enter day-" . $i . " name";
            $found = true;
            break;
        } else if (empty($dayDesc)) {
            echo "Please enter day-" . $i . " description";
            $found = true;
            break;
        } else if (!isset($_FILES["image$i"]['tmp_name'])) {
            echo "Please set day-" . $i . " image";
            $found = true;
            break;
        } else {
            $found = false;
        }
    }

    if (!$found) {
        // Handle main image upload
        $mainImageTmpName = $_FILES['mainImage']['tmp_name'];
        $mainImageName = $_FILES['mainImage']['name'];
        $uniqueFilename = uniqid('image_') . '_' . time() . '_' . $mainImageName;
        $mainImagePath = "assets/img/tours/" . $uniqueFilename;
        move_uploaded_file($mainImageTmpName, $mainImagePath);



        $query = "INSERT INTO tour (title, description, days, img, status_id) VALUES ('" . $title . "', '" . $desc . "', '" . $days . "', '" . $mainImagePath . "', '1')";
        Database::iud($query);

        $tour_id = mysqli_insert_id(Database::$connection);

        // Handle day objects
        for ($i = 1; $i <= $days; $i++) {
            $dayName = $_POST["name$i"];
            $dayDesc = $_POST["description$i"];
            $dayImageTmpName = $_FILES["image$i"]['tmp_name'];
            $dayImageName = $_FILES["image$i"]['name'];
            $uniqueDayFilename = uniqid('image_') . '_' . time() . '_' . $dayImageName;
            $dayImagePath = "assets/img/tours/" . $uniqueDayFilename;
            move_uploaded_file($dayImageTmpName, $dayImagePath);

            $query1 = ("INSERT INTO `day`(`name`,`description`,`img`,`tour_id`) VALUES('" . $dayName . "', '" . $dayDesc . "', '" . $dayImagePath . "', '" . $tour_id . "')");
            Database::iud($query1);
        }

        echo "Tour added successfully";
    }
}
