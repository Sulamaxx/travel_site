<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:46 GMT -->

<head>
    <title>Travel Zoom Lanka - Gallery</title>
</head>

<?php include 'include/customer/customer-header.php' ?>

<body>



    <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, 0.5) 101.02%), url(https://donkaz.com/public/uploads/all/K4BHZBRJyfckr5uIleDXhb0Qfxlrrt7GX8KNHuti.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Gallery</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="destination-gallery pt-120 mb-120">
        <div class="container">
            <div class="row g-4 mb-70">

                <?php
                require "libs/connection.php";


                $restult = Database::search("SELECT * FROM gallery WHERE status_id='1'");

                while ($data = $restult->fetch_assoc()) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-img-wrap">
                            <img src="<?= $data['path'] ?>" width="100%" alt>
                            <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i class="bi bi-eye"></i><?= $data['title'] ?></a>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <button class="primary-btn1">Load More</button>
                </div>
            </div> -->
        </div>
    </div>





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
    <?php include 'include/customer/customer-footer.php' ?>

</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:47 GMT -->

</html>