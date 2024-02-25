<?php
require "libs/connection.php";

$key = $_GET['key'];
$limit = $_GET['limit'];
$offset = $_GET['offset'];
$query = "SELECT *,rental_car.name AS h_name,rental_car.id AS h_id,status.name AS s_name FROM `rental_car` INNER JOIN `status` ON `rental_car`.`status_id`=`status`.`id` ";
if (!empty($key)) {
    $query .= " WHERE rental_car.name LIKE '" . $key . "%'";
}
$query .= " LIMIT $limit OFFSET $offset";
$result = Database::search($query);


while ($data = $result->fetch_assoc()) {
?>

    <tr>
        <td data-label="Tour Package">
            <div class="product-name">
                <div class="img">
                    <img src="<?= $data['img'] ?>" alt>
                </div>
                <div class="product-content">
                    <h6><a href="driver-update.php?id=<?= $data['h_id'] ?>"><?= $data['h_name'] ?></a></h6>
                </div>
            </div>
        </td>
        <td data-label="Price">
            <?= $data['description'] ?>
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