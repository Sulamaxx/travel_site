<?php
session_start();
require "libs/connection.php";
if (isset($_SESSION['user'])) {


?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/all-hotel.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/all.min.css" rel="stylesheet">

    <link href="assets/css/animate.min.css" rel="stylesheet">

    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link href="assets/css/boxicons.min.css" rel="stylesheet">

    <link href="assets/css/select2.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <title>TripRex - Tour & Travel Agency HTML Template</title>
    <link rel="icon" href="assets/img/sm-logo.png" type="image/gif" sizes="20x20">
</head>

<body class="tt-magic-cursor style-2" onload="loadEventData()">

    <?php
    include "include/admin/dashboard-others.php";
    ?>


    <div class="dashboard-wrapper">

        <?php
        include "include/admin/dashboard-slider.php";
        ?>
        <div class="main-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="main-content-title-profile mb-50">
                        <div class="main-content-title">
                            <h3>All Events</h3>
                        </div>
                        <div class="profile">
                            <a href="#">
                                View Profile
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                    <path d="M6.669 2.27202L0.94102 8L0 7.05898L5.72731 1.331H0.679478V0H8V7.32052H6.669V2.27202Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="counter-area">
                        <div class="row g-4 justify-content-center ">
                            <div class="col-lg-3 col-sm-6">
                                <div class="counter-single">
                                    <div class="counter-icon">
                                        <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M43.5573 29.0081V12.9327C43.5579 12.7808 43.5183 12.6315 43.4426 12.4998C43.3669 12.3681 43.2577 12.2587 43.126 12.1828L22.2099 0.11548C22.0788 0.0398277 21.9301 0 21.7787 0C21.6273 0 21.4785 0.0398277 21.3474 0.11548L0.431267 12.1828C0.299643 12.2587 0.190435 12.3681 0.114703 12.4998C0.0389711 12.6315 -0.000596592 12.7808 6.79915e-06 12.9327V37.0673C-0.000596592 37.2192 0.0389711 37.3685 0.114703 37.5002C0.190435 37.6319 0.299643 37.7413 0.431267 37.8172L21.3474 49.8845C21.4785 49.9602 21.6273 50 21.7787 50C21.9301 50 22.0788 49.9602 22.2099 49.8845L30.0675 45.3507C31.0469 46.722 32.3289 47.8497 33.8143 48.6465C35.2997 49.4433 36.9486 49.8879 38.6335 49.9459C40.3184 50.0038 41.994 49.6736 43.5307 48.9807C45.0674 48.2878 46.424 47.2509 47.4954 45.9501C48.5668 44.6494 49.3244 43.1197 49.7095 41.4795C50.0946 39.8392 50.0969 38.1325 49.7161 36.4912C49.3354 34.85 48.5819 33.3183 47.5139 32.0147C46.446 30.7111 45.0922 29.6706 43.5573 28.9736V29.0081ZM21.7787 1.85662L40.9697 12.9327L31.344 18.4837L13.5243 6.62321L21.7787 1.85662ZM21.7787 24.0088L2.58757 12.9327L11.8597 7.57997L29.6707 19.449L21.7787 24.0088ZM1.72505 14.4239L20.9161 25.4999V47.6434L1.72505 36.5674V14.4239ZM22.6412 47.6434V25.4999L30.4039 20.9919V27.7065C30.4039 27.9351 30.4947 28.1544 30.6565 28.316C30.8182 28.4777 31.0376 28.5685 31.2664 28.5685C31.4951 28.5685 31.7145 28.4777 31.8763 28.316C32.038 28.1544 32.1289 27.9351 32.1289 27.7065V20.0007L41.7891 14.4239V28.3961C40.8756 28.1466 39.933 28.0191 38.9859 28.0168C37.1194 28.0216 35.2849 28.5018 33.6557 29.4121C32.0266 30.3223 30.6565 31.6326 29.6749 33.2192C28.6933 34.8057 28.1327 36.6161 28.0459 38.4794C27.9592 40.3427 28.3492 42.1973 29.1791 43.8681L22.6412 47.6434ZM39.0291 48.2727C37.1952 48.2727 35.4026 47.7292 33.8778 46.7111C32.353 45.6929 31.1646 44.2458 30.4628 42.5526C29.761 40.8595 29.5774 38.9964 29.9351 37.199C30.2929 35.4016 31.176 33.7505 32.4727 32.4547C33.7694 31.1588 35.4216 30.2763 37.2202 29.9188C39.0188 29.5612 40.8831 29.7447 42.5773 30.4461C44.2716 31.1474 45.7197 32.335 46.7385 33.8588C47.7574 35.3826 48.3012 37.1741 48.3012 39.0067C48.2989 41.4635 47.3213 43.819 45.5829 45.5562C43.8446 47.2934 41.4875 48.2704 39.0291 48.2727Z" />
                                            <path d="M43.1261 34.5332L37.7784 41.584L34.9752 38.2913C34.8277 38.1141 34.6158 38.0028 34.3861 37.9818C34.1564 37.9608 33.9277 38.0318 33.7505 38.1793C33.5732 38.3267 33.4618 38.5385 33.4407 38.768C33.4197 38.9976 33.4908 39.2261 33.6383 39.4032L37.0884 43.5234C37.1694 43.618 37.2699 43.6939 37.3831 43.746C37.4962 43.7981 37.6193 43.825 37.7439 43.825C37.8734 43.8211 38.0004 43.7881 38.1154 43.7284C38.2303 43.6687 38.3304 43.5839 38.4081 43.4803L44.4026 35.5762C44.5149 35.5015 44.6082 35.4014 44.6748 35.2841C44.7415 35.1669 44.7796 35.0356 44.7862 34.9009C44.7929 34.7662 44.7678 34.6318 44.713 34.5085C44.6582 34.3853 44.5752 34.2766 44.4707 34.1912C44.3662 34.1059 44.2431 34.0462 44.1114 34.017C43.9796 33.9878 43.8428 33.99 43.7121 34.0232C43.5813 34.0565 43.4601 34.12 43.3583 34.2085C43.2566 34.2971 43.177 34.4083 43.1261 34.5332Z" />
                                        </svg>
                                    </div>
                                    <div class="counter-content">
                                        <p>Total Events</p>
                                        <div class="number">
                                            <?php
                                            $result = Database::search("SELECT * FROM event")

                                            ?>
                                            <h3 class="counter"><?= $result->num_rows; ?></h3>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="recent-listing-area">
                        <div class="title-and-tab">
                            <h6>Event Info</h6>
                            <div class="search-area">
                                <form>
                                    <div class="search-box">
                                        <input type="text" placeholder="Search Here" id="searchTour" onkeyup="loadEventData()">
                                        <button type="submit"><i class="bx bx-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="recent-listing-table">
                            <table class="eg-table2">
                                <thead>
                                    <tr>
                                        <th>Event Name</th>
                                        <th>description</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="eventsLoadingArea">



                                </tbody>
                            </table>
                            <div class="pagination-area">
                                <ul class="paginations">
                                    <li class="page-item active">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">3</a>
                                    </li>
                                </ul>
                                <ul class="paginations-buttons">
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14">
                                                <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                            </svg> Prev
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Next
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                                                <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "include/admin/dashboard-footer.php";
        ?>
    </div>

    <script>
        function loadEventData() {

            var searchTour = document.getElementById('searchTour').value;

            fetch('loadEventDataProcess.php?key=' + searchTour, {
                    method: 'GET',
                })
                .then(res => res.text())
                .then(data => {
                    // alert(data)
                    document.getElementById('eventsLoadingArea').innerHTML = data;

                })
                .catch(err => {
                    console.error('Error: ', err);
                    alert('An error occurred. Please try again.');
                });


        }

        function changeStatus(x, y) {
            fetch('changeEventStatusProcess.php?key=' + x + "&id=" + y, {
                    method: "GET",
                })
                .then(res => res.text())
                .then(data => {
                    alert(data);
                    if (data == "Success") {
                        window.location.reload();
                    }
                })
                .catch(error => {
                    console.error("Error :", error)
                    alert('An error occurred. Please try again.');
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
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/all-hotel.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

</html>
<?php
} else {
    header('Location:admin-login.php');
}
?>