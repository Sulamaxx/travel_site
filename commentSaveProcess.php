<?php
require "libs/connection.php";

$data = json_decode(file_get_contents("php://input"), true);
if (empty($data['name'])) {
    echo "Please nter your full name";
} else if (empty($data['email'])) {
    echo "Please enter your email";
} else if (empty($data['contact'])) {
    echo "Please enter your contact number";
} else if (empty($data['message'])) {
    echo "Please enter your other messages";
} else {
    Database::iud("INSERT INTO review(email,name,message,contact) VALUES('" . $data['email'] . "','" . $data['name'] . "','" . $data['message'] . "','" . $data['contact'] . "')");

    echo "Message has been sent";
}
