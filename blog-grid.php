<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/blog-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:30 GMT -->

<head>
    <title>Travel Zoom Lanka - Blog</title>
</head>

<?php include 'include/customer/customer-header.php' ?>
<body>



    <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Blog Grid</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blod-grid-section pt-120 mb-120">
        <div class="container">
            <div class="row g-md-4 gy-5 mb-70">

                <?php
                require "libs/connection.php";
                $limit = 6;

                $totalToursResult = Database::search("SELECT COUNT(*) as total FROM `blog` WHERE `status_id`='1'");
                $totalTours = $totalToursResult->fetch_assoc()['total'];

                $totalPages = ceil($totalTours / $limit);

                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                $offset = ($page - 1) * $limit;

                $rs_blog = Database::search("SELECT * FROM blog WHERE status_id='1' LIMIT $limit OFFSET $offset");
                while ($data = $rs_blog->fetch_assoc()) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-img-wrap">
                                <a href="blog-details.php?id=<?=$data['id']?>" class="card-img"><img src="<?=$data['img']?>" alt></a>
                            </div>
                            <div class="blog-card-content">
                                
                                <h5><a href="blog-details.php?id=<?=$data['id']?>"><?=$data['title']?></a></h5>
                                <div class="bottom-area">
                                    <a href="blog-details.php?id=<?=$data['id']?>">View Post
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                                <path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round"></path>
                                                <path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12">
                                            <path d="M5.85726 11.3009C7.14547 9.08822 6.60613 6.30362 4.57475 4.68025C4.57356 4.67933 4.57238 4.67818 4.57143 4.6775L4.58021 4.69862L4.57878 4.71446C4.97457 5.72599 4.91905 6.83648 4.43285 7.78924L4.09022 8.461L3.9851 7.71876C3.91368 7.21529 3.71745 6.735 3.41515 6.32382H3.36745L3.3423 6.25495C3.34586 7.02428 3.17834 7.78213 2.8497 8.49704C2.41856 9.43259 2.48191 10.5114 3.01936 11.3833L3.39023 11.9853L2.72299 11.7126C1.62271 11.2628 0.743103 10.3964 0.309587 9.33547C-0.176131 8.15083 -0.0862008 6.77725 0.550429 5.66194C0.882388 5.08179 1.11493 4.46582 1.24187 3.8308L1.36597 3.2084L1.68251 3.76353C1.83366 4.02824 1.94494 4.31476 2.01399 4.61574L2.02111 4.62285L2.02847 4.67107L2.03535 4.669C2.98353 3.45015 3.55158 1.93354 3.6344 0.397865L3.65575 0L4.00076 0.217643C5.4088 1.10544 6.38664 2.52976 6.6887 4.13017L6.69558 4.163L6.69914 4.16805L6.71457 4.14693C6.99053 3.79429 7.13622 3.37485 7.13622 2.93336V2.24967L7.56261 2.7947C8.55398 4.06153 9.06224 5.63301 8.99391 7.21988C8.90991 9.08776 7.85708 10.7272 6.17736 11.6154L5.45008 12L5.85726 11.3009Z"></path>
                                        </svg>
                                        5 Min Read
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/blog-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:32 GMT -->

</html>