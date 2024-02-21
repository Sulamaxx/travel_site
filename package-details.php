<?php
require "libs/connection.php";
if (isset($_GET['id'])) {

?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/package-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:11 GMT -->

    <head>
        <title>Travel Zoom Lanka - Packeges</title>
    </head>

    <body>


        <?php include 'include/customer/customer-header.php' ?>

        <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <h1>Tour Details</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Tour Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $result = Database::search("SELECT * FROM `tour`  WHERE id='" . $_GET['id'] . "' AND `status_id`='1'");
        $data = $result->fetch_assoc();
        ?>
        <div class="package-details-area pt-120 mb-120 position-relative">
            <div class="container">
                <div class="row">
                    <div class="co-lg-12">
                        <div class="package-img-group mb-50">
                            <div class="row align-items-center g-3">

                                <div class="col-lg-12">
                                    <div class="gallery-img-wrap">
                                        <img src="<?= $data['img'] ?>" width="100%" alt>
                                        <a data-fancybox="gallery-01" href="<?= $data['img'] ?>"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="others-image-wrap d-none">
                    <a href="assets/img/innerpage/package-01.jpg" data-fancybox="images"><img src="assets/img/innerpage/blog-grid-img3.jpg" alt></a>
                    <a href="assets/img/innerpage/package-02.jpg" data-fancybox="images"><img src="assets/img/innerpage/blog-grid-img3.jpg" alt></a>
                    <a href="assets/img/innerpage/package-03.jpg" data-fancybox="images"><img src="assets/img/innerpage/blog-grid-img3.jpg" alt></a>
                    <a href="assets/img/innerpage/package-04.jpg" data-fancybox="images"><img src="assets/img/innerpage/blog-grid-img3.jpg" alt></a>
                    <a href="assets/img/innerpage/package-05.jpg" data-fancybox="images"><img src="assets/img/innerpage/blog-grid-img3.jpg" alt></a>
                </div>
                <div class="row g-xl-4 gy-5">
                    <div class="col-xl-8">
                        <h2><?= $data['title'] ?></h2>
                        <ul class="tour-info-metalist">
                            <li>
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7ZM7 3.0625C7 2.94647 6.95391 2.83519 6.87186 2.75314C6.78981 2.67109 6.67853 2.625 6.5625 2.625C6.44647 2.625 6.33519 2.67109 6.25314 2.75314C6.17109 2.83519 6.125 2.94647 6.125 3.0625V7.875C6.12502 7.95212 6.14543 8.02785 6.18415 8.09454C6.22288 8.16123 6.27854 8.2165 6.3455 8.25475L9.408 10.0048C9.5085 10.0591 9.62626 10.0719 9.73611 10.0406C9.84596 10.0092 9.93919 9.93611 9.99587 9.83692C10.0525 9.73774 10.0682 9.62031 10.0394 9.50975C10.0107 9.39919 9.93982 9.30426 9.842 9.24525L7 7.62125V3.0625Z">
                                    </path>
                                </svg> <?= $data['days'] ?> Days / <?= ($data['days'] - 1) ?> Night
                            </li>
                            <li>
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 7C7.92826 7 8.8185 6.63125 9.47487 5.97487C10.1313 5.3185 10.5 4.42826 10.5 3.5C10.5 2.57174 10.1313 1.6815 9.47487 1.02513C8.8185 0.368749 7.92826 0 7 0C6.07174 0 5.1815 0.368749 4.52513 1.02513C3.86875 1.6815 3.5 2.57174 3.5 3.5C3.5 4.42826 3.86875 5.3185 4.52513 5.97487C5.1815 6.63125 6.07174 7 7 7ZM14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333Z">
                                    </path>
                                </svg> Max People : 40
                            </li>
                            <li>
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 0.43748C14 0.372778 13.9856 0.308889 13.9579 0.250418C13.9302 0.191947 13.8898 0.140348 13.8398 0.0993396C13.7897 0.0583312 13.7312 0.0289339 13.6684 0.0132656C13.6057 -0.00240264 13.5402 -0.00395173 13.4768 0.00872996L9.1875 0.86623L4.89825 0.00872996C4.84164 -0.00258444 4.78336 -0.00258444 4.72675 0.00872996L0.35175 0.88373C0.252608 0.903546 0.163389 0.957088 0.099263 1.03525C0.0351366 1.11342 6.10593e-05 1.21138 0 1.31248L0 13.5625C3.90711e-05 13.6272 0.0144289 13.6911 0.0421328 13.7495C0.0698367 13.808 0.110165 13.8596 0.160212 13.9006C0.210259 13.9416 0.268779 13.971 0.331556 13.9867C0.394332 14.0024 0.459803 14.0039 0.52325 13.9912L4.8125 13.1337L9.10175 13.9912C9.15836 14.0025 9.21664 14.0025 9.27325 13.9912L13.6482 13.1162C13.7474 13.0964 13.8366 13.0429 13.9007 12.9647C13.9649 12.8865 13.9999 12.7886 14 12.6875V0.43748ZM4.375 12.3287V0.97123L4.8125 0.88373L5.25 0.97123V12.3287L4.89825 12.2587C4.84165 12.2474 4.78335 12.2474 4.72675 12.2587L4.375 12.3287ZM8.75 13.0287V1.67123L9.10175 1.74123C9.15836 1.75254 9.21664 1.75254 9.27325 1.74123L9.625 1.67123V13.0287L9.1875 13.1162L8.75 13.0287Z">
                                    </path>
                                </svg> <?= $data['title'] ?>
                            </li>
                        </ul>
                        <p><?= $data['description'] ?></p>

                        <h4>Itinerary</h4>
                        <div class="accordion tour-plan" id="tourPlan">
                            <?php
                            $key = "show";
                            $id = 1;
                            $result1 = Database::search("SELECT * FROM `day` WHERE tour_id='" . $data['id'] . "'");
                            while ($data1 = $result1->fetch_assoc()) {
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?= $id ?>">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $id ?>" aria-expanded="true" aria-controls="collapse<?= $id ?>">
                                            <span>Day 0<?= $id ?> :</span> <?= $data1['name'] ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?= $id ?>" class="accordion-collapse collapse <?= $key ?>" aria-labelledby="heading<?= $id ?>" data-bs-parent="#tourPlan">
                                        <div class="accordion-body">
                                            <img src="<?= $data1['img'] ?>" alt>
                                            <p><?= $data1['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $key = "";
                                $id++;
                            } ?>

                        </div>

                    </div>


                    <div class="col-xl-4">
                        <div class="booking-form-wrap mb-40">
                            <h4>Book Your Tour</h4>
                            <p>Reserve your ideal trip early for a hassle-free trip; secure comfort and convenience!</p>

                            <div class="tab-content" id="v-pills-tabContent2">
                                <div class="tab-pane fade active show" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                    <div class="sidebar-booking-form">
                                        <form>
                                            <div class="form-inner mb-20">
                                                <label>Full Name <span>*</span></label>
                                                <input type="text" placeholder="Enter your full name">
                                            </div>
                                            <div class="form-inner mb-20">
                                                <label>Email Address <span>*</span></label>
                                                <input type="email" placeholder="Enter your email address">
                                            </div>
                                            <div class="form-inner mb-20">
                                                <label>Phone Number <span>*</span></label>
                                                <input type="text" placeholder="Enter your phone number">
                                            </div>
                                            <div class="form-inner mb-20">
                                                <label>Your Country <span>*</span></label>
                                                <input type="text" placeholder="Enter Your Country">
                                            </div>
                                            <div class="form-inner mb-30">
                                                <label>Write Your Massage <span>*</span></label>
                                                <textarea placeholder="Write your quiry"></textarea>
                                            </div>
                                            <div class="form-inner">
                                                <button type="submit" class="primary-btn1 two">Submit Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/package-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:14 GMT -->

    </html>
<?php } else {
    header("Location:package-grid.php");
} ?>