<?php
session_start();
require "libs/connection.php";
if (isset($_SESSION['user'])) {


?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/tour-upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

    <head>
        <?php include "include/admin/dashboard-header.php"; ?>
        <title>Travel Zoom Lanka - Add Tour</title>

    </head>
    <style>
        #imagePreview {
            display: flex;
            flex-wrap: wrap;
        }

        .previewImage {
            margin: 10px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>

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
                                <h3>Add New Tour Package</h3>
                                <div class="form-inner" style="right: 2%; position: absolute;">
                                    <button type="button" class="primary-btn3" onclick="uploadData();">Publish Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-profile-wrapper two" style="height: 70vh;">
                            <div class="dashboard-profile-tab-content">
                                <form id="uploadForm" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-30">
                                                <label>Add Title</label>
                                                <input type="text" placeholder="Title here..." id="title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-inner mb-30">
                                                <label>Days</label>
                                                <input type="number" placeholder="count of days here..." min="1" oninput="validity.valid||(value='');" id="days">
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

                                    <div id="optionalArea" style="padding-bottom: 100px;">

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
            document.getElementById('days').addEventListener('change', (event) => {
                const newDays = parseInt(event.target.value);
                const body = document.getElementById('optionalArea');
                const existingDays = body.children.length;

                if (newDays < existingDays) {
                    // Remove extra elements
                    for (let dayCount = existingDays; dayCount > newDays; dayCount--) {
                        body.removeChild(body.lastElementChild);
                    }
                } else if (newDays > existingDays) {
                    // Add new elements
                    for (let dayCount = existingDays + 1; dayCount <= newDays; dayCount++) {
                        const dayDiv = document.createElement('div');
                        dayDiv.innerHTML = `<div class="row">
                                            <label for="name${dayCount}">Day ${dayCount}</label>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-30">
                                                    <label>Add Name</label>
                                                    <input type="text" placeholder="Name here..." id="name${dayCount}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <div class="form-inner">
                                                    <label>Description</label>
                                                    <textarea placeholder="Description here" id="description${dayCount}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="upload-img-area">
                                            <input type="file" name="image${dayCount}" id="image${dayCount}" accept="image/*">
                                        </div>`;
                        body.appendChild(dayDiv);
                    }
                }
            });

            function uploadData() {
                const title = document.getElementById('title').value;
                const days = document.getElementById('days').value;
                const desc = document.getElementById('description').value;
                const mainImage = document.getElementById('mainImage').files[0];

                const formData = new FormData();

                formData.append('title', title);
                formData.append('days', days);
                formData.append('desc', desc);
                formData.append('mainImage', mainImage);

                for (let i = 1; i <= days; i++) {
                    formData.append('name' + i, document.getElementById('name' + i).value);
                    formData.append('description' + i, document.getElementById('description' + i).value);
                    formData.append('image' + i, document.getElementById('image' + i).files[0]);
                }

                fetch('addTourProcess.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(result => {
                        console.log(result);
                        alert(result);
                        if (result === "Tour added successfully") {
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
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
        <script src="assets/js/drop-zone.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>

        <script src="assets/js/custom.js"></script>
    </body>

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/tour-upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

    </html>
<?php
} else {
    header('Location:admin-login.php');
}
?>