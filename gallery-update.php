<?php
session_start();
require "libs/connection.php";
if (isset($_SESSION['user']) && isset($_GET['id'])) {


?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/hotel-upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:50 GMT -->

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

        <link rel="icon" href="assets/img/sm-logo.png" type="image/gif" sizes="20x20">
    </head>

    <body class="tt-magic-cursor style-2">

        <?php
        include "include/admin/dashboard-others.php";
        ?>


        <div class="dashboard-wrapper">
            <?php
            include "include/admin/dashboard-slider.php";
            $result = Database::search("SELECT * FROM gallery WHERE id='" . $_GET['id'] . "'");
            $data = $result->fetch_assoc();
            ?>
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-content-title-profile mb-50">
                            <div class="main-content-title">
                                <h3>Update Photo</h3>
                            </div>
                        </div>
                        <div class="dashboard-profile-wrapper two">
                            <div class="dashboard-profile-tab-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-30">
                                                <label>Title</label>
                                                <input type="text" value="<?= $data['title'] ?>" id="title">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="upload-img-area">
                                        <input type="file" name="image" id="mainImage" accept="image/*">
                                    </div>

                                    <div class="form-inner">
                                        <button type="button" id="btnClick" class="primary-btn3" onclick="addImage();">Update Now</button>
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
            window.addEventListener('load', async function() {
                var image_path = "<?= $data['path'] ?>";
                await fetch(image_path)
                    .then(response => response.blob())
                    .then(blob => {
                        var file = new File([blob], 'image.jpg', {
                            type: 'image/jpeg'
                        });
                        var input = document.getElementById('mainImage');
                        var dataTransfer = new DataTransfer();
                        dataTransfer.items.add(file);
                        input.files = dataTransfer.files;
                    });
                // alert(document.getElementById('mainImage').value)
            });

            function addImage() {
                document.getElementById('btnClick').innerHTML = "Waiting";
                const title = document.getElementById('title').value;
                const mainImage = document.getElementById('mainImage').files[0];

                const formData = new FormData();
                formData.append('id', <?= $_GET['id'] ?>);
                formData.append('title', title);
                formData.append('mainImage', mainImage);
                fetch('updateImageProcess.php', {
                        method: "POST",
                        body: formData
                    })
                    .then(res => res.text())
                    .then(data => {
                        alert(data)
                        document.getElementById('btnClick').innerHTML = "Update Now";
                        if (data === "Image updated successfully") {
                            window.location.href="all-gallery.php";
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