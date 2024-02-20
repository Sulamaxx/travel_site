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
                        <h1>Tours</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Tours</li>
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

                $totalToursResult = Database::search("SELECT COUNT(*) as total FROM `tour` WHERE `status_id`='1'");
                $totalTours = $totalToursResult->fetch_assoc()['total'];

                $totalPages = ceil($totalTours / $limit);

                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                $offset = ($page - 1) * $limit;

                $result = Database::search("SELECT * FROM `tour`  WHERE `status_id`='1' LIMIT $limit OFFSET $offset");
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
                                                <li><?= $data1['name'] ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- package-details.php -->
                                <div class="card-content-bottom">
                                    <button class="primary-btn2" onclick="openSingleTour('<?= $data['id'] ?>')">Book a Tour</button>
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


    <?php include 'include/customer/customer-footer.php' ?>
    <script>
        function openSingleTour(id) {

            window.location.href = "package-details.php?id=" + id;


        }
    </script>
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