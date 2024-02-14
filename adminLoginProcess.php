<?php
session_start();
require "libs/connection.php";

$username = $_POST['username'];
$password = $_POST['password'];


if (empty($username)) {
    echo "Please Enter Username";
} else if (empty($password)) {
    echo "Please Enter Password";
} else {
    Database::setUpConnection();
    $username_0 = mysqli_real_escape_string(Database::$connection, $username);
    $password_0 = mysqli_real_escape_string(Database::$connection, $password);
    $result = Database::search("SELECT * FROM `user` WHERE user_name='" . $username_0 . "' AND `password`='" . $password_0 . "' ");
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        echo "Success";
    } else {
        echo "Invalid Username or Password";
    }
}
