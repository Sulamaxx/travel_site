<?php
require "libs/connection.php";
?>
<?php include 'include/customer/customer-header.php'; ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/hotel-suits.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:20 GMT -->

<head>
    <title>Travel Zoom Lanka - Driver Suit</title>
</head>

<body>



    <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, 0.5) 101.02%), url(https://www.sltda.gov.lk/images/s2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Drivers</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Drivers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="room-suits-page pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">


                <div class="col-xl-4" id="form_data">
                    <div class="booking-form-wrap mb-40">
                        <h4>Book Your Shocker Drive</h4>
                        <!-- <p>Reserve your ideal trip early for a hassle-free trip; secure comfort and convenience!</p> -->

                        <div class="tab-content" id="v-pills-tabContent2">
                            <div class="tab-pane fade active show" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                <div class="sidebar-booking-form">
                                    <form>
                                        <div class="form-inner mb-20">
                                            <label>Full Name <span>*</span></label>
                                            <input id="c_name" type="text" placeholder="Enter your full name">
                                        </div>
                                        <div class="form-inner mb-20">
                                            <label>Email Address <span>*</span></label>
                                            <input id="c_email" type="email" placeholder="Enter your email address">
                                        </div>
                                        <div class="form-inner mb-20">
                                            <label>Phone Number <span>*</span></label>
                                            <input id="c_contact" type="text" placeholder="Enter your phone number">
                                        </div>
                                        <div class="form-inner mb-20">
                                            <label>Your Country <span>*</span></label>
                                            <input id="c_country" type="text" placeholder="Enter Your Country">
                                        </div>
                                        <div class="form-inner mb-20">
                                            <label>Number of Members<span>*</span></label>
                                            <input id="c_members" min="1" oninput="validity.valid||(value='');" type="number" placeholder="Enter Your member count">
                                        </div>

                                        <div class="form-inner  mb-20">
                                            <span hidden id="hotel_id"></span>
                                            <label>Select Shocker Drive <span>*</span></label>
                                            <input id="hotel_name" type="text" readonly placeholder="See and Select Your Shocker Drive">
                                        </div>

                                        <div class="form-inner mb-30">
                                            <label>Write Your Massage <span>*</span></label>
                                            <textarea id="c_message" placeholder="Write your quiry"></textarea>
                                        </div>
                                        <div class="form-inner">
                                            <button type="button" class="primary-btn1 two">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-8 order-lg-2 order-1">
                    <?php
                    $limit = 6;

                    $totalToursResult = Database::search("SELECT COUNT(*) as total FROM `rental_car` WHERE `status_id`='1'");
                    $totalTours = $totalToursResult->fetch_assoc()['total'];

                    $totalPages = ceil($totalTours / $limit);

                    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                    $offset = ($page - 1) * $limit;

                    $rs_rental_car = Database::search("SELECT * FROM rental_car WHERE status_id='1' LIMIT $limit OFFSET $offset");
                    while ($data = $rs_rental_car->fetch_assoc()) {
                    ?>
                        <div class="room-suits-card mb-30">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="swiper hotel-img-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="room-img">
                                                    <img src="<?= $data['img'] ?>" alt>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="room-img">
                                                    <img src="<?= $data['img'] ?>" alt>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="room-img">
                                                    <img src="<?= $data['img'] ?>" alt>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination5"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="room-content">
                                        <div class="content-top">
                                            <div class="reviews">
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-half"></i></li>
                                                </ul>
                                                <span>4.5 reviews</span>
                                            </div>
                                            <h5><?= $data['name'] ?></h5>

                                        </div>
                                        <div class="content-bottom">
                                            <div class="room-type">
                                                <span><?= $data['description'] ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-center ">
                                                <button class="book-btn primary-btn2 mt-2 col-6" onclick="selectVehicle('<?= $data['id'] ?>','<?= $data['name'] ?>');">Select Shocker Drive</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

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


                <!-- <div class="d-flex justify-content-around cards row g-lg-4 gy-5"> -->
                <div class="d-flex justify-content-around cards row g-lg-4 gy-5">
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/1.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/2.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/3.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/4.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/5.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/6.jpeg">
                    </div>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="assets/img/driver/7.jpeg">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php include 'include/customer/customer-footer.php' ?>
    <script>
        function selectVehicle(id, name) {
            document.getElementById('hotel_id').innerHTML = id;
            document.getElementById('hotel_name').value = name;
            document.getElementById('form_data').scrollIntoView({
                behavior: "smooth"
            });
        }
    </script>
    <script>
        document.querySelector('.primary-btn1').addEventListener('click', function() {
            this.innerHTML = "Waiting";
            var formData = {
                subject: 'Shocker Drive',
                name: document.getElementById('c_name').value,
                email: document.getElementById('c_email').value,
                contact: document.getElementById('c_contact').value,
                country: document.getElementById('c_country').value,
                members: document.getElementById('c_members').value,
                hotel_name: document.getElementById('hotel_name').value,
                message: document.getElementById('c_message').value
            };

            sendEmail(formData);
        });

        function sendEmail(data) {
            fetch('send_email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    document.querySelector('.primary-btn1').innerHTML = "Submit Now";
                    if (data == "Message has been sent") {
                        window.location.reload();
                    }

                })
                .catch((error) => {
                    console.error('Error:', error);
                });
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
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/hotel-suits.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:20 GMT -->

</html>