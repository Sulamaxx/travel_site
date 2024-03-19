<?php
require "libs/connection.php";
$name = $_POST['name'];
$desc = $_POST['desc'];

if (empty($name)) {
    echo "Please enter event name";
} else if (empty($desc)) {
    echo "Please enter description";
} else if (!isset($_FILES['images'])) {
    echo "Please set main image";
} else {
    $errors = [];
    Database::setUpConnection();
    $query = "INSERT INTO `event` (`name`, `description`, status_id) VALUES ('" . $name . "', '" . mysqli_real_escape_string(Database::$connection, $desc) . "', '1')";
    Database::iud($query);

    $event_id = mysqli_insert_id(Database::$connection);

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

            Database::iud("INSERT INTO event_img (img,event_id) VALUES ('" . $destination . "','" . $event_id . "')");
        } else {
            $errors[] = "Failed to move $fileName to destination";
        }
    }

    if (!empty($errors)) {
        http_response_code(500);
        echo json_encode(['error' => $errors]);
    } else {
        echo "Event added successfully";
    }
}
