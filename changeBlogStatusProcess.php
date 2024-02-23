<?php

require "libs/connection.php";

$id = $_GET['id'];
$key = $_GET['key'];
if ($key == 1) {
    Database::iud("UPDATE `blog` SET `status_id`='2' WHERE `id`='" . $id . "'");
} else {
    Database::iud("UPDATE `blog` SET `status_id`='1' WHERE `id`='" . $id . "'");
}

echo "Success";
