<?php
session_start();
require "libs/connection.php";
if (isset($_SESSION['user'])) {


?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/hotel-upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

    <head>

    <?php include "include/admin/dashboard-header.php"; ?>
        <title>Travel Zoom Lanka - Add Driver</title>
    </head>

    <body class="tt-magic-cursor style-2">

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
                                <h3>Add New Driver</h3>
                            </div>
                        </div>
                        <div class="dashboard-profile-wrapper two">
                            <div class="dashboard-profile-tab-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-30">
                                                <label>Add Name</label>
                                                <input type="text" placeholder="Name here..." id="name">
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-30">
                                            <div class="form-inner">
                                                <label>Description</label>
                                                <textarea placeholder="Description here" id="description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="upload-img-area">
                                        <input type="file" name="image" id="mainImage" accept="image/*">
                                    </div>

                                    <div class="form-inner">
                                        <button type="button" id="btnClick" class="primary-btn3" onclick="addDriver();">Publish Now</button>
                                    </div>
                                </form>
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
            function addDriver() {
                document.getElementById('btnClick').innerHTML="Waiting";
                const name = document.getElementById('name').value;
                const desc = document.getElementById('description').value;
                const mainImage = document.getElementById('mainImage').files[0];

                const formData = new FormData();

                formData.append('name', name);
                formData.append('desc', desc);
                formData.append('mainImage', mainImage);
                fetch('addDriverProcess.php', {
                        method: "POST",
                        body: formData
                    })
                    .then(res => res.text())
                    .then(data => {
                        alert(data)
                        document.getElementById('btnClick').innerHTML="Publish Now";
                        if (data === "Driver added successfully") {
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        console.error("Error :", error);
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
        <script src="assets/js/drop-zone.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>

        <script src="assets/js/custom.js"></script>
    </body>

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/hotel-upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

    </html>
<?php
} else {
    header('Location:admin-login.php');
}
?>