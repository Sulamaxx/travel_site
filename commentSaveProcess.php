<?php
require "libs/connection.php";

$data = json_decode(file_get_contents("php://input"),true);

Database::iud("INSERT INTO review(email,name,message,contact) VALUES('" . $data['email'] . "','" . $data['name'] . "','" . $data['message'] . "','" . $data['contact'] . "')");

echo "Message has been sent";
