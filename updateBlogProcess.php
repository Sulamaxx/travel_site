<?php
include "libs/connection.php";

$blog_id = $_POST['blog_id'];
$title = $_POST['title'];
$paragraphs = $_POST['paragraphs'];
$desc = $_POST['desc'];

if (empty($title)) {
    echo "Please enter title";
} else if (empty($paragraphs)) {
    echo "Please enter number of paragraphs";
} else if (empty($desc)) {
    echo "Please enter description";
} else if (!isset($_FILES['mainImage']['tmp_name'])) {
    echo "Please set main image";
} else {

    $found = false;

    for ($i = 1; $i <= $paragraphs; $i++) {
        $paragraphName = $_POST["title$i"];
        $paragraphDesc = $_POST["description$i"];
        if (empty($paragraphName)) {
            echo "Please enter paragraph - " . $i . " title";
            $found = true;
            break;
        } else if (empty($paragraphDesc)) {
            echo "Please enter paragraph - " . $i . " description";
            $found = true;
            break;
        } else if (!isset($_FILES["image$i"]['tmp_name'])) {
            echo "Please set paragraph - " . $i . " image";
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
        $query = "UPDATE blog SET title='" . $title . "', description='" . mysqli_real_escape_string(Database::$connection, $desc) . "', paragraphs='" . $paragraphs . "', img='" . $mainImagePath . "' WHERE id='" . $blog_id . "'";
        Database::iud($query);

        Database::iud("DELETE FROM paragraph WHERE blog_id='" . $blog_id . "'");

        // Handle paragraph objects
        for ($i = 1; $i <= $paragraphs; $i++) {
            $paragraphName = $_POST["title$i"];
            $paragraphDesc = $_POST["description$i"];
            $paragraphImageTmpName = $_FILES["image$i"]['tmp_name'];
            $paragraphImageName = $_FILES["image$i"]['name'];
            $uniqueDayFilename = uniqid('image_') . '_' . time() . '_' . $paragraphImageName;
            $paragraphImagePath = "assets/img/paragraphs/" . $uniqueDayFilename;
            move_uploaded_file($paragraphImageTmpName, $paragraphImagePath);

            $query1 = ("INSERT INTO `paragraph`(`title`,`description`,`img`,`blog_id`) VALUES('" . $paragraphName . "', '" . $paragraphDesc . "', '" . $paragraphImagePath . "', '" . $blog_id . "')");
            Database::iud($query1);
        }

        echo "Blog updated successfully";
    }
}
