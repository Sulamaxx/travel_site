<?php
require "libs/connection.php";

$data = json_decode(file_get_contents('php://input'), true);

Database::iud("INSERT INTO blog_comment(name,email,message,blog_id) VALUES('" . $data['name'] . "','" . $data['email'] . "','" . $data['message'] . "','" . $data['id'] . "')");

echo "Success";
