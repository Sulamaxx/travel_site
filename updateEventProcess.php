<?php
require "libs/connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];

if (empty($name)) {
    echo "Please enter event name";
} else if (empty($desc)) {
    echo "Please enter description";
} else {
    $errors = [];
 
    Database::setUpConnection();

    $query = "UPDATE event SET name='" . $name . "', description='" . mysqli_real_escape_string(Database::$connection, $desc) . "' WHERE `id`='" . $id . "'";
    Database::iud($query);

    if (!isset($_FILES['images'])) {
      
    } else {

        Database::iud("DELETE FROM `event_img` WHERE event_id='".$id."'");

        $fileCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['images']['name'][$i];
            $tmpName = $_FILES['images']['tmp_name'][$i];
            $fileSize = $_FILES['images']['size'][$i];
            $fileError = $_FILES['images']['error'][$i];

            if ($fileError !== UPLOAD_ERR_OK) {
                $errors[] = "Failed to upload $fileName: " . $fileError;
                continue;
            }
            $uniqueFilename = uniqid('image_') . '_' . time() . '_' . $fileName;

            $destination = 'assets/img/events/' . $uniqueFilename;

            if (move_uploaded_file($tmpName, $destination)) {
                $uploadedImages[] = $destination;

                Database::iud("INSERT INTO event_img (img,event_id) VALUES ('" . $destination . "','" . $id . "')");
            } else {
                $errors[] = "Failed to move $fileName to destination";
            }
        }
    }

    if (!empty($errors)) {
        http_response_code(500);
        echo json_encode(['error' => $errors]);
    } else {
        echo "Event updated successfully";
    }
   
}
