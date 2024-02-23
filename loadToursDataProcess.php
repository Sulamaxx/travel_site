<?php
require "libs/connection.php";

$key = $_GET['key'];
$limit = $_GET['limit'];
$offset = $_GET['offset'];

$query = "SELECT *,tour.id AS t_id FROM `tour` INNER JOIN `status` ON `tour`.`status_id`=`status`.`id` ";

if (!empty($key)) {
    $query .= " WHERE title LIKE '" . $key . "%'";
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
                    <h6><a href="package-details.php"><?= $data['title'] ?></a></h6>
                </div>
            </div>
        </td>
        <td data-label="Type">
            <?= $data['days'] ?>
        </td>
        <td data-label="Tourist" class="product-name">
            <?= $data['description'] ?>
        </td>
        <td data-label="Price">
            <?= $data['name'] ?>
        </td>
        <td data-label="Status">
            <?php
            if ($data['status_id'] == 1) {
            ?>
                <button class="btn btn-primary fw-bold" onclick="changeStatus(1,'<?= $data['t_id'] ?>');">Change Status</button>
            <?php
            } else {
            ?>
                <button class="btn btn-danger fw-bold" onclick="changeStatus(2,'<?= $data['t_id'] ?>');">Change Status</button>
            <?php
            }
            ?>

        </td>
    </tr>

<?php } ?>