<?php
require "libs/connection.php";

$result = Database::search("SELECT * FROM blog_comment WHERE blog_id='" . $_GET['id'] . "'");
while ($data = $result->fetch_assoc()) {
?>
    <li>
        <div class="single-comment-area">
            <div class="author-img">
                <img src="assets/img/home1/testi-author-img1.png" alt>
            </div>
            <div class="comment-content">
                <div class="author-name-deg">
                    <h6><?= $data['name'] ?></h6>
                    <span><?= $data['created_at'] ?></span>
                </div>
                <p><?= $data['message'] ?></p>

            </div>
        </div>
    </li>

<?php
}
?>