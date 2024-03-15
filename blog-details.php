<?php
if (isset($_GET['id'])) {
    require "libs/connection.php";
?>
    <!doctype html>
    <html lang="en">

    <head>
        <?php include "include/admin/dashboard-header.php"; ?>
        <title>Travel Zoom Lanka - Blog</title>
    </head>
    <?php include 'include/customer/customer-header.php' ?>

    <body onload="loadComment();">

        <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, 0.5) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <h1>Blog Details</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $restult = Database::search("SELECT * FROM blog WHERE id='" . $_GET['id'] . "'");
        $data = $restult->fetch_assoc();
        ?>
        <div class="blog-details-section pt-120 mb-120">
            <div class="container">
                <div class="row g-lg-4 gy-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="post-thumb mb-30 ">
                            <div class="row justify-content-center">
                                <img src="<?= $data['img'] ?>" alt>
                            </div>
                        </div>
                        <div class="post-title mb-40 text-center">
                            <h1><?= $data['title'] ?></h1>
                        </div>

                        <p class="first-para"><?= $data['description'] ?></p>
                        <?php
                        $result_para = Database::search("SELECT * FROM paragraph WHERE blog_id='" . $_GET['id'] . "'");
                        while ($data1 = $result_para->fetch_assoc()) {
                        ?>
                            <div class="post-thumb pt-50 mb-50">
                                <div class="row justify-content-center">
                                    <img src="<?= $data1['img'] ?>" alt>
                                </div>
                            </div>
                            <h2><?= $data1['title'] ?></h2>
                            <p class="text-justify"><?= $data1['description'] ?></p>

                        <?php } ?>


                        <div class="row mt-40">
                            <div class="comment-area" id="comment-area">
                                <div class="comment-title">
                                    <h4>Comments </h4>
                                    <div class="dash"></div>
                                </div>

                                <ul class="comment" id="comment">



                                </ul>

                                <div class="inquiry-form mt-100">
                                    <div class="title">
                                        <h4>Leave Your Comment:</h4>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-inner mb-30">
                                                    <label>Your Name* :</label>
                                                    <input type="text" id="name" placeholder="Jackson Mile">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-30">
                                                    <label>Your Email* :</label>
                                                    <input type="email" id="email" placeholder="example@gamil.com">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-inner mb-50">
                                                    <label>Your Message :</label>
                                                    <textarea id="message" placeholder="Write Something..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-inner">
                                            <button class="primary-btn1 btn-hover" type="button" onclick="PostComment();">
                                                Post Comment
                                                <span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <?php include 'include/customer/customer-footer.php' ?>
        <script>
            function loadComment() {
                fetch("loadBlogComment.php?id=<?= $_GET['id'] ?>", {
                        method: "GET"
                    })
                    .then(response => response.text())
                    .then(data => {
                        // alert(data);
                        document.getElementById('comment').innerHTML = data;
                    })
                    .catch(error => {
                        console.log("Error:", error);
                    });

            }

            function PostComment() {
                var formData = {
                    id: <?= $_GET['id'] ?>,
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    message: document.getElementById('message').value
                }

                fetch("blogCommentSaveProcess.php", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data)
                        if (data == "Success") {
                            loadComment();
                        }
                    })
                    .catch((error) => {
                        console.log("Error : ", error);
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

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:35 GMT -->

    </html>

<?php
} else {
    header("Location:index.php");
}
?>