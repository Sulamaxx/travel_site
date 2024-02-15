<?php
require "libs/connection.php";

$key = $_GET['key'];
$query = "SELECT *,gallery.id AS h_id,status.name AS s_name FROM `gallery` INNER JOIN `status` ON `gallery`.`status_id`=`status`.`id`";
if (!empty($key)) {
    $query .= " WHERE gallery.title LIKE '" . $key . "%'";
}

$result = Database::search($query);


while ($data = $result->fetch_assoc()) {
?>

    <tr>
        <td data-label="Tour Package">
            <div class="">
                <div class="img" >
                    <img src="<?= $data['path'] ?>" width="400" alt>
                </div>
            </div>
        </td>
        <td data-label="Price">
            <?= $data['title'] ?>
        </td>
        <td data-label="Status">
            <span class="confirmed"><?= $data['s_name'] ?></span>
        </td>
        <td data-label="Execution Time">
            <?php
            if ($data['status_id'] == 1) {
            ?>
                <button class="btn btn-primary fw-bold" onclick="changeStatus(1,'<?= $data['h_id'] ?>');">Change Status</button>
            <?php
            } else {
            ?>
                <button class="btn btn-danger fw-bold" onclick="changeStatus(2,'<?= $data['h_id'] ?>');">Change Status</button>
            <?php
            }
            ?>
        </td>
    </tr>
<?php
}
?>