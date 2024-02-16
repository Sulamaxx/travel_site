<?php
require "libs/connection.php";
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/package-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:10 GMT -->

<head>
    <title>TripRex - Tour & Travel Agency HTML Template</title>
</head>

<body>

    <?php include 'include/customer/customer-header.php' ?>

    <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Package Grid</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Package Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="package-grid-section pt-120 mb-120">
        <div class="container">
            <div class="row gy-5 mb-70">

                <?php
                $limit = 6;

                $totalToursResult = Database::search("SELECT COUNT(*) as total FROM `tour`");
                $totalTours = $totalToursResult->fetch_assoc()['total'];

                $totalPages = ceil($totalTours / $limit);

                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                $offset = ($page - 1) * $limit;

                $result = Database::search("SELECT * FROM `tour` LIMIT $limit OFFSET $offset");
                while ($data = $result->fetch_assoc()) {

                ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="package-card">
                            <div class="package-card-img-wrap">
                                <a href="package-details.php" class="card-img"><img src="<?= $data['img'] ?>" alt="" width="100%" style="height: 300px;"></a>
                                <div class="batch">
                                    <span class="date"><?= $data['days'] ?> Days / <?= $data['days'] - 1 ?> Night</span>
                                </div>
                            </div>
                            <div class="package-card-content">
                                <div class="card-content-top">
                                    <h5><a href="package-details.php"><?= $data['title'] ?></a></h5>
                                    <div class="location-area">

                                        <ul class="location-list scrollTextAni">
                                            <?php
                                            $result1 = Database::search("SELECT * FROM `day` WHERE tour_id='" . $data['id'] . "'");
                                            while ($data1 = $result1->fetch_assoc()) {
                                            ?>
                                                <li><a href="package-grid.php"><?= $data1['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-bottom">
                                    <a href="package-details.php" class="primary-btn2">Book a Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>



            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="inner-pagination-area">
                        <ul class="pagination-list">
                            <?php if ($page > 1) : ?>
                                <li>
                                    <a href="?page=<?= $page - 1 ?>" class="shop-pagi-btn"><i class="bi bi-chevron-left"></i></a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                <li>
                                    <a href="?page=<?= $i ?>" <?= $i === $page ? 'class="active"' : '' ?>><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($page < $totalPages) : ?>
                                <li>
                                    <a href="?page=<?= $page + 1 ?>" class="shop-pagi-btn"><i class="bi bi-chevron-right"></i></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>


        </div>
    </div>


    <div class="banner3-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner3-content">
                        <h2>Join The Newsletter</h2>
                        <p>To receive our best monthly deals</p>
                        <form>
                            <div class="from-inner">
                                <input type="email" placeholder="Enter Your Gmail...">
                                <button type="submit" class="from-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
                                        <path d="M7 1L16 8.5M16 8.5L7 16M16 8.5H0.5" stroke-width="1.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <img src="assets/img/home1/banner3-vector1.png" alt class="vector1">
                        <img src="assets/img/home1/banner3-vector2.png" alt class="vector2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/customer/customer-footer.php' ?>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.marquee.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/package-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:10 GMT -->

</html>