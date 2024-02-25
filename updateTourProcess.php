<?php
include "libs/connection.php";

// Handle main tour data
$tour_id = $_POST['tour_id'];
$title = $_POST['title'];
$days = $_POST['days'];
$desc = $_POST['desc'];

// echo($title);
// echo($days);
// echo($desc);

if (!empty($tour_id)) {
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
            Database::setUpConnection();
            $query = "UPDATE tour SET title='" . $title . "', description='" . mysqli_real_escape_string(Database::$connection, $desc) . "', days='" . $days . "', img='" . $mainImagePath . "' WHERE `id`='" . $tour_id . "'";
            Database::iud($query);

            Database::iud("DELETE FROM day WHERE tour_id='" . $tour_id . "'");

            for ($i = 1; $i <= $days; $i++) {
                $dayName = $_POST["name$i"];
                $dayDesc = $_POST["description$i"];
                $dayImageTmpName = $_FILES["image$i"]['tmp_name'];
                $dayImageName = $_FILES["image$i"]['name'];
                $uniqueDayFilename = uniqid('image_') . '_' . time() . '_' . $dayImageName;
                $dayImagePath = "assets/img/tours/" . $uniqueDayFilename;
                move_uploaded_file($dayImageTmpName, $dayImagePath);

                $query1 = ("INSERT INTO `day`(`name`,`description`,`img`,`tour_id`) VALUES('" . $dayName . "', '" . mysqli_real_escape_string(Database::$connection, $dayDesc) . "', '" . $dayImagePath . "', '" . $tour_id . "')");
                Database::iud($query1);
            }

            echo "Tour updated successfully";
        }
    }
} else {
    header("Location:all-tour.php");
}
