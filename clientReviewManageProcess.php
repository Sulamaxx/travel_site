<?php

require "libs/connection.php";

$id = $_GET['id'];
$key = $_GET['key'];
if ($key == 2) {
    Database::iud("UPDATE `review` SET `status_id`='2' WHERE `id`='" . $id . "'");
} else {
    Database::iud("UPDATE `review` SET `status_id`='3' WHERE `id`='" . $id . "'");
}

echo "Success";
