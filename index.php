<?php
require "libs/connection.php";

function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:06:08 GMT -->

<head>
    <title>Travel Zoom Lanka</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<?php include "include/customer/customer-header.php"; ?>

<body>



    <div class="home2-banner-area">
        <div class="swiper home1-banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img1.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img2.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img3.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img4.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img5.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img6.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img7.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img8.jpg);">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="home2-banner-wrapper" style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home2/hero/home2-banner-img9.jpg);">
                    </div>
                </div>
            </div>
        </div>
        <div class="home2-banner-content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="home2-banner-content">
                            <div class="eg-tag">
                                <span>Sri Lanka</span>
                            </div>
                            <h1 class="animate-text">Let’s Explore Your
                                <span>Holiday</span>
                                <span>Family</span>
                                <span>Honeymoon</span> Trip.
                            </h1>
                            <div class="banner-content-bottom">
                                <div class="hotline-area">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                            <path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z" />
                                            <path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z" />
                                            <path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <span>To More Inquiry</span>
                                        <h6><a href="tel:+94777831007">(+94) 777 831 007</a></h6>
                                    </div>
                                </div>
                                <a href="https://www.tripadvisor.com/" class="rating-area">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/tripadvisor-logo.png" alt>
                                    </div>
                                    <div class="content">
                                        <div class="text-logo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="19" viewBox="0 0 110 19">
                                                <path d="M109.2 14.2516C108.759 14.2516 108.401 14.602 108.401 15.0334C108.401 15.4648 108.759 15.8151 109.2 15.8151C109.642 15.8151 110 15.4648 110 15.0334C110 14.602 109.642 14.2516 109.2 14.2516ZM109.2 15.6912C108.829 15.6912 108.528 15.3953 108.528 15.0334C108.528 14.6697 108.83 14.3756 109.2 14.3756C109.572 14.3756 109.875 14.6714 109.875 15.0334C109.875 15.3953 109.572 15.6912 109.2 15.6912ZM109.461 14.8995C109.461 14.7574 109.358 14.6731 109.205 14.6731H108.95V15.3854H109.075V15.1276H109.212L109.344 15.3854H109.479L109.334 15.1012C109.412 15.0664 109.461 14.997 109.461 14.8995ZM109.2 15.0168H109.077V14.7805H109.2C109.285 14.7805 109.336 14.8218 109.336 14.8979C109.336 14.9755 109.283 15.0168 109.2 15.0168ZM12.8619 6.33991V4.44917H9.89707V15.6978H12.8619V8.95295C12.8619 7.73156 13.6632 7.13158 14.9124 7.13158H16.5351V4.44921H15.149C14.0638 4.44917 13.1206 5.00283 12.8619 6.33991ZM19.3124 0C18.2981 0 17.5206 0.783414 17.5206 1.77506C17.5206 2.74357 18.2981 3.52698 19.3124 3.52698C20.3266 3.52698 21.1041 2.74357 21.1041 1.77506C21.1041 0.783373 20.3266 0 19.3124 0ZM17.8333 15.6978H20.7914V4.44917H17.8333V15.6978ZM34.8822 10.0735C34.8822 13.2847 32.2199 15.8879 28.9355 15.8879C27.6103 15.8879 26.4084 15.4631 25.4449 14.7458V19H22.4868V4.44917H25.4449V5.40113C26.4084 4.68386 27.6103 4.2591 28.9355 4.2591C32.2199 4.2591 34.8822 6.86219 34.8822 10.0735ZM31.9055 10.0735C31.9055 8.32983 30.4586 6.91505 28.6752 6.91505C26.8919 6.91505 25.445 8.32983 25.445 10.0735C25.445 11.8171 26.8919 13.2319 28.6752 13.2319C30.4586 13.2319 31.9055 11.8188 31.9055 10.0735ZM86.2961 9.08679L84.5702 8.62402C83.4344 8.33477 82.9932 7.99431 82.9932 7.4076C82.9932 6.83573 83.6152 6.43578 84.5043 6.43578C85.3512 6.43578 86.0155 6.97787 86.0155 7.67201V7.73645H88.7421V7.67201C88.7421 5.63084 87.0399 4.25906 84.5043 4.25906C81.9942 4.25906 80.1703 5.62918 80.1703 7.51827C80.1703 8.98757 81.1659 10.0949 82.9035 10.5544L84.5567 10.9957C85.8126 11.3361 86.2792 11.713 86.2792 12.389C86.2792 13.1013 85.6048 13.5806 84.6006 13.5806C83.5543 13.5806 82.8494 12.9327 82.8494 11.9708V11.9063H79.9556V11.9708C79.9556 14.278 81.8555 15.8911 84.5771 15.8911C87.1988 15.8911 89.1021 14.3161 89.1021 12.1476C89.1021 11.0833 88.6152 9.69171 86.2961 9.08679ZM45.376 4.44917H48.3341V15.6978H45.376V14.7457C44.4125 15.4631 43.2106 15.8878 41.8854 15.8878C38.6011 15.8878 35.9387 13.2847 35.9387 10.0734C35.9387 6.8621 38.6011 4.25906 41.8854 4.25906C43.2106 4.25906 44.4125 4.68381 45.376 5.40109V4.44917ZM45.376 10.0735C45.376 8.32818 43.929 6.91505 42.1457 6.91505C40.3623 6.91505 38.9154 8.32983 38.9154 10.0735C38.9154 11.8171 40.3623 13.2319 42.1457 13.2319C43.9307 13.2319 45.376 11.8188 45.376 10.0735ZM59.0155 0.446232H61.9736V15.6994H59.0155V14.7474C58.0519 15.4647 56.8501 15.8895 55.5249 15.8895C52.2405 15.8895 49.5782 13.2864 49.5782 10.0751C49.5782 6.86376 52.2404 4.26072 55.5249 4.26072C56.8501 4.26072 58.0519 4.68547 59.0155 5.40275V0.446232ZM59.0155 10.0735C59.0155 8.32983 57.5685 6.91505 55.7851 6.91505C54.0019 6.91505 52.5549 8.32983 52.5549 10.0735C52.5549 11.8171 54.0001 13.2319 55.7851 13.2319C57.5685 13.2319 59.0155 11.8188 59.0155 10.0735ZM75.7077 15.6978H78.6658V4.44917H75.7077V15.6978ZM77.1868 0C76.1725 0 75.395 0.783414 75.395 1.77506C75.395 2.74357 76.1725 3.52698 77.1868 3.52698C78.201 3.52698 78.9785 2.74357 78.9785 1.77506C78.9785 0.783373 78.201 0 77.1868 0ZM101.888 10.0735C101.888 13.2847 99.2256 15.8879 95.9412 15.8879C92.6569 15.8879 89.9946 13.2848 89.9946 10.0735C89.9946 6.86215 92.6569 4.2591 95.9412 4.2591C99.2256 4.2591 101.888 6.86219 101.888 10.0735ZM99.1716 10.0735C99.1716 8.32983 97.7246 6.91505 95.9413 6.91505C94.1579 6.91505 92.711 8.32983 92.711 10.0735C92.711 11.8171 94.1562 13.2319 95.9413 13.2319C97.7246 13.2319 99.1716 11.8188 99.1716 10.0735ZM11.3474 0.446232H0V3.02618H4.20056V15.6978H7.14854V3.02618H11.3491V0.446232H11.3474ZM68.7333 12.617L66.1014 4.44921H62.9945L66.9415 15.6978H70.5014L74.472 4.44921H71.3651L68.7333 12.617ZM106.222 6.33991V4.44917H103.257V15.6978H106.222V8.95295C106.222 7.73156 107.023 7.13158 108.272 7.13158H109.895V4.44921H108.509C107.424 4.44917 106.482 5.00283 106.222 6.33991Z" />
                                            </svg>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="bi bi-circle-fill"></i></li>
                                                <li><i class="bi bi-circle-fill"></i></li>
                                                <li><i class="bi bi-circle-fill"></i></li>
                                                <li><i class="bi bi-circle-fill"></i></li>
                                                <li><i class="bi bi-circle-half"></i></li>
                                            </ul>
                                            <span>4.5/5.0</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="slider-btn-grp">
            <div class="slider-btn home1-banner-prev">
                <i class="bi bi-arrow-left"></i>
            </div>
            <div class="slider-btn home1-banner-next">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
    </div>

    <!-- Trendy Travel Locations -->
    <!-- <div class="destination-card2-slider-section mb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <div class="eg-section-tag">
                            <span>Journey Travel Zoom Lanka</span>
                        </div>
                        <h2>Trendy Travel Locations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper destination-card2-slider mb-50">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img1.jpg" alt></a>
                                    <div class="batch">
                                        <span>5 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">New York</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img2.jpg" alt></a>
                                    <div class="batch">
                                        <span>8 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Switzerland</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img3.jpg" alt></a>
                                    <div class="batch">
                                        <span>4 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Saudi Arab</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img4.jpg" alt></a>
                                    <div class="batch">
                                        <span>6 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Indonesia</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img5.jpg" alt></a>
                                    <div class="batch">
                                        <span>7 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Brazil</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img6.jpg" alt></a>
                                    <div class="batch">
                                        <span>8 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Japan</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img7.jpg" alt></a>
                                    <div class="batch">
                                        <span>3 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Australia</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card2">
                                    <a href="destination-details.php" class="destination-card-img"><img src="assets/img/home2/destination-card2-img4.jpg" alt></a>
                                    <div class="batch">
                                        <span>6 Tour</span>
                                    </div>
                                    <div class="destination-card2-content">
                                        <span>Travel To</span>
                                        <h4><a href="destination-details.php">Indonesia</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-and-view-btn-grp">
                        <div class="slider-btn-grp3 two">
                            <div class="slider-btn destination-card2-prev">
                                <i class="bi bi-arrow-left"></i>
                                <span>PREV</span>
                            </div>
                            <div class="slider-btn destination-card2-next">
                                <span>NEXT</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->

    <div class="tour-pack-section">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <div class="eg-section-tag two">
                            <span>Tour Package</span>
                        </div>
                        <h2 class="text-white">Thrilling Tour Plans</h2>
                    </div>
                </div>
            </div>
            <div class="package-card-slider-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper package-card-slider mb-60">
                            <div class="swiper-wrapper">

                                <?php
                                $result_tour = Database::search("SELECT * FROM tour WHERE status_id='1'");
                                while ($data = $result_tour->fetch_assoc()) {
                                ?>

                                    <div class="swiper-slide">
                                        <div class="package-card3">
                                            <a href="package-details.php?id=<?= $data['id'] ?>" class="package-card-img">
                                                <img src="<?= $data['img'] ?>" alt width="100%" style="height: 400px;">

                                            </a>
                                            <div class="package-card-content">
                                                <div class="card-content-top">
                                                    <div class="rating-area">
                                                        <ul class="rating">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>

                                                    </div>
                                                    <h5><a href="package-details.php?id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h5>
                                                    <p><?= limit_words($data['description'], 20) ?>...</p>
                                                </div>
                                                <div class="card-content-bottom">
                                                    <a href="package-details.php?id=<?= $data['id'] ?>" class="primary-btn2">Book a Tour
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                            <path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>

                        <div class="slide-and-view-btn-grp style-2" style="margin-top: -50px;">
                            <div class="slider-btn-grp3">
                                <div class="slider-btn package-card-slider-prev">
                                    <i class="bi bi-arrow-left"></i>
                                    <span>PREV</span>
                                </div>
                                <a href="package-grid.php" class="secondary-btn2">View All Package</a>
                                <div class="slider-btn package-card-slider-next">
                                    <span>NEXT</span>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home2-about-section pt-120 mb-120">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title2 mb-30">
                            <div class="eg-section-tag">
                                <span>About Us</span>
                            </div>
                            <h2>We provide the best tour facilities.</h2>
                            <p>Since 2010, we've been your guide to Sri Lanka's beauty. Explore ancient ruins in Anuradhapura, relax on Mirissa's beaches, or wander Matale's spice gardens. Let our words inspire your adventure in the teardrop paradise that is Sri Lanka.<br><br>Join us on this virtual journey!</p>
                        </div>
                        <div class="row g-4 mb-50">
                            <div class="col-md-6">
                                <div class="facility-card">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon1.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Safety first <br>always</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card two">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon2.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Trusted travel <br>guide</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card two">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon3.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Expertise and <br> Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon3.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Expertise and <br> Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="about-img-wrap">
                        <div class="about-img">
                            <img src="assets/img/home2/home2-about-img1.png" alt class="about-img">
                        </div>
                        <div class="experience">
                            <h3>14</h3>
                            <p>Years of experience</p>
                        </div>
                        <img src="assets/img/home2/vector/plane-vector.svg" alt class="vector">
                    </div>
                </div>
            </div>
            <div class="activities-counter">
                <div class="row justify-content-center g-lg-4 gy-5">
                    <div class="col-lg-3 col-sm-6 divider d-flex justify-content-lg-start justify-content-sm-center">
                        <div class="single-activity">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g>
                                        <path d="M20.832 15.0002C21.053 15.0002 21.265 15.088 21.4213 15.2442C21.5776 15.4005 21.6654 15.6125 21.6654 15.8335H23.332C23.332 15.1705 23.0686 14.5346 22.5998 14.0657C22.131 13.5969 21.4951 13.3335 20.832 13.3335C20.169 13.3335 19.5331 13.5969 19.0643 14.0657C18.5954 14.5346 18.332 15.1705 18.332 15.8335H19.9987C19.9987 15.6125 20.0865 15.4005 20.2428 15.2442C20.3991 15.088 20.611 15.0002 20.832 15.0002ZM29.1654 15.0002C29.3864 15.0002 29.5983 15.088 29.7546 15.2442C29.9109 15.4005 29.9987 15.6125 29.9987 15.8335H31.6654C31.6654 15.1705 31.402 14.5346 30.9331 14.0657C30.4643 13.5969 29.8284 13.3335 29.1654 13.3335C28.5023 13.3335 27.8664 13.5969 27.3976 14.0657C26.9288 14.5346 26.6654 15.1705 26.6654 15.8335H28.332C28.332 15.6125 28.4198 15.4005 28.5761 15.2442C28.7324 15.088 28.9444 15.0002 29.1654 15.0002ZM22.4987 18.3335H20.832C20.832 19.4386 21.271 20.4984 22.0524 21.2798C22.8338 22.0612 23.8936 22.5002 24.9987 22.5002C26.1038 22.5002 27.1636 22.0612 27.945 21.2798C28.7264 20.4984 29.1654 19.4386 29.1654 18.3335H27.4987C27.4987 18.9965 27.2353 19.6324 26.7665 20.1013C26.2976 20.5701 25.6617 20.8335 24.9987 20.8335C24.3357 20.8335 23.6998 20.5701 23.2309 20.1013C22.7621 19.6324 22.4987 18.9965 22.4987 18.3335Z" />
                                        <path d="M38.332 15H36.6245C36.6513 14.883 36.665 14.7634 36.6654 14.6433V13.0958C36.6645 12.8046 36.587 12.5187 36.4408 12.2668C36.2945 12.0149 36.0846 11.806 35.832 11.6608V10.8333C35.832 7.96015 34.6907 5.20465 32.659 3.17301C30.6274 1.14137 27.8719 0 24.9987 0C22.1255 0 19.37 1.14137 17.3384 3.17301C15.3067 5.20465 14.1654 7.96015 14.1654 10.8333V11.6608C13.9128 11.806 13.7029 12.0149 13.5566 12.2668C13.4104 12.5187 13.3329 12.8046 13.332 13.0958V14.6433C13.3324 14.7634 13.3461 14.883 13.3729 15H11.6654C10.1188 15.0018 8.6361 15.6169 7.54252 16.7105C6.44894 17.8041 5.8338 19.2868 5.83203 20.8333V40.8333C5.83203 41.0543 5.91983 41.2663 6.07611 41.4226C6.23239 41.5789 6.44435 41.6667 6.66536 41.6667H9.16536V49.1667C9.16536 49.3877 9.25316 49.5996 9.40944 49.7559C9.56572 49.9122 9.77768 50 9.9987 50H39.9987C40.2197 50 40.4317 49.9122 40.588 49.7559C40.7442 49.5996 40.832 49.3877 40.832 49.1667V41.6667H43.332C43.553 41.6667 43.765 41.5789 43.9213 41.4226C44.0776 41.2663 44.1654 41.0543 44.1654 40.8333V20.8333C44.1636 19.2868 43.5485 17.8041 42.4549 16.7105C41.3613 15.6169 39.8786 15.0018 38.332 15ZM37.4987 16.6667V23.3825C37.2221 23.3505 36.9438 23.3341 36.6654 23.3333H32.947C33.5843 22.8141 34.0988 22.1602 34.4535 21.4187C34.8082 20.6771 34.9944 19.8662 34.9987 19.0442V16.6667H37.4987ZM34.1654 30V28.3333H35.832V30H34.1654ZM35.832 31.6667V35H34.1654V31.6667H35.832ZM34.1654 26.6667V25H35.832V26.6667H34.1654ZM24.9987 1.66667C26.203 1.66491 27.3958 1.90082 28.5087 2.36086C29.6217 2.82091 30.6329 3.49605 31.4844 4.34761C32.336 5.19916 33.0111 6.21038 33.4712 7.32333C33.9312 8.43627 34.1671 9.62906 34.1654 10.8333V11.1042L28.077 5.23333C27.9843 5.14242 27.8712 5.07491 27.7471 5.03636C27.6231 4.99782 27.4917 4.98935 27.3637 5.01167C27.2357 5.03261 27.1144 5.08314 27.0093 5.15924C26.9043 5.23533 26.8185 5.3349 26.7587 5.45L25.8545 7.19417C25.6991 7.49089 25.4854 7.75321 25.2262 7.96541C24.9671 8.17762 24.6678 8.33535 24.3462 8.42917C24.0088 8.53288 23.6541 8.5676 23.303 8.53123C22.9519 8.49486 22.6118 8.38817 22.3029 8.2175C21.379 7.71117 20.3014 7.56156 19.2746 7.79704C18.2477 8.03252 17.343 8.63671 16.732 9.495L15.832 10.7942C15.845 8.37062 16.8162 6.05062 18.5336 4.34057C20.251 2.63051 22.5751 1.66927 24.9987 1.66667ZM14.9987 13.0958H15.832C15.967 13.0958 16.0999 13.0631 16.2193 13.0004C16.3388 12.9377 16.4412 12.8469 16.5179 12.7358L18.1012 10.4417C18.4755 9.92083 19.0278 9.55536 19.6535 9.41452C20.2792 9.27368 20.9349 9.36725 21.4962 9.6775C22.001 9.95369 22.5557 10.1266 23.128 10.1861C23.7003 10.2456 24.2787 10.1906 24.8295 10.0242C25.3635 9.86588 25.8601 9.60158 26.2896 9.24707C26.7192 8.89256 27.0729 8.4551 27.3295 7.96083L27.7195 7.21083L33.582 12.865C33.7373 13.0147 33.9447 13.0983 34.1604 13.0983H34.9937V14.6458H34.1654C33.9444 14.6458 33.7324 14.7336 33.5761 14.8899C33.4198 15.0462 33.332 15.2582 33.332 15.4792V19.0467C33.3257 19.771 33.121 20.4797 32.7402 21.0958C32.3594 21.712 31.817 22.212 31.172 22.5417L27.8037 24.3133C26.9386 24.7678 25.9759 25.0052 24.9987 25.0052C24.0215 25.0052 23.0588 24.7678 22.1937 24.3133L18.8254 22.5417C18.18 22.2118 17.6374 21.7114 17.2566 21.0948C16.8758 20.4781 16.6713 19.7689 16.6654 19.0442V15.4767C16.6654 15.2557 16.5776 15.0437 16.4213 14.8874C16.265 14.7311 16.053 14.6433 15.832 14.6433H14.9987V13.0958ZM31.2954 40H18.702C18.9261 39.6245 19.0729 39.2079 19.1336 38.7749C19.1944 38.3418 19.1679 37.9009 19.0558 37.4782C18.9437 37.0555 18.7482 36.6595 18.4808 36.3135C18.2134 35.9675 17.8795 35.6784 17.4987 35.4633V25H18.5504C18.9184 26.4305 19.7517 27.698 20.9191 28.6031C22.0864 29.5081 23.5216 29.9993 24.9987 29.9993C26.4758 29.9993 27.911 29.5081 29.0783 28.6031C30.2457 27.698 31.079 26.4305 31.447 25H32.4987V35.4633C32.1179 35.6784 31.784 35.9675 31.5166 36.3135C31.2492 36.6595 31.0537 37.0555 30.9416 37.4782C30.8295 37.9009 30.803 38.3418 30.8638 38.7749C30.9245 39.2079 31.0713 39.6245 31.2954 40ZM20.4154 25.255L21.4229 25.785C22.5267 26.3663 23.7554 26.67 25.0029 26.67C26.2504 26.67 27.4791 26.3663 28.5829 25.785L29.5904 25.255C29.2174 26.1654 28.5821 26.9442 27.7651 27.4924C26.9482 28.0405 25.9867 28.3332 25.0029 28.3332C24.0191 28.3332 23.0575 28.0405 22.2406 27.4924C21.4237 26.9442 20.7883 26.1654 20.4154 25.255ZM12.4987 16.6667H14.9987V19.0442C15.003 19.8662 15.1892 20.6771 15.5439 21.4187C15.8986 22.1602 16.4131 22.8141 17.0504 23.3333H13.332C13.0536 23.3341 12.7753 23.3505 12.4987 23.3825V16.6667ZM14.1654 30V28.3333H15.832V30H14.1654ZM15.832 31.6667V35H14.1654V31.6667H15.832ZM14.1654 26.6667V25H15.832V26.6667H14.1654ZM7.4987 20.8333C7.49991 19.8732 7.83211 18.9428 8.4393 18.199C9.04649 17.4551 9.89154 16.9434 10.832 16.75V23.77C9.52448 24.2337 8.37078 25.0502 7.4987 26.1292V20.8333ZM7.4987 32.5V30.8333C7.50034 29.4318 8.00654 28.0777 8.92468 27.0188C9.84283 25.9598 11.1115 25.2669 12.4987 25.0667V35H7.4987V32.5ZM7.4987 40V36.6667H15.832C16.2741 36.6667 16.698 36.8423 17.0105 37.1548C17.3231 37.4674 17.4987 37.8913 17.4987 38.3333C17.4987 38.7754 17.3231 39.1993 17.0105 39.5118C16.698 39.8244 16.2741 40 15.832 40H7.4987ZM39.1654 48.3333H10.832V41.6667H39.1654V48.3333ZM42.4987 40H34.1654C33.7233 40 33.2994 39.8244 32.9869 39.5118C32.6743 39.1993 32.4987 38.7754 32.4987 38.3333C32.4987 37.8913 32.6743 37.4674 32.9869 37.1548C33.2994 36.8423 33.7233 36.6667 34.1654 36.6667H42.4987V40ZM42.4987 32.5V35H37.4987V25.0667C38.8859 25.2669 40.1546 25.9598 41.0727 27.0188C41.9909 28.0777 42.4971 29.4318 42.4987 30.8333V32.5ZM42.4987 26.13C41.6266 25.051 40.4729 24.2345 39.1654 23.7708V16.75C40.1059 16.9434 40.9509 17.4551 41.5581 18.199C42.1653 18.9428 42.4975 19.8732 42.4987 20.8333V26.13Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">3.5</h5>
                                    <span>K+</span>
                                </div>
                                <p>Happy Traveler</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 divider d-flex justify-content-sm-center">
                        <div class="single-activity">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g>
                                        <path d="M32.6482 14.843C33.0659 14.4358 33.2133 13.8383 33.0331 13.2835C32.8529 12.7289 32.3823 12.3321 31.8051 12.2483L27.614 11.6392C27.6044 11.6378 27.5953 11.6341 27.5875 11.6284C27.5796 11.6227 27.5733 11.6152 27.569 11.6065L25.6947 7.80884C25.4365 7.28579 24.9138 6.96089 24.3305 6.96089C23.7472 6.96089 23.2245 7.28579 22.9664 7.80884L21.092 11.6065C21.0878 11.6152 21.0814 11.6228 21.0735 11.6285C21.0657 11.6342 21.0565 11.6378 21.0469 11.6392L16.8559 12.2483C16.2787 12.3321 15.8082 12.7288 15.6279 13.2835C15.4475 13.8382 15.5951 14.4359 16.0128 14.843L19.0456 17.7992C19.0525 17.806 19.0577 17.8143 19.0607 17.8236C19.0637 17.8328 19.0644 17.8426 19.0627 17.8522L18.3469 22.0263C18.2483 22.6012 18.4802 23.1712 18.952 23.5142C19.4239 23.8572 20.0376 23.9015 20.5541 23.63L24.3028 21.6592C24.3114 21.6547 24.3209 21.6523 24.3307 21.6523C24.3404 21.6523 24.3499 21.6547 24.3585 21.6592L28.1072 23.63C28.3258 23.7454 28.5693 23.8059 28.8165 23.8063C29.1306 23.8063 29.4427 23.7079 29.7092 23.5141C30.1811 23.1712 30.413 22.6011 30.3144 22.0262L30.21 21.4176C30.1418 21.0199 29.7638 20.7525 29.3664 20.821C29.1754 20.8538 29.0052 20.9611 28.8933 21.1193C28.7815 21.2775 28.737 21.4737 28.7698 21.6647L28.8742 22.2733C28.8767 22.2879 28.8804 22.3099 28.8503 22.3319C28.8204 22.3538 28.8004 22.3435 28.7873 22.3365L25.0387 20.3657C24.8204 20.2509 24.5775 20.1909 24.3309 20.1909C24.0842 20.1909 23.8413 20.2509 23.623 20.3657L19.8745 22.3365C19.8613 22.3434 19.8414 22.3538 19.8115 22.3319C19.7814 22.3101 19.7852 22.2879 19.7877 22.2733L20.5037 18.0993C20.5454 17.8562 20.5274 17.6066 20.4511 17.372C20.3749 17.1374 20.2428 16.9248 20.0662 16.7527L17.0334 13.7965C17.0228 13.7862 17.0068 13.7706 17.0182 13.7351C17.0297 13.6998 17.0518 13.6965 17.0665 13.6944L21.2575 13.0854C21.5016 13.0499 21.7334 12.9557 21.9329 12.8107C22.1325 12.6657 22.2938 12.4744 22.403 12.2532L24.2773 8.45552C24.2838 8.44214 24.2938 8.42212 24.331 8.42212C24.3682 8.42212 24.3781 8.44224 24.3847 8.45552L26.2589 12.2531C26.3681 12.4743 26.5294 12.6656 26.7289 12.8106C26.9284 12.9556 27.1602 13.0499 27.4043 13.0854L31.5955 13.6945C31.6101 13.6965 31.6323 13.6999 31.6438 13.7352C31.6553 13.7706 31.6392 13.7863 31.6287 13.7966L28.5958 16.7528C28.4193 16.925 28.2872 17.1375 28.211 17.372C28.1348 17.6066 28.1167 17.8562 28.1584 18.0993L28.2746 18.7764C28.2908 18.871 28.3254 18.9615 28.3766 19.0426C28.4278 19.1238 28.4944 19.1941 28.5728 19.2495C28.6511 19.3049 28.7396 19.3443 28.8332 19.3655C28.9268 19.3867 29.0236 19.3892 29.1182 19.373C29.2128 19.3568 29.3032 19.3221 29.3844 19.2709C29.4656 19.2197 29.5359 19.1531 29.5913 19.0747C29.6467 18.9964 29.6861 18.9079 29.7073 18.8143C29.7285 18.7208 29.731 18.6239 29.7148 18.5293L29.5987 17.8523C29.597 17.8427 29.5977 17.8329 29.6007 17.8236C29.6037 17.8144 29.6089 17.806 29.6159 17.7992L32.6482 14.843ZM14.6938 4.97485C14.5363 4.48999 14.125 4.14321 13.6205 4.06997L10.5135 3.61851L9.12416 0.802979C8.89858 0.345752 8.44164 0.0617676 7.93178 0.0617676C7.42192 0.0617676 6.96508 0.345752 6.7394 0.802979L5.35004 3.61841L2.24311 4.06987C1.73852 4.14321 1.32729 4.48999 1.16977 4.97476C1.01225 5.45962 1.14116 5.98188 1.50629 6.33784L3.75444 8.52934L3.22368 11.6238C3.18074 11.8684 3.20759 12.1201 3.30116 12.3501C3.39472 12.5801 3.55121 12.7791 3.75268 12.9243C3.97913 13.0899 4.25232 13.1793 4.53286 13.1796C4.74898 13.1793 4.96179 13.1264 5.15287 13.0254L7.93178 11.5645L10.7107 13.0254C11.162 13.2627 11.6985 13.224 12.111 12.9243C12.5235 12.6246 12.7262 12.1263 12.64 11.6238L12.1092 8.52944L14.3575 6.33804C14.5359 6.16534 14.6621 5.94588 14.7216 5.70479C14.781 5.4637 14.7714 5.21073 14.6938 4.97485ZM11.0395 7.5313C10.8851 7.68177 10.7697 7.86752 10.7031 8.07254C10.6365 8.27756 10.6207 8.49569 10.6572 8.70815L11.1545 11.6077L8.55043 10.2386C8.35962 10.1383 8.14729 10.086 7.93173 10.086C7.71617 10.086 7.50385 10.1383 7.31303 10.2386L4.70903 11.6076L5.20639 8.70786C5.24284 8.49541 5.22708 8.27727 5.16046 8.07227C5.09383 7.86726 4.97835 7.68154 4.82397 7.5311L2.71733 5.47769L5.62866 5.05454C5.84198 5.02354 6.04457 4.94113 6.21896 4.81442C6.39336 4.68772 6.53433 4.5205 6.62973 4.3272L7.93168 1.68911L9.23383 4.32739C9.32924 4.52066 9.4702 4.68783 9.64458 4.81451C9.81895 4.94118 10.0215 5.02356 10.2348 5.05454L13.1461 5.47769L11.0395 7.5313ZM47.4913 4.97466C47.4155 4.7382 47.2746 4.52789 47.0847 4.36783C46.8949 4.20777 46.6638 4.10444 46.4179 4.06968L43.311 3.61821L41.9216 0.802979C41.696 0.345752 41.2391 0.0617676 40.7292 0.0617676C40.2194 0.0617676 39.7626 0.345752 39.5369 0.802979L38.1474 3.61831L35.0405 4.06978C34.5359 4.14312 34.1247 4.48989 33.967 4.97476C33.8095 5.45962 33.9384 5.98188 34.3036 6.33784L36.5518 8.52925L36.021 11.6236C35.9348 12.1261 36.1375 12.6244 36.55 12.9241C36.7765 13.0897 37.0497 13.1791 37.3302 13.1794C37.5463 13.1791 37.7591 13.1262 37.9502 13.0252L40.7291 11.5643L43.508 13.0252C43.9593 13.2625 44.4958 13.2238 44.9083 12.924C45.3208 12.6243 45.5235 12.126 45.4373 11.6236L44.9066 8.52915L47.1548 6.33774C47.5199 5.98188 47.6488 5.45962 47.4913 4.97466ZM43.837 7.5312C43.6826 7.68165 43.5671 7.86739 43.5005 8.07242C43.4338 8.27744 43.4181 8.49559 43.4545 8.70806L43.9519 11.6077L41.3479 10.2387C41.1571 10.1384 40.9447 10.086 40.7291 10.086C40.5136 10.086 40.3012 10.1384 40.1104 10.2387L37.5064 11.6077L38.0038 8.70796C38.0402 8.4955 38.0245 8.27735 37.9578 8.07234C37.8912 7.86733 37.7757 7.68161 37.6212 7.5312L35.5145 5.47769L38.4261 5.05454C38.6395 5.02355 38.8421 4.94115 39.0165 4.81445C39.1909 4.68774 39.3319 4.52052 39.4273 4.3272L40.7292 1.68911L42.0312 4.3272C42.1266 4.52054 42.2676 4.68777 42.442 4.81449C42.6164 4.9412 42.819 5.02359 43.0324 5.05454L45.9437 5.47769L43.837 7.5312ZM49.6618 19.1681C49.493 18.8992 49.2682 18.6699 49.0026 18.4959C48.737 18.3219 48.437 18.2073 48.1231 18.16C47.6845 18.0925 47.2357 18.1594 46.8359 18.3519C46.436 18.5444 46.1039 18.8536 45.8832 19.2386C45.6468 19.0764 45.3786 18.9665 45.0963 18.9162C44.1094 18.7407 43.1327 19.3275 42.8243 20.2812L42.4818 21.34C42.2963 21.2155 42.0912 21.1231 41.875 21.0666C40.8394 20.7997 39.7804 21.3904 39.4634 22.4114L39.2391 23.1336C38.9925 22.9666 38.7125 22.8551 38.4186 22.8068C37.4086 22.6413 36.4457 23.2273 36.129 24.2003L33.8093 31.324C33.2566 31.5713 32.1067 32.1559 30.9238 33.1837C30.8513 33.2467 30.792 33.3233 30.7492 33.4092C30.7064 33.495 30.6809 33.5885 30.6742 33.6842C30.6675 33.7799 30.6797 33.8761 30.7102 33.9671C30.7406 34.0581 30.7887 34.1422 30.8516 34.2146C30.9146 34.287 30.9912 34.3463 31.077 34.3892C31.1629 34.432 31.2564 34.4575 31.3521 34.4642C31.4478 34.4709 31.5439 34.4587 31.6349 34.4282C31.7259 34.3978 31.81 34.3497 31.8825 34.2868C33.2784 33.0737 34.6404 32.5586 34.6525 32.5542C34.6555 32.5531 34.6582 32.5515 34.6613 32.5503C34.6759 32.5448 34.6902 32.5383 34.7045 32.5318C34.7126 32.5281 34.7209 32.5247 34.7289 32.5206C34.7441 32.5129 34.7587 32.5043 34.7735 32.4957C34.7801 32.4917 34.787 32.4881 34.7934 32.484C34.8095 32.4737 34.825 32.4625 34.8405 32.4507C34.8451 32.4473 34.8499 32.4442 34.8544 32.4407C34.8741 32.4251 34.893 32.4086 34.9113 32.3908L38.1665 29.2111L39.9136 27.5044C40.0449 27.3761 40.2217 27.3051 40.4053 27.3071H40.4066C40.4978 27.3079 40.5879 27.3268 40.6717 27.3626C40.7555 27.3985 40.8313 27.4507 40.8949 27.5161C40.9606 27.5834 41.0119 27.6633 41.0457 27.7511C41.0795 27.8389 41.0951 27.9326 41.0915 28.0266V28.0271C41.0862 28.1748 41.0337 28.3169 40.9417 28.4327L35.3844 35.4275C35.2658 35.5768 35.2103 35.7666 35.2297 35.9563C35.2491 36.146 35.3419 36.3206 35.4883 36.4428C35.4946 36.448 35.5012 36.4526 35.5076 36.4576C35.5199 36.4672 35.5322 36.4768 35.545 36.4854C35.5528 36.4908 35.5609 36.4955 35.5688 36.5004C35.5807 36.5079 35.5924 36.5153 35.6046 36.5219C35.6133 36.5267 35.6222 36.531 35.6309 36.5354C35.6428 36.5414 35.6547 36.5471 35.6669 36.5524C35.6761 36.5564 35.6855 36.56 35.6947 36.5636C35.7162 36.5718 35.738 36.5791 35.7601 36.5854C35.7728 36.5889 35.7854 36.592 35.7983 36.5949C35.8079 36.5969 35.8173 36.5991 35.8268 36.6007C35.84 36.6031 35.8532 36.6049 35.8665 36.6066C35.8758 36.6078 35.8851 36.609 35.8945 36.6098C35.9084 36.611 35.9224 36.6115 35.9364 36.6119C35.9431 36.6121 35.9499 36.6128 35.9566 36.6128C35.9581 36.6128 35.9594 36.6126 35.9609 36.6125C36.001 36.6121 36.041 36.6085 36.0805 36.6016C36.1143 36.5958 36.1476 36.5876 36.1802 36.5772C36.1857 36.5754 36.1911 36.5735 36.1964 36.5716C36.2298 36.5602 36.2623 36.5462 36.2937 36.53C36.2975 36.5281 36.3012 36.5257 36.305 36.5237C36.3385 36.5057 36.3706 36.4851 36.4009 36.4622L39.4102 34.1559C41.9911 32.1779 43.9381 29.575 45.0977 26.5699C45.2641 26.1386 45.4136 25.7009 45.5459 25.258L47.086 20.1066C47.1411 19.9397 47.2536 19.7977 47.4035 19.7058C47.5534 19.614 47.731 19.5783 47.9047 19.605C48.1227 19.6379 48.3072 19.7589 48.4245 19.9457C48.5417 20.1324 48.5705 20.3511 48.5056 20.5618L46.1969 28.0537C46.0766 28.446 45.9577 28.8387 45.8402 29.2319C44.8372 32.5734 43.7001 36.3608 41.1413 38.4502L35.4942 43.0616C35.4103 43.1301 35.3426 43.2164 35.2962 43.3143C35.2498 43.4122 35.2257 43.5192 35.2257 43.6275V48.4767H28.2694V41.6523C28.3056 41.3366 28.6436 38.7047 30.0342 36.4497C30.0846 36.368 30.1184 36.2772 30.1337 36.1825C30.1489 36.0878 30.1454 35.991 30.1233 35.8976C30.1011 35.8042 30.0608 35.7162 30.0046 35.6384C29.9485 35.5606 29.8775 35.4946 29.7958 35.4443C29.7142 35.3939 29.6234 35.3601 29.5287 35.3448C29.4339 35.3295 29.3371 35.3331 29.2438 35.3552C29.1504 35.3773 29.0623 35.4176 28.9845 35.4738C28.9068 35.53 28.8408 35.601 28.7905 35.6827C27.1328 38.3709 26.8239 41.4146 26.8115 41.5428C26.8092 41.5661 26.8081 41.5894 26.8081 41.6127V49.2073C26.8081 49.4011 26.885 49.5869 27.0221 49.7239C27.1591 49.861 27.3449 49.9379 27.5387 49.9379H35.9564C36.1502 49.9379 36.336 49.861 36.473 49.7239C36.6101 49.5869 36.6871 49.4011 36.6871 49.2073V43.974L42.0656 39.5818C44.9711 37.2091 46.1764 33.194 47.2398 29.6516C47.3584 29.2564 47.4755 28.866 47.5934 28.4835L49.9021 20.9916C49.9957 20.6883 50.0226 20.3683 49.9811 20.0536C49.9397 19.7389 49.8307 19.4369 49.6618 19.1681ZM38.6549 25.0142L38.5549 25.3363L37.9077 27.4208L36.0148 29.2698L37.5182 24.6528C37.5565 24.5331 37.6319 24.4287 37.7334 24.3546C37.835 24.2805 37.9575 24.2407 38.0832 24.2408C38.1157 24.2408 38.1487 24.2434 38.1819 24.2489C38.415 24.2871 38.5393 24.4375 38.5926 24.5238C38.6459 24.6101 38.7249 24.7885 38.6549 25.0142ZM41.8893 23.1712L41.6091 24.0377L40.9972 25.9297C40.8768 25.8955 40.7535 25.8719 40.629 25.8591C40.5607 25.8515 40.4921 25.8471 40.4234 25.8459L40.3974 25.8458C40.2313 25.8458 40.068 25.8645 39.9099 25.9009L40.0507 25.4476V25.4474L40.8589 22.8446C40.9 22.712 40.9906 22.6003 41.1118 22.5327C41.2331 22.4651 41.3757 22.4468 41.5101 22.4817C41.6559 22.5193 41.7761 22.6126 41.8488 22.7446C41.9214 22.8765 41.9358 23.028 41.8893 23.1712ZM45.2751 21.0609L44.1455 24.8393C44.0454 25.1743 43.9346 25.506 43.8132 25.8338C43.4535 26.8067 43.0002 27.7425 42.4597 28.6278L42.4602 28.626C42.4727 28.5847 42.4834 28.5431 42.4933 28.5013C42.4965 28.4878 42.4992 28.4743 42.5021 28.4607C42.5182 28.3867 42.5304 28.3119 42.5385 28.2366C42.54 28.2228 42.5417 28.2092 42.543 28.1954C42.5471 28.1522 42.5498 28.109 42.5511 28.0657C42.5524 28.0224 42.552 27.9792 42.5507 27.936C42.5503 27.9224 42.5494 27.909 42.5487 27.8956C42.545 27.8199 42.5373 27.7445 42.5257 27.6697C42.5237 27.6562 42.5218 27.6428 42.5195 27.6293C42.5123 27.588 42.5041 27.5469 42.4947 27.5061L42.4937 27.5016C42.4836 27.4594 42.4722 27.4175 42.4596 27.3759C42.4557 27.3629 42.4513 27.3502 42.4471 27.3374C42.433 27.2937 42.4176 27.2505 42.4009 27.2078C42.3897 27.1794 42.3779 27.1513 42.3655 27.1235C42.3598 27.1107 42.3543 27.098 42.3485 27.0853C42.3308 27.0474 42.312 27.01 42.2921 26.9731L42.2891 26.9672C42.2705 26.9331 42.2508 26.8993 42.2302 26.8659L43.2797 23.6208L43.2798 23.6206L44.2146 20.7305C44.2995 20.4681 44.5683 20.3068 44.8402 20.3547C45.0535 20.3927 45.1671 20.5312 45.2159 20.6104C45.2646 20.6897 45.3372 20.8534 45.2751 21.0609ZM23.1885 41.5431C23.1749 41.3972 22.8228 37.9391 20.8524 35.14C19.2365 32.8442 17.0293 31.6977 16.1909 31.3235L13.8713 24.2003C13.5545 23.2273 12.5911 22.6412 11.5818 22.8068C11.2878 22.855 11.0078 22.9666 10.7612 23.1336L10.5369 22.4114C10.2199 21.3903 9.16049 20.7995 8.12524 21.0666C7.9091 21.1231 7.70398 21.2156 7.5184 21.34L7.17592 20.2812C6.86752 19.3274 5.89067 18.7403 4.90385 18.9162C4.6187 18.9669 4.35112 19.0782 4.11694 19.2386C3.89627 18.8536 3.56415 18.5444 3.16431 18.3519C2.76448 18.1594 2.3157 18.0925 1.87709 18.16C1.56314 18.2073 1.26311 18.3219 0.99753 18.4959C0.73195 18.6699 0.507087 18.8992 0.338324 19.1681C0.169309 19.4369 0.060342 19.739 0.0188793 20.0537C-0.0225834 20.3685 0.00443636 20.6885 0.0980901 20.9918L2.40678 28.4837C2.52465 28.8664 2.64184 29.2567 2.76049 29.6519C3.66664 32.6703 4.6937 36.0914 6.80502 38.4892C6.86843 38.5612 6.9454 38.6201 7.03155 38.6623C7.11769 38.7046 7.21132 38.7295 7.30709 38.7356C7.40286 38.7417 7.49889 38.7288 7.58969 38.6978C7.68048 38.6667 7.76428 38.6181 7.83627 38.5546C7.9083 38.4912 7.96712 38.4142 8.00939 38.3281C8.05166 38.2419 8.07654 38.1483 8.08262 38.0525C8.08869 37.9567 8.07584 37.8607 8.0448 37.7699C8.01376 37.6791 7.96514 37.5953 7.9017 37.5233C6.00151 35.3653 5.02309 32.1067 4.1601 29.2316C4.04038 28.833 3.92221 28.4391 3.80327 28.0533L1.49457 20.5613C1.42963 20.3506 1.45844 20.132 1.57573 19.9453C1.69301 19.7585 1.87758 19.6377 2.09545 19.6046C2.26921 19.5778 2.44685 19.6135 2.59677 19.7053C2.74668 19.7972 2.85917 19.9392 2.9142 20.1062L3.32436 21.4782C3.32447 21.4785 3.32454 21.4788 3.32455 21.4791L4.45414 25.2575C4.49291 25.3872 4.53354 25.5161 4.57504 25.6444C5.59682 28.8005 7.45952 31.559 9.99868 33.6815C10.0426 33.7182 10.0869 33.7545 10.1312 33.7909C10.2821 33.9149 10.4351 34.0364 10.59 34.1554L13.5992 36.4617C13.6299 36.4852 13.6622 36.5054 13.6954 36.5235L13.7062 36.5296C13.7379 36.5462 13.7706 36.5599 13.804 36.5715C13.8092 36.5733 13.8143 36.5752 13.8196 36.5769C13.8575 36.5892 13.8964 36.5982 13.9359 36.604C13.9702 36.6092 14.0049 36.612 14.0397 36.6123L14.0435 36.6125C14.0496 36.6125 14.0555 36.6119 14.0616 36.6117C14.0766 36.6113 14.0914 36.6108 14.1065 36.6095C14.1151 36.6087 14.1236 36.6076 14.132 36.6066C14.1551 36.6041 14.178 36.6002 14.2006 36.5949C14.2232 36.5898 14.2455 36.5838 14.2675 36.5768C14.2806 36.5726 14.2935 36.5679 14.3064 36.5629C14.3282 36.5548 14.3495 36.5453 14.3702 36.5347C14.3786 36.5305 14.387 36.5265 14.3951 36.5219C14.4077 36.515 14.4199 36.5074 14.4322 36.4997C14.4398 36.4949 14.4475 36.4904 14.4548 36.4853C14.4679 36.4763 14.4805 36.4666 14.4931 36.4568C14.4993 36.452 14.5056 36.4476 14.5117 36.4425C14.6581 36.3203 14.751 36.1457 14.7704 35.956C14.7899 35.7663 14.7343 35.5764 14.6157 35.4271L9.05834 28.4323C8.95354 28.2999 8.90051 28.1338 8.90916 27.9652C8.9178 27.7965 8.98752 27.6368 9.10532 27.5158C9.16882 27.4504 9.24467 27.3982 9.32847 27.3624C9.41227 27.3265 9.50235 27.3076 9.5935 27.3068H9.59399C9.68506 27.3056 9.77547 27.3224 9.86002 27.3563C9.94456 27.3902 10.0216 27.4405 10.0866 27.5042L15.089 32.3906C15.1073 32.4084 15.1262 32.425 15.1459 32.4405L15.1534 32.4459C15.171 32.4595 15.1891 32.4724 15.2078 32.4843C15.2112 32.4865 15.2148 32.4883 15.2182 32.4904C15.236 32.5012 15.2539 32.5115 15.2723 32.5208C15.2786 32.5239 15.285 32.5265 15.2914 32.5294C15.3069 32.5367 15.3224 32.5437 15.3383 32.5498C15.3411 32.5508 15.3437 32.5522 15.3464 32.5533C15.3721 32.5628 17.9386 33.5388 19.6574 35.9806C21.3082 38.326 21.6925 41.3173 21.7309 41.6519V48.4763H14.7746V43.6271C14.7746 43.5188 14.7505 43.4118 14.704 43.3139C14.6576 43.216 14.59 43.1297 14.5061 43.0612L10.0927 39.4572C10.0184 39.3965 9.93285 39.351 9.84096 39.3234C9.74907 39.2957 9.65263 39.2865 9.55715 39.2961C9.46168 39.3057 9.36904 39.3341 9.28452 39.3795C9.20001 39.425 9.12528 39.4866 9.06459 39.561C9.0039 39.6353 8.95844 39.7209 8.93081 39.8128C8.90318 39.9046 8.89392 40.0011 8.90356 40.0965C8.9132 40.192 8.94155 40.2847 8.98699 40.3692C9.03243 40.4537 9.09408 40.5284 9.1684 40.5891L13.3133 43.9739V49.2072C13.3133 49.401 13.3903 49.5868 13.5273 49.7238C13.6644 49.8609 13.8502 49.9378 14.044 49.9378H22.4617C22.6554 49.9378 22.8413 49.8609 22.9783 49.7238C23.1153 49.5868 23.1923 49.401 23.1923 49.2072V41.6126C23.192 41.5894 23.1907 41.5662 23.1885 41.5431ZM7.71098 26.9674C7.70981 26.9696 7.70883 26.9718 7.70756 26.9741C7.68774 27.0108 7.66918 27.048 7.65161 27.0855C7.64555 27.0984 7.64008 27.1113 7.63432 27.1242C7.61577 27.1659 7.59851 27.2083 7.58256 27.2511C7.57202 27.2796 7.56225 27.3085 7.55297 27.3374C7.54877 27.3503 7.54438 27.3631 7.54037 27.3762C7.52787 27.4177 7.51635 27.4595 7.50639 27.5016C7.5058 27.5039 7.50551 27.5062 7.50493 27.5084C7.49555 27.5484 7.48754 27.5887 7.48061 27.6291C7.47817 27.643 7.47621 27.6569 7.47407 27.6709C7.46245 27.7451 7.45486 27.8198 7.45131 27.8949C7.45063 27.9088 7.44965 27.9226 7.44926 27.9366C7.44799 27.9796 7.4476 28.0227 7.44887 28.0658L7.44916 28.0703C7.45043 28.1121 7.45327 28.1539 7.45698 28.1956C7.45815 28.2093 7.45991 28.2229 7.46147 28.2367C7.46636 28.2818 7.47268 28.3268 7.48041 28.3715C7.48569 28.4016 7.49164 28.4318 7.49819 28.4617C7.50102 28.4749 7.50366 28.4879 7.50678 28.501C7.51684 28.5435 7.52787 28.5859 7.54047 28.6278C6.82377 27.4545 6.25688 26.1846 5.85473 24.8394L4.72514 21.061C4.66303 20.8535 4.73549 20.6897 4.78422 20.6106C4.83295 20.5314 4.94663 20.3929 5.15991 20.355C5.19213 20.3493 5.22436 20.3465 5.25629 20.3465C5.49291 20.3465 5.71079 20.4995 5.78559 20.731L7.10629 24.8143L7.76997 26.8663C7.74916 26.8995 7.72954 26.9333 7.71098 26.9674ZM10.0156 25.8876C10.0022 25.885 9.98901 25.8821 9.97563 25.8797C9.9168 25.8695 9.85757 25.8617 9.79809 25.8564C9.78393 25.8551 9.76977 25.8544 9.75561 25.8535C9.7052 25.8499 9.65468 25.8481 9.60415 25.848C9.59077 25.848 9.57748 25.8475 9.56401 25.8478C9.50424 25.8489 9.44467 25.8525 9.3852 25.8584C9.37114 25.8598 9.35737 25.8619 9.3434 25.8635C9.29222 25.8697 9.24128 25.8776 9.19067 25.8874C9.17856 25.8897 9.16655 25.8916 9.15454 25.8941C9.10385 25.9048 9.05336 25.9167 9.00346 25.9312L8.41274 24.1051L8.11069 23.1713C8.08769 23.1012 8.07944 23.0271 8.08645 22.9537C8.09346 22.8803 8.11557 22.8091 8.15141 22.7446C8.18666 22.6797 8.23494 22.6229 8.29323 22.5776C8.35151 22.5324 8.41854 22.4997 8.49008 22.4816C8.62447 22.4468 8.76709 22.4651 8.88833 22.5327C9.00957 22.6004 9.10011 22.7121 9.14116 22.8447L9.94936 25.4474L9.94946 25.4477L10.0908 25.9025C10.0659 25.8968 10.0407 25.8925 10.0156 25.8876ZM13.4008 28.6989L12.0924 27.4208L11.4452 25.3363L11.3451 25.0142C11.2751 24.7885 11.3541 24.6102 11.4074 24.5239C11.4606 24.4375 11.585 24.2872 11.8182 24.249C11.9589 24.2251 12.1035 24.2528 12.2254 24.327C12.3473 24.4012 12.4384 24.5169 12.4818 24.6529L13.9852 29.2698L13.4008 28.6989Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">2.5</h5>
                                    <span>K+</span>
                                </div>
                                <p>Tours Success</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 divider d-flex justify-content-sm-center">
                        <div class="single-activity">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g>
                                        <path d="M30.4688 27.3438C30.3542 27.3437 30.2411 27.3185 30.1375 27.2699C30.0338 27.2213 29.942 27.1505 29.8687 27.0625L26.1969 22.6562H24.2188V21.0938H26.5625C26.677 21.0938 26.7901 21.119 26.8938 21.1676C26.9975 21.2162 27.0892 21.287 27.1625 21.375L30.4688 25.3422L33.775 21.375C33.8483 21.287 33.94 21.2162 34.0437 21.1676C34.1474 21.119 34.2605 21.0938 34.375 21.0938H47.6562C47.8634 21.0938 48.0622 21.0114 48.2087 20.8649C48.3552 20.7184 48.4375 20.5197 48.4375 20.3125V3.125C48.4375 2.9178 48.3552 2.71909 48.2087 2.57257C48.0622 2.42606 47.8634 2.34375 47.6562 2.34375H13.2812C13.074 2.34375 12.8753 2.42606 12.7288 2.57257C12.5823 2.71909 12.5 2.9178 12.5 3.125V20.3125C12.5 20.5197 12.5823 20.7184 12.7288 20.8649C12.8753 21.0114 13.074 21.0938 13.2812 21.0938H15.625V22.6562H13.2812C12.6596 22.6562 12.0635 22.4093 11.624 21.9698C11.1844 21.5302 10.9375 20.9341 10.9375 20.3125V3.125C10.9375 2.5034 11.1844 1.90726 11.624 1.46772C12.0635 1.02818 12.6596 0.78125 13.2812 0.78125H47.6562C48.2779 0.78125 48.874 1.02818 49.3135 1.46772C49.7531 1.90726 50 2.5034 50 3.125V20.3125C50 20.9341 49.7531 21.5302 49.3135 21.9698C48.874 22.4093 48.2779 22.6562 47.6562 22.6562H34.7406L31.0688 27.0625C30.9955 27.1505 30.9037 27.2213 30.8 27.2699C30.6964 27.3185 30.5833 27.3437 30.4688 27.3438Z" />
                                        <path d="M13.2812 30.4688H8.59375V28.9062H13.007L14.9406 27.3602C15.3989 26.9949 15.7688 26.5308 16.0226 26.0025C16.2763 25.4742 16.4075 24.8954 16.4062 24.3094V19.5312C16.4062 19.324 16.4886 19.1253 16.6351 18.9788C16.7816 18.8323 16.9803 18.75 17.1875 18.75C23.3664 18.75 23.4375 23.3906 23.4375 23.4375V29.6875H21.875V23.4375C21.8695 23.143 21.7102 20.6484 17.9688 20.343V24.3094C17.9707 25.1298 17.7871 25.9401 17.4317 26.6796C17.0763 27.4191 16.5583 28.0686 15.9164 28.5797L13.7695 30.2984C13.6308 30.409 13.4586 30.4691 13.2812 30.4688Z" />
                                        <path d="M31.25 35.1562H24.2188V33.5938H31.25C31.6644 33.5938 32.0618 33.4291 32.3549 33.1361C32.6479 32.8431 32.8125 32.4457 32.8125 32.0312C32.8125 31.6168 32.6479 31.2194 32.3549 30.9264C32.0618 30.6334 31.6644 30.4688 31.25 30.4688H20.3125V28.9062H31.25C32.0788 28.9062 32.8737 29.2355 33.4597 29.8215C34.0458 30.4076 34.375 31.2024 34.375 32.0312C34.375 32.8601 34.0458 33.6549 33.4597 34.241C32.8737 34.827 32.0788 35.1562 31.25 35.1562Z" />
                                        <path d="M32.0312 39.8438H25V38.2812H32.0312C32.4457 38.2812 32.8431 38.1166 33.1361 37.8236C33.4291 37.5306 33.5938 37.1332 33.5938 36.7188C33.5938 36.3043 33.4291 35.9069 33.1361 35.6139C32.8431 35.3209 32.4457 35.1562 32.0312 35.1562H25V33.5938H32.0312C32.8601 33.5938 33.6549 33.923 34.241 34.509C34.827 35.0951 35.1562 35.8899 35.1562 36.7188C35.1562 37.5476 34.827 38.3424 34.241 38.9285C33.6549 39.5145 32.8601 39.8438 32.0312 39.8438Z" />
                                        <path d="M31.25 44.5312H24.2188V42.9688H31.25C31.6644 42.9688 32.0618 42.8041 32.3549 42.5111C32.6479 42.2181 32.8125 41.8207 32.8125 41.4062C32.8125 40.9918 32.6479 40.5944 32.3549 40.3014C32.0618 40.0084 31.6644 39.8438 31.25 39.8438H24.2188V38.2812H31.25C32.0788 38.2812 32.8737 38.6105 33.4597 39.1965C34.0458 39.7826 34.375 40.5774 34.375 41.4062C34.375 42.2351 34.0458 43.0299 33.4597 43.616C32.8737 44.202 32.0788 44.5312 31.25 44.5312Z" />
                                        <path d="M29.6875 49.2188H14.8438C13.5498 49.1183 12.3327 48.5651 11.4063 47.6562H8.59375V46.0938H11.7188C11.9259 46.0938 12.1246 46.1761 12.2711 46.3227C12.9401 47.0671 13.8581 47.5414 14.8523 47.6562H29.6875C30.1019 47.6562 30.4993 47.4916 30.7924 47.1986C31.0854 46.9056 31.25 46.5082 31.25 46.0938C31.25 45.6793 31.0854 45.2819 30.7924 44.9889C30.4993 44.6959 30.1019 44.5312 29.6875 44.5312H24.2188V42.9688H29.6875C30.5163 42.9688 31.3112 43.298 31.8972 43.884C32.4833 44.4701 32.8125 45.2649 32.8125 46.0938C32.8125 46.9226 32.4833 47.7174 31.8972 48.3035C31.3112 48.8895 30.5163 49.2188 29.6875 49.2188Z" />
                                        <path d="M7.03125 49.2188H2.34375C1.72215 49.2188 1.12601 48.9718 0.686468 48.5323C0.24693 48.0927 0 47.4966 0 46.875L0 29.6875C0 29.0659 0.24693 28.4698 0.686468 28.0302C1.12601 27.5907 1.72215 27.3438 2.34375 27.3438H7.03125C7.65285 27.3438 8.24899 27.5907 8.68853 28.0302C9.12807 28.4698 9.375 29.0659 9.375 29.6875V46.875C9.375 47.4966 9.12807 48.0927 8.68853 48.5323C8.24899 48.9718 7.65285 49.2188 7.03125 49.2188ZM2.34375 28.9062C2.13655 28.9062 1.93784 28.9886 1.79132 29.1351C1.64481 29.2816 1.5625 29.4803 1.5625 29.6875V46.875C1.5625 47.0822 1.64481 47.2809 1.79132 47.4274C1.93784 47.5739 2.13655 47.6562 2.34375 47.6562H7.03125C7.23845 47.6562 7.43716 47.5739 7.58368 47.4274C7.73019 47.2809 7.8125 47.0822 7.8125 46.875V29.6875C7.8125 29.4803 7.73019 29.2816 7.58368 29.1351C7.43716 28.9886 7.23845 28.9062 7.03125 28.9062H2.34375Z" />
                                        <path d="M3.90625 30.4688H5.46875V32.0313H3.90625V30.4688ZM33.5938 16.4063C33.4726 16.4062 33.3531 16.3781 33.2445 16.3243L30.4688 14.936L27.693 16.3282C27.5593 16.395 27.4092 16.4221 27.2606 16.4062C27.112 16.3903 26.971 16.3321 26.8545 16.2385C26.7379 16.1449 26.6507 16.0199 26.6031 15.8782C26.5555 15.7365 26.5495 15.5841 26.5859 15.4391L27.2828 12.6501L25.9125 10.5938C25.8329 10.4761 25.787 10.339 25.7796 10.1971C25.7722 10.0552 25.8036 9.91403 25.8704 9.78868C25.9373 9.66333 26.037 9.55858 26.159 9.48571C26.2809 9.41283 26.4204 9.37458 26.5625 9.37508H28.4883L29.8164 7.37899C29.892 7.27794 29.9901 7.1959 30.1029 7.1394C30.2158 7.08289 30.3402 7.05347 30.4664 7.05347C30.5926 7.05347 30.7171 7.08289 30.8299 7.1394C30.9427 7.1959 31.0408 7.27794 31.1164 7.37899L32.4492 9.37508H34.375C34.5164 9.37506 34.6552 9.41344 34.7766 9.48612C34.8979 9.5588 34.9972 9.66305 35.064 9.78777C35.1307 9.91248 35.1623 10.053 35.1554 10.1942C35.1486 10.3355 35.1035 10.4723 35.025 10.5899L33.6547 12.6462L34.3516 15.4352C34.3804 15.5504 34.3826 15.6707 34.358 15.7869C34.3335 15.9031 34.2827 16.0121 34.2096 16.1057C34.1366 16.1993 34.0431 16.2751 33.9364 16.3272C33.8297 16.3793 33.7125 16.4063 33.5938 16.4063ZM30.4688 13.2813C30.5899 13.2812 30.7095 13.3093 30.818 13.3634L32.4219 14.1665L32.0531 12.6899C32.0264 12.584 32.0222 12.4736 32.0408 12.366C32.0593 12.2583 32.1003 12.1558 32.1609 12.0649L32.9148 10.9376H32.0312C31.9027 10.9376 31.7761 10.9059 31.6627 10.8452C31.5493 10.7846 31.4526 10.6969 31.3812 10.5899L30.4688 9.21883L29.5563 10.5876C29.4852 10.695 29.3886 10.7831 29.2752 10.8442C29.1618 10.9053 29.035 10.9373 28.9062 10.9376H28.0227L28.775 12.0665C28.8357 12.1573 28.8766 12.2599 28.8952 12.3676C28.9138 12.4752 28.9095 12.5856 28.8828 12.6915L28.5141 14.1681L30.1195 13.3649C30.2279 13.3103 30.3474 13.2817 30.4688 13.2813ZM44.5312 16.4063C44.4101 16.4062 44.2906 16.3781 44.182 16.3243L41.4062 14.936L38.6305 16.3282C38.4968 16.395 38.3467 16.4221 38.1981 16.4062C38.0495 16.3903 37.9085 16.3321 37.792 16.2385C37.6754 16.1449 37.5882 16.0199 37.5406 15.8782C37.493 15.7365 37.487 15.5841 37.5234 15.4391L38.2203 12.6501L36.85 10.5938C36.7704 10.4761 36.7245 10.339 36.7171 10.1971C36.7097 10.0552 36.7411 9.91403 36.8079 9.78868C36.8748 9.66333 36.9745 9.55858 37.0965 9.48571C37.2184 9.41283 37.3579 9.37458 37.5 9.37508H39.4258L40.7539 7.37899C40.8295 7.27794 40.9276 7.1959 41.0404 7.1394C41.1533 7.08289 41.2777 7.05347 41.4039 7.05347C41.5301 7.05347 41.6545 7.08289 41.7674 7.1394C41.8802 7.1959 41.9783 7.27794 42.0539 7.37899L43.3867 9.37508H45.3125C45.4539 9.37506 45.5927 9.41344 45.7141 9.48612C45.8354 9.5588 45.9347 9.66305 46.0015 9.78777C46.0682 9.91248 46.0998 10.053 46.0929 10.1942C46.0861 10.3355 46.041 10.4723 45.9625 10.5899L44.5922 12.6462L45.2891 15.4352C45.3179 15.5504 45.3201 15.6707 45.2955 15.7869C45.271 15.9031 45.2202 16.0121 45.1471 16.1057C45.0741 16.1993 44.9806 16.2751 44.8739 16.3272C44.7672 16.3793 44.65 16.4063 44.5312 16.4063ZM41.4062 13.2813C41.5274 13.2812 41.647 13.3093 41.7555 13.3634L43.3594 14.1665L42.9906 12.6899C42.9639 12.584 42.9597 12.4736 42.9783 12.366C42.9968 12.2583 43.0378 12.1558 43.0984 12.0649L43.8523 10.9376H42.9688C42.8402 10.9376 42.7136 10.9059 42.6002 10.8452C42.4868 10.7846 42.3901 10.6969 42.3187 10.5899L41.4062 9.21883L40.4938 10.5876C40.4227 10.695 40.3261 10.7831 40.2127 10.8442C40.0993 10.9053 39.9725 10.9373 39.8438 10.9376H38.9602L39.7125 12.0665C39.7732 12.1573 39.8141 12.2599 39.8327 12.3676C39.8513 12.4752 39.847 12.5856 39.8203 12.6915L39.4516 14.1681L41.057 13.3649C41.1654 13.3103 41.2849 13.2817 41.4062 13.2813ZM22.6562 16.4063C22.5351 16.4062 22.4156 16.3781 22.307 16.3243L19.5312 14.936L16.7555 16.3282C16.6218 16.395 16.4717 16.4221 16.3231 16.4062C16.1745 16.3903 16.0335 16.3321 15.917 16.2385C15.8004 16.1449 15.7132 16.0199 15.6656 15.8782C15.618 15.7365 15.612 15.5841 15.6484 15.4391L16.3453 12.6501L14.975 10.5938C14.8954 10.4761 14.8495 10.339 14.8421 10.1971C14.8347 10.0552 14.8661 9.91403 14.9329 9.78868C14.9998 9.66333 15.0995 9.55858 15.2215 9.48571C15.3434 9.41283 15.4829 9.37458 15.625 9.37508H17.5508L18.8789 7.37899C18.9545 7.27794 19.0526 7.1959 19.1654 7.1394C19.2783 7.08289 19.4027 7.05347 19.5289 7.05347C19.6551 7.05347 19.7796 7.08289 19.8924 7.1394C20.0052 7.1959 20.1033 7.27794 20.1789 7.37899L21.5117 9.37508H23.4375C23.5789 9.37506 23.7177 9.41344 23.8391 9.48612C23.9604 9.5588 24.0597 9.66305 24.1265 9.78777C24.1932 9.91248 24.2248 10.053 24.2179 10.1942C24.2111 10.3355 24.166 10.4723 24.0875 10.5899L22.7172 12.6462L23.4141 15.4352C23.4429 15.5504 23.4451 15.6707 23.4205 15.7869C23.396 15.9031 23.3452 16.0121 23.2721 16.1057C23.1991 16.1993 23.1056 16.2751 22.9989 16.3272C22.8922 16.3793 22.775 16.4063 22.6562 16.4063ZM19.5312 13.2813C19.6524 13.2812 19.772 13.3093 19.8805 13.3634L21.4844 14.1665L21.1156 12.6899C21.0889 12.584 21.0847 12.4736 21.1033 12.366C21.1218 12.2583 21.1628 12.1558 21.2234 12.0649L21.9773 10.9376H21.0938C20.9652 10.9376 20.8386 10.9059 20.7252 10.8452C20.6118 10.7846 20.5151 10.6969 20.4437 10.5899L19.5312 9.21883L18.6188 10.5876C18.5477 10.695 18.4511 10.7831 18.3377 10.8442C18.2243 10.9053 18.0976 10.9373 17.9688 10.9376H17.0852L17.8375 12.0665C17.8982 12.1573 17.9391 12.2599 17.9577 12.3676C17.9763 12.4752 17.972 12.5856 17.9453 12.6915L17.5766 14.1681L19.182 13.3649C19.2904 13.3103 19.4099 13.2817 19.5312 13.2813ZM36.7188 30.4688H42.9688V32.0313H36.7188V30.4688ZM36.1664 28.354L39.682 24.8384L40.7867 25.9431L37.2711 29.4587L36.1664 28.354ZM36.1664 34.5368L37.2711 33.4321L40.7867 36.9477L39.682 38.0524L36.1664 34.5368Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">99.5</h5>
                                    <span>%</span>
                                </div>
                                <p>Positives Review</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-end justify-content-sm-center">
                        <div class="single-activity">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <g>
                                        <path d="M38.9264 43.8664C38.854 43.8031 38.7698 43.7547 38.6787 43.7239C38.5876 43.6931 38.4913 43.6805 38.3953 43.687C38.2993 43.6934 38.2056 43.7187 38.1194 43.7613C38.0331 43.804 37.9562 43.8632 37.8929 43.9356L34.8733 47.3892C34.5534 47.7553 34.1095 47.9659 33.6233 47.9823C33.1358 47.9997 32.68 47.8187 32.3361 47.4752L30.0089 45.1489V43.6105C30.0089 43.2061 29.6811 42.8781 29.2765 42.8781C28.8719 42.8781 28.5441 43.2061 28.5441 43.6105V49.2676C28.5441 49.6721 28.8719 50 29.2765 50C29.6811 50 30.0089 49.6721 30.0089 49.2676V47.2201L31.3007 48.5113C31.9001 49.1102 32.7203 49.4481 33.5656 49.4481C34.4842 49.4481 35.372 49.0451 35.9762 48.3532L38.9957 44.8999C39.059 44.8275 39.1074 44.7433 39.1382 44.6522C39.169 44.5611 39.1815 44.4648 39.1751 44.3688C39.1687 44.2728 39.1434 44.1791 39.1007 44.0929C39.058 44.0067 38.9988 43.9297 38.9264 43.8664ZM8.5086 42.8781C8.31435 42.8781 8.12806 42.9553 7.9907 43.0926C7.85335 43.23 7.77618 43.4163 7.77618 43.6105V49.2676C7.77618 49.6721 8.10401 50 8.5086 50C8.91319 50 9.24102 49.6721 9.24102 49.2676V43.6105C9.24102 43.4163 9.16386 43.23 9.0265 43.0926C8.88915 42.9553 8.70285 42.8781 8.5086 42.8781ZM49.0714 11.6115L44.1621 7.62266C43.8226 7.34688 43.3664 7.29219 42.9713 7.48027C42.5763 7.66826 42.3309 8.05684 42.3309 8.49434V17.9085C42.3309 17.9099 42.3312 17.9111 42.3312 17.9125V29.792L34.9566 38.2027L32.6203 33.8409C31.5053 31.7576 29.4472 30.2853 27.1146 29.9022C26.1526 29.7443 23.9074 29.3772 23.0983 29.2441C22.8066 29.1971 22.5412 29.0476 22.3499 28.8224C22.1586 28.5972 22.0539 28.3111 22.0546 28.0156V27.1501C22.6321 26.7866 23.1672 26.3596 23.6498 25.8771C25.3669 24.159 26.3125 21.8755 26.3125 19.4473V19.1289H26.5947C28.0439 19.1355 29.2764 17.9032 29.2764 16.4473C29.2764 15.6748 28.9371 14.9568 28.3869 14.458C28.8127 13.8507 28.9334 13.0526 28.6911 12.352C28.5869 12.0519 28.4222 11.7764 28.2074 11.5425C27.9925 11.3085 27.7319 11.1211 27.4418 10.9918C27.365 10.9576 27.2873 10.9248 27.21 10.8914V5.61914C27.21 2.5208 24.6892 0 21.5908 0H12.8516C9.75323 0 7.23243 2.5208 7.23243 5.61914V10.8914C7.15528 10.9248 7.07794 10.9576 7.00108 10.9917C6.71092 11.121 6.45035 11.3085 6.23546 11.5425C6.02057 11.7764 5.85592 12.052 5.75167 12.3521C5.50626 13.0618 5.62677 13.8476 6.0545 14.4589C5.50479 14.9573 5.16602 15.6748 5.16602 16.4473C5.16602 17.8993 6.38438 19.1372 7.84864 19.1289H8.13087V19.4473C8.13087 22.6862 9.83282 25.5346 12.3888 27.1459V28.165C12.3891 28.438 12.2977 28.7032 12.1294 28.9181C11.9611 29.133 11.7255 29.2852 11.4605 29.3504L5.37843 30.8504C3.9466 31.2011 2.67408 32.0227 1.765 33.1831C0.85592 34.3436 0.362976 35.7758 0.365242 37.25V49.2676C0.365242 49.6721 0.693074 50 1.09766 50C1.50225 50 1.83009 49.6721 1.83009 49.2676V37.25C1.82832 36.1035 2.21171 34.9896 2.91875 34.087C3.62579 33.1844 4.6155 32.5455 5.72911 32.2727L10.4402 31.1108C11.8968 33.4467 14.4449 34.8754 17.2214 34.8754C20.1023 34.8754 22.7028 33.3647 24.1329 30.898L26.8774 31.3478C28.7633 31.6574 30.4274 32.8479 31.3289 34.5323L33.6929 38.9458C33.8014 39.1487 33.9575 39.3223 34.1478 39.4516C34.3381 39.581 34.5569 39.6622 34.7855 39.6885C35.0143 39.7148 35.2461 39.6852 35.461 39.6022C35.676 39.5193 35.8676 39.3855 36.0194 39.2123L41.0356 33.4914L44.2217 36.6787C44.2247 36.6816 44.2279 36.6842 44.231 36.6871L40.1466 41.3583C40.0215 41.5049 39.9592 41.695 39.9732 41.8872C39.9873 42.0794 40.0765 42.2584 40.2216 42.3853C40.3667 42.5122 40.556 42.5767 40.7484 42.565C40.9408 42.5532 41.1208 42.4661 41.2494 42.3226L47.9812 34.6237C49.359 33.0608 49.1174 30.5614 47.5041 29.2718C46.4203 28.4054 45.0011 28.2402 43.7959 28.726V18.2568L49.0714 13.9705C49.2471 13.8283 49.3887 13.6485 49.4859 13.4444C49.583 13.2403 49.6332 13.017 49.6328 12.7909C49.6328 12.3313 49.4281 11.9014 49.0714 11.6115ZM27.8115 16.4473C27.8115 17.1074 27.2554 17.6674 26.5947 17.6641H26.3125V15.4414C26.5882 15.4611 26.8652 15.4316 27.1306 15.3543C27.5398 15.5562 27.8115 15.9802 27.8115 16.4473ZM8.13087 17.6641H7.84864C7.18419 17.6675 6.63087 17.1083 6.63087 16.4473C6.63087 15.9806 6.90196 15.5573 7.31007 15.3558C7.57631 15.4332 7.85418 15.4628 8.13077 15.4432L8.13087 17.6641ZM8.31221 13.9111C7.89259 14.0972 7.40655 13.9151 7.18819 13.5082C6.95811 13.0795 7.15108 12.5279 7.59542 12.3307C11.6192 10.5441 16.0608 9.91286 20.423 10.5077C20.8231 10.5617 21.1929 10.2815 21.2474 9.88076C21.2603 9.78545 21.2544 9.68852 21.2299 9.5955C21.2054 9.50248 21.1628 9.41519 21.1046 9.33863C21.0464 9.26206 20.9737 9.19772 20.8906 9.14927C20.8075 9.10082 20.7156 9.06921 20.6203 9.05625C16.6028 8.50868 12.5125 8.93945 8.69718 10.3119V5.61914C8.69718 3.32842 10.5607 1.46484 12.8515 1.46484H21.5908C23.8816 1.46484 25.7451 3.32842 25.7451 5.61914V10.3116C25.1855 10.1103 24.6188 9.92881 24.0463 9.76758C23.8597 9.71622 23.6604 9.7408 23.4919 9.83594C23.3233 9.93108 23.1993 10.0891 23.1469 10.2753C23.0945 10.4616 23.1179 10.6611 23.2121 10.8302C23.3063 10.9992 23.4635 11.1242 23.6495 11.1776C24.7416 11.4853 25.8103 11.8706 26.8474 12.3306C27.288 12.5262 27.4821 13.0782 27.2562 13.5052C27.0417 13.9103 26.5604 14.1015 26.1305 13.911C20.6649 11.4907 13.8506 11.4557 8.31221 13.9111ZM9.59571 19.4473V14.9614C14.4826 13.0069 19.9611 13.007 24.8478 14.9617V19.4473C24.8478 21.4844 24.0544 23.4002 22.6139 24.8416C21.1851 26.2714 19.2602 27.0761 17.2218 27.0761C13.0167 27.0762 9.59571 23.6538 9.59571 19.4473ZM17.2214 33.4105C15.1157 33.4105 13.171 32.4036 11.9511 30.7317C13.1452 30.3608 13.9733 29.1664 13.8535 27.8937C14.9246 28.3224 16.0679 28.5421 17.2217 28.541C18.3944 28.541 19.5323 28.3185 20.5898 27.8968C20.5148 29.1586 21.3842 30.2982 22.5709 30.6251C21.3599 32.3639 19.3878 33.4105 17.2214 33.4105ZM46.5892 30.4155C47.5707 31.2001 47.7155 32.7117 46.8783 33.6595L45.1971 35.5822L42.0035 32.3876L43.4913 30.6908C43.8725 30.2543 44.4076 29.9819 44.9849 29.9306C45.5622 29.8793 46.137 30.0531 46.5892 30.4155ZM48.1477 12.8336L43.7959 16.3694L43.7956 9.2124L48.1476 12.7484C48.1697 12.7622 48.1703 12.8193 48.1477 12.8336ZM21.2541 18.8925C21.4484 18.8925 21.6347 18.8153 21.772 18.678C21.9094 18.5406 21.9865 18.3543 21.9865 18.1601V16.5464C21.9865 16.1419 21.6587 15.814 21.2541 15.814C20.8495 15.814 20.5217 16.1419 20.5217 16.5464V18.1601C20.5217 18.3543 20.5989 18.5406 20.7362 18.678C20.8736 18.8153 21.0599 18.8925 21.2541 18.8925ZM13.1887 15.8141C12.9944 15.8141 12.8081 15.8912 12.6708 16.0286C12.5334 16.1659 12.4563 16.3522 12.4563 16.5465V18.1602C12.4563 18.5646 12.7841 18.8926 13.1887 18.8926C13.5933 18.8926 13.9211 18.5646 13.9211 18.1602V16.5465C13.9211 16.3522 13.8439 16.1659 13.7066 16.0286C13.5692 15.8912 13.3829 15.8141 13.1887 15.8141ZM19.4766 22.5349C19.3831 22.3646 19.2259 22.2384 19.0394 22.184C18.8529 22.1297 18.6524 22.1516 18.4821 22.245C18.0872 22.4606 17.6439 22.572 17.194 22.5686C16.7625 22.5635 16.339 22.4524 15.9607 22.245C15.7905 22.154 15.5914 22.1338 15.4065 22.1888C15.2216 22.2437 15.0658 22.3694 14.973 22.5385C14.8802 22.7077 14.8578 22.9066 14.9108 23.0921C14.9638 23.2776 15.0878 23.4347 15.2559 23.5293C15.666 23.7544 16.3325 24.0245 17.1786 24.0334C18.0334 24.0423 18.7642 23.7611 19.1867 23.5294C19.357 23.4359 19.4833 23.2787 19.5376 23.0922C19.592 22.9056 19.57 22.7052 19.4766 22.5349Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">55</h5>
                                    <span>+</span>
                                </div>
                                <p>Travel Guide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="tripadvisor-review">
                        <strong>Excellent!</strong>
                        <img src="assets/img/home2/icon/tripadvisor-star.svg" alt>
                        <p><strong>5.0</strong> Rating out of <strong>5.0</strong> based on <a href="https://www.tripadvisor.com/"><strong>245354</strong>
                                reviews</a></p>
                        <img src="assets/img/home2/icon/tripadvisor-logo.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home2-testimonial-section mb-120">
        <div class="container-fluid">
            <div class="row g-lg-4 gy-5">

                <div class="col-lg-5">
                    <div class="testimonial-content-wrapper">
                        <div class="section-title2 mb-40">
                            <div class="eg-section-tag two">
                                <span>Testimonial</span>
                            </div>
                            <h2>Find The Compliments From Our Travelers</h2>
                            <p>Welcome to our Sri Lanka Tour website, where enchanting experiences come to life through the heartfelt words of our cherished travelers. Explore the vivid tapestry of compliments woven by those who have embarked on unforgettable journeys across the resplendent landscapes of Sri Lanka.
                            </p>
                        </div>

                        <div class="review-wrap">
                            <h6>Review On</h6>
                            <ul class="rating-area">
                                <li class="single-rating">
                                    <a href="https://www.trustpilot.com/">
                                        <div class="icon">
                                            <img src="assets/img/home2/icon/trustpilot-logo.png" alt>
                                        </div>
                                        <div class="rating">
                                            <div class="star">
                                                <img src="assets/img/home2/icon/trustpilot-star.svg" alt>
                                            </div>
                                            <span>5.0 / 5.0</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="single-rating">
                                    <a href="https://www.tripadvisor.com/">
                                        <div class="icon">
                                            <img src="assets/img/home2/icon/tripadvisor-logo2.png" alt>
                                        </div>
                                        <div class="rating">
                                            <div class="star">
                                                <img src="assets/img/home2/icon/tripadvisor-star2.svg" alt>
                                            </div>
                                            <span>4.5 / 5.0</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Comment Section -->
                <div class="col-lg-7">
                    <div class="testimonial-card-slider-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper home2-testimonial-card-slider mb-35">
                                    <div class="swiper-wrapper">

                                        <?php
                                        $result_comment = Database::search("SELECT * FROM review WHERE status_id='2'");

                                        while ($data = $result_comment->fetch_assoc()) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper style-2">
                                                    <div class="tesimonial-card">
                                                        <img src="assets/img/home2/vector/testi-quote.svg" alt class="quote">
                                                        <div class="testimonial-content">
                                                            <p>“<?= $data['message'] ?>”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5><?= $data['name'] ?></h5>
                                                            <span><?= $data['created_at'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="slide-and-view-btn-grp style-3">
                                    <div class="slider-btn-grp3">
                                        <div class="slider-btn testimonial-card-slider-prev">
                                            <i class="bi bi-arrow-left"></i>
                                            <span>PREV</span>
                                        </div>
                                        <div class="slider-btn testimonial-card-slider-next">
                                            <span>NEXT</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="feature-card-section mb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <div class="eg-section-tag">
                            <span>Who We Are</span>
                        </div>
                        <h2>Why Travel Zoom Lanka Is Best</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-5 mb-80">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card style-2">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <path d="M36.6322 3.49316L36.7071 3.42037C20.062 3.2598 3.21674 16.7033 3.50361 36.4612C3.78192 55.5747 19.1789 69.0525 37.1471 68.2261C39.5098 68.1213 41.8522 67.7401 44.1263 67.0904C46.9554 69.3115 51.6471 70.7908 54.7171 69.5459C55.9695 69.0268 57.087 68.1929 58.0215 67.1268C61.4811 63.9669 62.0067 58.5719 61.1899 53.8749C66.343 46.5607 67.7998 38.1471 66.4746 30.3159C64.0383 15.9133 52.1941 3.48459 36.6322 3.49316ZM52.7667 10.5901C52.7056 10.715 52.679 10.8539 52.6897 10.9926C52.9551 13.6076 50.1314 15.4423 47.8492 14.1578C46.1633 13.2073 45.2374 10.7464 42.9788 9.92213C38.8416 8.40748 35.7812 13.2276 32.4297 12.8797C31.1516 12.7438 29.8928 11.744 29.2217 10.3321C28.7186 9.27453 28.4948 7.96861 28.4981 6.30303C37.1364 3.73721 45.6291 5.30539 52.7667 10.5901ZM7.88701 27.1613C13.5142 25.469 21.1025 29.0132 15.6037 31.8701C14.3245 32.5145 13.0101 33.1086 12.28 34.3257C11.3541 35.8735 11.8347 38.0476 13.3312 39.0741C13.9049 39.4648 14.6553 39.7442 14.7377 40.061C14.9304 40.7975 11.216 43.2552 7.12165 42.0435C6.6924 40.0691 6.45296 38.0583 6.40661 36.0384C6.32712 33.0449 6.70137 30.0567 7.51664 27.1753C7.63942 27.2004 7.76645 27.1956 7.88701 27.1613ZM23.1866 55.3692C25.0877 51.8689 29.0932 50.8863 29.6134 51.5071C29.9431 51.9021 29.4133 52.995 29.2548 53.9113C28.816 56.3957 31.2341 58.8438 33.7292 58.4392C36.5873 57.9725 37.9306 54.6295 40.1197 54.3491C41.1558 54.2206 42.3611 54.849 43.3524 56.0446C44.7953 57.7798 45.7169 61.3839 45.4857 64.045C42.6071 65.0931 39.5761 65.6619 36.5134 65.7288C31.7532 65.8361 27.0411 64.7579 22.8012 62.5914C22.1954 60.458 22.1911 57.2028 23.1866 55.3692ZM43.6328 41.1304C43.5825 39.8373 43.4262 38.5785 43.2325 36.8969C43.2181 36.7796 43.1778 36.6669 43.1144 36.5671C43.0511 36.4673 42.9664 36.3829 42.8664 36.3199C41.8142 35.3244 39.9784 33.3473 36.8881 31.0994C36.7942 31.031 36.6867 30.9837 36.5728 30.9609C36.4589 30.9381 36.3415 30.9402 36.2285 30.9672C36.1156 30.9941 36.0098 31.0453 35.9185 31.1171C35.8273 31.1889 35.7527 31.2797 35.6999 31.3831C33.5869 35.5267 32.2585 39.4605 31.4225 44.0238C30.7213 43.6705 30.6785 43.6491 30.5436 43.5742C31.3807 37.7821 31.5306 32.3005 31.6098 27.1731C31.6117 27.0484 31.5846 26.9249 31.5305 26.8125C31.4765 26.7001 31.397 26.6018 31.2983 26.5255C28.6351 24.4639 26.2031 22.7362 23.8706 21.2483C23.4339 19.8996 23.1288 19.6876 23.3161 19.4008C23.4617 19.176 23.5484 19.313 24.9721 19.1599C27.981 21.1648 30.8187 22.9171 33.407 24.3707C33.6254 24.4928 33.8887 24.5078 34.1199 24.4071C38.6906 22.4322 43.9068 20.7795 49.2343 19.6148C49.2996 19.7165 49.4077 19.8932 49.4698 20.0002C45.6998 21.8413 41.8505 24.5677 38.286 27.946C38.2087 28.0191 38.1467 28.1069 38.1036 28.2042C38.0605 28.3015 38.0373 28.4064 38.0352 28.5129C38.0331 28.6193 38.0522 28.725 38.0914 28.824C38.1306 28.9229 38.1891 29.0131 38.2635 29.0892C40.3883 31.2728 42.3098 33.0733 43.9689 34.437C44.6882 35.0236 45.4204 34.0089 49.4217 33.2125C49.5897 33.4105 49.7663 33.6438 49.9408 33.8922C46.3763 36.1615 45.1539 37.1142 43.9571 41.2674C43.8492 41.2214 43.7411 41.1757 43.6328 41.1304ZM48.1821 37.0596C55.2448 44.6896 63.745 59.1135 56.4383 66.4567C61.4768 58.6736 54.3446 46.8251 46.4191 39.2711C46.8357 38.4124 47.4379 37.657 48.1821 37.0596ZM56.3591 59.3276C56.5539 61.4492 56.2735 63.0099 55.7757 64.2623C53.6616 67.3387 49.777 67.6406 47.2016 66.0231C50.2759 64.7322 53.1211 62.844 55.2116 60.3328C55.6044 60.0116 55.9802 59.6702 56.3591 59.3276ZM50.5617 35.4026C50.8678 35.2024 51.1579 35.0204 51.4052 34.878C51.4351 34.8663 51.4673 34.8705 51.4951 34.8545C51.6773 34.7443 51.8084 34.5664 51.8596 34.3597C51.9108 34.153 51.8778 33.9344 51.768 33.752C51.5443 33.3816 50.9513 32.446 50.2801 31.7749C50.1893 31.6832 50.0775 31.6151 49.9544 31.5763C49.8313 31.5375 49.7007 31.5292 49.5737 31.5522C47.7732 31.868 46.1783 32.3872 44.6454 32.9117C43.2635 31.7503 41.7007 30.2881 39.9869 28.554C43.5054 25.3213 47.2755 22.7437 50.9299 21.077C51.107 20.9944 51.2475 20.8493 51.3245 20.6697C51.4015 20.49 51.4096 20.2882 51.3474 20.103C51.3323 19.967 51.2818 19.8374 51.2007 19.7272C50.6794 19.0529 50.2662 17.7587 49.3703 17.9439C43.9207 19.1032 38.5633 20.7709 33.8491 22.7758C26.3197 18.5069 25.8466 17.4387 25.0706 17.5307C23.5987 17.718 22.6717 17.4569 21.9738 18.5187C21.8041 18.7778 21.6982 19.0735 21.6649 19.3815C21.6316 19.6894 21.6718 20.0009 21.7822 20.2903C23.269 23.8837 20.8541 20.5151 29.9977 27.5499C29.9121 32.8539 29.7483 38.1075 28.8791 43.8514C28.7271 44.8608 30.4366 45.1338 31.3914 45.8563C31.4936 45.9345 31.6133 45.9867 31.7402 46.0083C31.867 46.03 31.9972 46.0205 32.1196 45.9807C32.242 45.9409 32.3529 45.872 32.4427 45.7798C32.5325 45.6877 32.5986 45.5751 32.6353 45.4517C33.331 44.7688 32.9457 40.6883 36.705 32.9663C38.3385 34.2144 39.9056 35.6145 41.675 37.4C41.7339 38.0444 41.8216 38.3034 42.0036 41.1679C42.0818 42.386 42.1503 42.2404 43.2539 42.7136C44.0749 43.07 44.1273 43.1064 44.4067 43.0668C44.611 43.1005 44.8203 43.0534 44.9905 42.9356C45.1607 42.8177 45.2784 42.6383 45.3187 42.4352C45.4193 41.9343 45.5842 41.4044 45.7662 40.8853C50.5927 45.5737 54.7042 50.6647 56.0776 57.4148C53.4756 59.9274 50.4401 61.9481 47.1181 63.3792C47.1502 60.4323 46.1387 56.8839 44.5887 55.0181C43.2239 53.3739 41.5166 52.554 39.9141 52.7552C37.0144 53.1288 35.672 56.4964 33.4702 56.8549C32.0733 57.0862 30.5897 55.5897 30.8348 54.1896C31.0189 53.162 31.8453 51.6698 30.8434 50.4763C30.2375 49.7484 29.1928 49.5279 27.9008 49.8512C25.3307 50.4977 23.041 52.2725 21.7747 54.6017C20.7835 56.4289 20.6047 59.242 20.9419 61.5488C14.5622 57.6674 9.69174 51.3904 7.56802 43.8161C10.2227 44.331 12.888 43.7165 14.9229 42.3207C16.034 41.5564 16.5328 40.5866 16.2898 39.6543C15.9955 38.5303 14.8683 38.1771 14.2368 37.7489C13.4447 37.2062 13.1674 35.9667 13.6577 35.151C14.1383 34.346 15.1777 33.8815 16.3444 33.2938C20.4088 31.1829 19.7516 27.688 16.0351 26.1038C13.5571 25.044 10.6905 24.83 8.06256 25.4626C11.1347 16.79 18.2455 9.92642 26.8817 6.8286C27.0102 11.7804 29.6605 14.1996 32.2563 14.4768C36.0531 14.8729 39.3982 10.3235 42.4264 11.4293C44.153 12.0608 45.0511 14.4243 47.0603 15.5558C49.9569 17.1893 53.8789 15.4702 54.2718 11.7815C59.7973 16.4549 63.517 23.0402 64.8197 30.1253C66.1385 37.2993 64.9803 44.985 60.7093 51.7158C59.0202 45.5373 54.6593 40.2013 50.5617 35.4026Z" />
                                <path d="M59.2244 26.0313C58.6495 25.632 58.6281 25.6138 58.6838 24.841C58.7095 24.4781 58.7395 24.066 58.6281 23.6346C58.0544 21.3974 54.8121 21.2657 53.9001 23.6196C53.2578 25.2798 50.3709 26.0805 51.7175 29.5498C52.8789 32.5427 57.2794 33.7202 59.6279 31.4947C60.3515 30.8097 60.7711 29.7778 60.7508 28.7363C60.723 27.441 60.1353 26.6618 59.2244 26.0313ZM53.215 28.9685C52.2677 26.529 54.5048 26.5012 55.3976 24.1998C55.5581 23.7855 55.9681 23.5051 56.3256 23.5051C56.6543 23.5051 56.9989 23.7459 57.0728 24.0328C57.2034 24.5434 56.8405 25.4565 57.3008 26.3385C57.9099 27.5053 59.1162 27.3019 59.1451 28.7684C59.2029 31.7538 54.2876 31.7399 53.215 28.9685ZM52.7954 5.07556L53.382 0.879487C53.4014 0.673445 53.3407 0.467836 53.2124 0.30546C53.084 0.143084 52.898 0.036453 52.6931 0.007764C52.4881 -0.020925 52.28 0.0305387 52.112 0.151442C51.944 0.272345 51.8292 0.453372 51.7913 0.656838L51.2047 4.85398C51.0592 5.90621 52.6477 6.12778 52.7954 5.07556ZM57.7654 2.49048L55.1471 6.2466C54.5338 7.12542 55.8707 8.01816 56.4637 7.16396L59.082 3.4089C59.1449 3.32257 59.1899 3.22456 59.2144 3.1206C59.2389 3.01665 59.2425 2.90885 59.2248 2.80351C59.2072 2.69818 59.1687 2.59743 59.1116 2.50716C59.0545 2.41689 58.98 2.33892 58.8924 2.27781C58.8048 2.21671 58.7058 2.17369 58.6014 2.15129C58.497 2.1289 58.3891 2.12756 58.2842 2.14736C58.1792 2.16717 58.0793 2.20772 57.9902 2.26663C57.9011 2.32555 57.8247 2.40165 57.7654 2.49048ZM59.4995 11.1438L64.1323 7.6692C64.3026 7.54145 64.4152 7.35126 64.4453 7.14048C64.4754 6.9297 64.4206 6.71559 64.2928 6.54525C64.1651 6.37491 63.9749 6.2623 63.7641 6.23219C63.5533 6.20208 63.3392 6.25694 63.1689 6.38469L58.535 9.86036C57.6797 10.5015 58.6613 11.7754 59.4984 11.1449L59.4995 11.1438Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Sri Lanka Exclusive Tours</h6>
                            <p>Embark on an unforgettable journey through Sri Lanka with us, your local tour guide. We specialize in showcasing the wonders within the borders of Sri Lanka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 pt-15">
                    <div class="feature-card style-2 secondary">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <path d="M63.3244 22.918C62.2732 22.7909 58.8339 22.9134 57.757 22.876C56.4317 22.8749 53.0974 22.8597 51.8059 22.8597L50.8142 22.8574C50.1877 22.9134 49.8389 22.3744 50.071 21.84C50.1854 21.5157 50.806 19.8847 50.9344 19.5149C52.4779 15.3639 54.9104 8.78736 56.4679 4.64103C56.6837 4.05303 56.9905 3.31453 57.1819 2.7102C57.4339 1.7407 56.679 0.652196 55.6442 0.590363L39.7274 0.416529C37.7744 0.376863 30.8957 0.259029 29.0652 0.220529C28.7036 0.197772 28.3422 0.267313 28.0148 0.422618C27.6875 0.577923 27.405 0.813894 27.1939 1.10836C26.8987 1.47353 26.838 1.98103 26.7249 2.3917C26.6234 2.7837 26.4099 3.72753 26.236 4.46953C25.9333 4.45046 25.6438 4.33887 25.4065 4.14986C23.7569 2.80936 22.176 1.69986 20.1857 3.2632C19.3877 3.79403 18.9794 4.4917 18.0892 4.6177C17.0812 4.66903 16.0685 4.25253 14.8855 4.5022C14.1739 4.62353 13.475 5.23953 13.1659 5.85086C12.6525 6.71886 12.5207 7.8062 11.9654 8.46653C11.3505 9.0557 10.2387 9.2412 9.41037 9.77086C8.12004 10.402 7.95554 12.0237 8.24137 13.195C8.38837 14.168 8.62871 14.8575 8.01037 15.6894C5.90921 18.2957 5.92671 19.0645 8.07687 21.6044C8.73254 22.4175 8.53187 23.191 8.39887 24.1687C7.73154 27.6512 10.2772 27.3152 12.1882 28.6499C12.761 29.2239 12.9407 30.3065 13.4925 31.297C14.0245 32.4905 15.5587 32.6562 16.6659 32.4124C17.6447 32.2759 18.438 32.0764 19.2547 32.7355L19.9185 33.2535L19.1707 36.456L19.0739 36.8749C18.7087 38.2445 19.9524 39.697 21.3185 39.6329C21.3349 39.6235 28.5484 39.6795 28.8879 39.6515C29.834 39.655 36.1364 39.6597 36.9274 39.6667C36.9285 39.6025 35.9859 42.7759 35.9812 42.7712L28.3045 68.5709C28.2413 68.7725 28.2508 68.9898 28.3313 69.1852C28.4118 69.3805 28.5582 69.5414 28.7451 69.6399C28.932 69.7384 29.1475 69.7683 29.3542 69.7243C29.5608 69.6803 29.7455 69.5653 29.876 69.3992C36.2904 61.1614 52.9294 39.8184 59.1909 31.885L64.1025 25.6539C64.9519 24.8209 64.5202 23.1782 63.3255 22.9215L63.3244 22.918ZM16.5235 31.4569C15.6089 31.5899 14.7805 31.7334 14.2882 30.8245C13.797 30.0499 13.6897 28.9579 12.8427 27.9907C11.886 27.125 10.7882 27.0107 10.0205 26.5242C9.11871 26.0307 9.27387 25.2245 9.40338 24.3145C9.62271 23.2692 9.72071 21.8902 8.94254 20.9849C8.31604 20.1122 7.53671 19.3434 7.55887 18.6667C7.63121 17.521 9.76854 16.1677 9.68921 14.6522C9.74871 13.629 9.37771 12.5919 9.53404 11.704C9.60871 11.396 9.76854 11.2257 10.1395 11.0122C11.0717 10.507 12.1415 10.4032 13.0655 9.5667C13.923 8.67886 14.0817 7.59853 14.6149 6.70136C14.8424 6.35136 14.9824 6.2557 15.239 6.20903C16.1117 6.11336 17.1115 6.5112 18.1627 6.48436C19.3644 6.52753 20.4937 5.49503 21.3372 4.87553C22.4992 3.92703 23.1549 5.2232 24.1804 5.87186C25.137 6.73753 26.8007 6.7212 27.8997 6.4902C28.5052 6.43653 28.9054 6.32336 29.2367 6.55086C29.9869 7.5227 29.9507 8.77453 30.989 9.84436C32.0507 10.8804 33.292 10.8734 34.2557 11.62C34.5929 12.4682 34.062 13.5695 34.1647 14.6732C34.0877 16.2704 35.9054 17.4195 36.288 18.669C36.3009 18.8137 36.1935 19.124 35.9392 19.4845C35.5239 20.034 34.818 20.9382 34.5415 21.588C33.9815 22.8819 34.7072 24.4102 34.5987 25.5897C34.4412 26.2722 33.5242 26.4635 32.8394 26.789C32.3494 27.006 31.787 27.2347 31.255 27.7574C30.415 28.6884 30.3182 29.7512 29.82 30.695C29.379 31.549 28.7117 31.3729 27.8332 31.2912C27.0562 31.1909 26.0447 31.017 25.2245 31.381C24.1384 31.8384 23.0639 33.2885 22.1655 33.3014C21.4679 33.3282 20.6932 32.5465 19.8275 31.92C18.9269 31.1477 17.5654 31.241 16.5224 31.4592L16.5235 31.4569ZM57.253 32.662C56.6171 32.2274 55.9652 31.8165 55.2989 31.43C53.9304 30.6357 52.544 29.8725 51.1409 29.141C50.0395 28.5682 48.9289 28.014 47.8124 27.4704C46.718 26.9313 45.6072 26.4263 44.4815 25.956C44.4211 25.9315 44.3596 25.9097 44.2972 25.8907C44.2379 25.8736 44.1746 25.8759 44.1167 25.8973C44.0587 25.9187 44.0092 25.9581 43.9752 26.0097C43.938 26.066 43.9224 26.1338 43.9311 26.2006C43.9399 26.2675 43.9726 26.329 44.023 26.3737C44.0919 26.432 44.1677 26.4892 44.2505 26.5417C46.3063 27.8269 48.411 29.0322 50.5599 30.1549L50.687 30.2214C51.7814 30.793 52.8862 31.3449 54.0015 31.8769C54.9407 32.3237 55.8927 32.7484 56.847 33.166L55.4377 34.9184C53.0577 33.502 50.5984 32.2467 48.1425 30.982C45.5164 29.7045 42.8984 28.4084 40.1824 27.3105C40.1123 27.2834 40.0346 27.2834 39.9645 27.3105C39.8944 27.3376 39.8369 27.3898 39.8032 27.457C39.7696 27.5242 39.7622 27.6015 39.7824 27.6739C39.8027 27.7462 39.8492 27.8084 39.9129 27.8484C42.4352 29.3255 45.0051 30.7197 47.6187 32.0285C50.0485 33.2423 52.5144 34.3822 55.013 35.4469L52.5934 38.4499C52.004 38.0298 51.3984 37.6328 50.778 37.2599C49.434 36.4651 48.0689 35.7065 46.6842 34.9849C44.7965 34.0119 42.9077 33.0424 40.9302 32.2292C40.8229 32.1849 40.698 32.2094 40.6304 32.2887C40.5499 32.3832 40.5639 32.5104 40.6444 32.571C41.8274 33.4647 43.6392 34.5987 45.577 35.6732C45.8839 35.8435 46.1942 36.008 46.5057 36.1737C47.7158 36.8147 48.9387 37.4312 50.1737 38.0229C50.8889 38.367 51.5585 38.6727 52.1909 38.9469L49.7992 41.909C49.4907 41.6414 49.1674 41.3914 48.8309 41.16C47.9699 40.5639 46.9922 39.9899 46.2455 39.543C46.0962 39.4532 45.9679 39.3739 45.8629 39.3144C44.4862 38.5257 43.0979 37.7592 41.6197 37.1339C41.5404 37.1 41.4494 37.0965 41.391 37.1292C41.3175 37.1712 41.3012 37.2435 41.3175 37.2797C41.552 37.7954 42.9835 38.8734 44.6472 39.8965C45.7635 40.564 46.8991 41.1986 48.0527 41.7994C48.5369 42.0537 48.9779 42.2742 49.3617 42.4527L47.1357 45.206C47.0914 45.1664 47.0494 45.1267 47.0027 45.087C46.291 44.4734 45.3367 43.8235 45.1617 43.6695C44.233 43.0629 43.3149 42.4399 42.2707 41.9977C41.2405 42.0385 42.3722 43.092 43.8352 44.1467C44.5667 44.674 45.381 45.2014 46.0484 45.6015C46.2374 45.7147 46.41 45.815 46.571 45.9049C41.279 52.4499 35.5787 59.486 31.4732 64.5505L38.1757 43.449C38.4989 42.413 38.9107 41.1869 39.1989 40.1252C39.5384 38.7182 38.2889 37.2599 36.8737 37.3392C36.596 37.3322 35.903 37.3509 35.6125 37.3415L28.8844 37.352C28.4399 37.3275 21.3664 37.4069 21.2229 37.352C21.2229 37.352 21.217 37.345 21.2182 37.3275L21.2999 36.925L21.8295 34.3222C23.0137 34.4984 24.0415 33.6502 25.1324 32.8067C25.9665 32.186 26.6677 32.4264 27.6419 32.5757C29.988 33.117 31.0275 32.018 31.7625 29.9285C32.3319 27.9639 34.6104 28.476 35.8307 27.0247C36.5435 26.2547 36.477 24.92 36.3464 24.1034C36.2414 23.1864 36.0465 22.5505 36.6252 21.8622C37.3182 20.9125 38.3005 20.16 38.374 18.6667C38.3635 17.7684 37.9575 17.1174 37.632 16.639L36.7127 15.4082C36.1935 14.7152 36.4362 14.1634 36.5599 13.2604C36.7372 12.425 36.8037 10.9527 36.0489 10.1255C35.2089 9.03353 33.5324 8.86203 32.6445 8.18653C32.1475 7.60903 31.9539 6.51703 31.4265 5.6957C31.08 5.0412 30.2692 4.36803 29.498 4.2572C29.1273 4.1916 28.7494 4.17591 28.3745 4.21053L28.4597 3.7847C28.5449 3.43936 28.6814 2.5282 28.7817 2.21903C28.7945 2.19458 28.8126 2.17324 28.8346 2.15651C28.8565 2.13978 28.8819 2.12807 28.9089 2.1222L29.8037 2.10236C36.0302 1.9542 49.1774 1.81303 55.5427 1.75703C55.8729 1.76053 56.1482 2.12336 56.0712 2.4652C54.9139 5.80653 52.577 12.0715 51.366 15.449L50.0057 19.1765C49.8704 19.5359 49.2824 21.175 49.1552 21.5064C48.6407 22.603 49.6359 23.9575 50.8084 23.8129L52.6365 23.807C53.8839 24.759 55.1803 25.6449 56.5204 26.4612C57.2423 26.8991 57.9764 27.3165 58.7219 27.713C59.3075 28.0245 59.906 28.3127 60.5069 28.5985L59.0835 30.3754C58.6121 30.0059 58.1206 29.6627 57.6112 29.3475C56.468 28.6375 55.3076 27.9555 54.131 27.3024C53.2191 26.7979 52.2981 26.3102 51.3684 25.8394C50.4507 25.3642 49.5156 24.9237 48.5649 24.5187C48.5145 24.4973 48.4615 24.4824 48.4074 24.4744C48.3558 24.4666 48.3031 24.4733 48.2552 24.4937C48.2072 24.5141 48.1658 24.5474 48.1355 24.5899C48.1025 24.635 48.0842 24.6893 48.0832 24.7453C48.0821 24.8012 48.0984 24.8562 48.1297 24.9025C48.1745 24.9676 48.2306 25.0241 48.2954 25.0694C49.9767 26.2245 51.7128 27.298 53.4975 28.2859L53.6025 28.3442C54.5108 28.8495 55.4304 29.3342 56.3605 29.7979C57.1224 30.1782 57.8982 30.534 58.6752 30.8864L58.3847 31.248L57.2484 32.6655L57.253 32.662ZM63.3512 25.053L60.9572 28.0397C60.6311 27.76 60.2891 27.4994 59.9329 27.2592C58.7744 26.4612 57.3277 25.627 57.1317 25.4579C56.4014 25.0344 55.6745 24.6074 54.9337 24.2025C54.6805 24.0637 54.4239 23.933 54.1684 23.8C56.728 23.793 59.4744 23.7884 61.7237 23.7954C61.9325 23.807 62.9382 23.7732 63.0922 23.8257C63.616 23.9902 63.8039 24.6167 63.3512 25.053Z" />
                                <path d="M20.878 14.0001C21.1265 9.52474 14.3983 9.60757 14.6083 14.0001C14.9105 17.7567 20.5817 17.8256 20.878 14.0001ZM18.7885 14.0001C19.0627 16.4186 15.5592 16.3766 15.7248 14.0001C16.0935 12.0634 18.4012 12.3866 18.7885 14.0001ZM23.9417 23.3334C24.2438 27.0901 29.915 27.1589 30.2113 23.3334C30.4598 18.8581 23.7317 18.9409 23.9417 23.3334ZM28.123 23.3334C28.3972 25.7519 24.8937 25.7099 25.0593 23.3334C25.428 21.3967 27.7357 21.7199 28.123 23.3334ZM27.3285 12.1614L15.509 23.6752C14.4065 24.7626 16.0772 26.4227 17.1587 25.3249L28.6725 13.5054C29.5277 12.6211 28.2058 11.3097 27.3285 12.1614Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Affordable Packages</h6>
                            <p>Our prices are competitive, ensuring the best value for your Sri Lankan adventure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card style-2">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <path d="M7.93843 51.3252C12.6831 53.68 5.85265 67.3267 12.9084 67.6647C75.927 66.7022 62.2114 79.3328 63.2231 16.2584C63.2406 13.9156 60.9842 12.6644 58.8459 12.9772C59.5798 8.84501 55.3722 8.22704 52.2834 8.6022C54.0936 -0.339209 39.5347 -0.33374 41.3459 8.6022H38.0647C39.8748 -0.339209 25.3159 -0.33374 27.1272 8.6022H23.8459C25.6561 -0.339209 11.0972 -0.33374 12.9084 8.6022C10.3972 8.47532 6.29125 8.33095 6.34593 11.8834C6.93656 13.7144 4.78296 51.5155 7.93843 51.3252ZM61.0662 16.7309C61.1406 17.6692 61.1358 18.6121 61.052 19.5495C60.1803 19.3308 59.4989 20.115 58.8459 20.5733V19.4292C61.3933 19.3702 61.8428 16.3995 58.8459 17.9308V17.5786C59.6577 17.5412 60.4361 17.2441 61.0662 16.7309ZM58.8459 21.5752C59.6078 21.5006 60.3403 21.2428 60.9809 20.8238C60.954 21.1259 60.972 21.4304 61.0345 21.7272H58.847L58.8459 21.5752ZM59.9397 15.1658C60.1215 15.15 60.3036 15.1937 60.4585 15.2904C60.6133 15.3871 60.7326 15.5314 60.7983 15.7017C60.0917 15.5158 59.4092 16.137 58.847 16.5002V15.1658H59.9397ZM58.8459 23.9158H61.0334C60.433 82.3045 70.2953 62.3064 12.9073 65.4794C10.6837 65.8064 12.2686 56.1431 11.8158 55.2113C14.0656 56.8202 18.527 63.5183 21.6595 63.2908C69.3623 63.2263 57.7478 69.9517 58.847 23.9158H58.8459ZM15.0959 50.1658H21.6584V56.7283H19.4709C19.8898 53.7194 18.6572 50.1199 15.0959 50.1658ZM17.2834 57.5869L12.0498 52.3522C16.7716 51.9158 17.6586 52.9319 17.2845 57.5869H17.2834ZM43.5334 6.4147C43.5334 3.7536 47.203 3.96907 48.9584 4.45142C44.0803 6.66626 45.7231 8.9172 49.9811 6.01329C50.0705 6.42552 50.1217 6.8451 50.1342 7.26673C47.5573 7.91204 46.5467 10.5064 50.1211 8.7411C50.1025 9.18517 50.0806 9.61282 50.073 9.99017C48.8447 10.3325 48.3087 11.8638 50.0456 11.3169C49.6847 13.1314 47.2566 13.0669 45.7209 12.9772C42.5797 13.0559 43.7358 8.25985 43.5334 6.4147ZM29.3147 6.4147C29.2862 3.72517 33.4578 3.77657 35.07 4.67782C30.882 5.99579 31.8719 8.96532 35.7481 5.95751C35.8546 6.42791 35.9122 6.90807 35.9198 7.39032C35.4014 7.63751 34.6216 7.73923 34.4564 8.39439C32.4297 9.36892 33.3309 10.9789 35.1094 9.48814C35.3709 9.53698 35.6414 9.4941 35.875 9.36673C35.8608 9.72767 35.8487 10.0645 35.8542 10.3588C34.172 10.7459 32.8836 13.3491 35.5458 11.9972C34.7758 13.1106 32.8136 13.0538 31.5022 12.9772C28.3609 13.0559 29.517 8.25985 29.3147 6.4147ZM15.0959 6.4147C15.0281 3.69673 19.7553 3.58298 21.1127 4.96439C16.462 6.24954 17.3939 9.83923 21.6081 6.3272C21.6742 6.77182 21.7064 7.22082 21.7044 7.67032C18.9197 8.59126 18.1136 11.6428 21.677 8.90079C21.6573 9.34157 21.6387 9.75501 21.6355 10.1225C20.673 10.4025 19.8909 12.3013 21.4616 11.7642C20.8152 13.1183 18.6802 13.0581 17.2834 12.9783C14.1422 13.0559 15.2983 8.25985 15.0959 6.41579V6.4147ZM8.53343 11.8834C8.46015 10.0897 11.9481 10.9986 12.9084 10.7897C12.8264 16.8097 23.9291 16.8097 23.8459 10.7897H27.1272C27.0452 16.8097 38.1478 16.8097 38.0647 10.7897H41.3459C41.2639 16.8097 52.3666 16.8097 52.2834 10.7897C58.4544 9.91798 56.315 13.1763 56.6584 17.3522C40.9609 17.1127 24.1434 18.4853 8.53343 17.3522V11.8834ZM56.6584 19.5397C54.04 69.1303 70.4309 60.5663 21.6595 61.1022C21.0795 61.1019 20.5232 60.8713 20.1131 60.4612C19.7029 60.051 19.4723 59.4948 19.472 58.9147C25.4439 60.2808 23.5955 53.6024 23.847 50.1647C23.9947 46.5739 17.0177 48.3961 15.097 47.9772C14.517 47.9778 13.961 48.2084 13.5509 48.6185C13.1408 49.0286 12.9101 49.5847 12.9095 50.1647C11.235 50.2555 8.49734 50.3419 8.53453 47.9772V19.5397H56.6584Z" />
                                <path d="M12.9069 23.8962C13.3236 26.2576 11.7562 30.7529 14.1789 31.9309C17.1211 31.4945 23.1848 33.3987 23.9986 29.5181C23.759 26.8274 24.0751 21.0076 20.1551 21.4768C18.4872 21.8924 10.1594 20.6565 12.9069 23.8962ZM16.0634 23.5867C22.4509 22.4295 22.8622 23.159 22.0178 29.6023C19.7881 29.9834 17.5192 30.0812 15.265 29.8932C15.0615 27.8293 14.8964 25.8026 14.5781 23.7496C15.0747 23.672 15.5887 23.6402 16.0634 23.5867ZM27.9175 23.3449C28.0389 25.4449 26.2167 31.3293 29.0878 31.5699C32.03 30.5374 35.8384 32.2087 38.3573 30.6588C38.4361 27.5928 37.8716 24.5443 36.7003 21.7098C34.1562 20.6215 31.1003 21.9012 28.39 21.3838C28.1594 21.3882 27.9367 21.4688 27.7569 21.6132C27.577 21.7576 27.4501 21.9576 27.3961 22.1819C27.3421 22.4061 27.364 22.6419 27.4583 22.8524C27.5527 23.0628 27.7141 23.2361 27.9175 23.3449ZM30.5239 23.089C32.2941 22.8799 34.0745 22.7685 35.857 22.7554C36.1447 24.8434 36.218 26.9871 36.4323 29.0926C34.249 28.8701 32.047 28.9061 29.872 29.1998C29.8522 27.2215 29.6663 25.2484 29.3164 23.3012C29.7136 23.203 30.117 23.1321 30.5239 23.089ZM42.2248 29.716C41.5095 33.9488 49.4873 31.8576 51.9876 31.652C53.6469 29.8517 52.8933 22.5345 50.9125 21.176C42.344 19.7421 40.8215 21.2318 42.2248 29.716ZM44.6037 30.6151L44.6694 30.7288C44.6256 30.8459 44.6037 30.8021 44.6037 30.6151ZM43.989 23.1087C46.103 22.755 48.2493 22.6332 50.3897 22.7456C50.755 25.0922 50.861 27.472 50.7058 29.8418C48.6495 29.9435 46.6009 29.9862 44.5425 30.0529C44.2253 27.7254 43.6598 25.4482 43.498 23.101C43.6606 23.1298 43.8256 23.1324 43.989 23.1087ZM23.1815 34.5931C21.1745 34.1599 14.0105 33.3615 13.8595 36.0554C13.7906 38.1871 12.4355 44.9432 15.1753 45.3676C17.5052 44.9456 19.8633 44.6981 22.23 44.6271C25.6315 43.3343 25.4784 36.7992 23.1815 34.5931ZM22.4455 40.2259C22.3518 40.871 22.1931 41.5049 21.9719 42.1181C21.9762 42.1104 21.8537 42.3149 21.9172 42.2198C20.0687 42.8192 17.7762 42.3357 15.8239 42.9931C15.7034 40.9104 15.4785 38.8352 15.1501 36.7751C19.0308 36.3726 23.7251 34.2092 22.4455 40.2259ZM51.8389 33.4687C50.1086 33.3079 43.1326 32.5346 44.199 35.4834C42.7181 37.2246 43.4859 40.4326 43.2628 42.6606C43.6117 45.7493 47.5437 43.9917 49.5759 44.0999C51.2253 44.1185 53.2247 43.704 53.3155 41.7079C53.5069 39.1671 54.4617 34.9376 51.8389 33.4687ZM51.303 35.3718H51.3139C51.5326 35.351 51.327 35.4517 51.303 35.3718ZM45.505 42.4265C45.5148 42.4637 45.5422 42.421 45.505 42.4265V42.4265ZM51.397 38.9079C51.3481 39.8327 51.21 40.7506 50.9847 41.6488C49.1641 41.8531 47.3384 42.0074 45.5094 42.1115C45.307 40.0345 45.7117 37.7223 44.875 35.7896C46.9608 35.8334 49.1712 35.1892 51.2865 35.3729C51.4508 36.5438 51.4885 37.7291 51.397 38.9079ZM38.9589 48.0779C29.9748 45.8937 27.8289 47.9302 28.8275 56.9526C29.0025 61.0607 34.3575 59.081 36.9748 59.0985C39.3494 59.3501 40.0373 57.1801 39.7792 55.2059C39.3723 52.9451 41.0512 49.6277 38.9589 48.0779ZM30.9034 57.1342C30.9303 57.1308 30.9575 57.136 30.9812 57.1489C31.005 57.1619 31.0241 57.182 31.0358 57.2063C30.9947 57.1771 30.9502 57.1529 30.9034 57.1342ZM37.7033 56.9777C37.6289 57.027 37.6726 57.0784 37.7033 56.9777V56.9777ZM38.365 50.5695C38.2221 52.7076 38.0032 54.8399 37.7087 56.9624C35.5497 57.0346 33.2758 57.6843 31.1473 57.2763C31.1692 54.6312 30.9395 51.9899 30.4615 49.3882C32.2586 49.6912 38.6515 47.9401 38.365 50.5695ZM49.3867 47.4534C48.0983 47.7804 42.9489 46.8431 44.4331 49.2176C43.6325 51.8579 43.2814 56.3707 45.4503 58.3012C48.5521 58.7564 51.7135 58.5879 54.7494 57.8057C56.1056 52.991 56.5781 45.5688 49.3867 47.4534ZM53.6764 48.6598C54.523 50.9184 53.8536 54.0749 53.5889 56.5599C51.2308 56.1585 48.8344 56.887 46.4697 56.5052C45.8524 54.1521 45.553 51.7268 45.5794 49.2942C48.2656 49.1137 50.9934 48.2343 53.6764 48.6598ZM30.2067 34.6806C30.1995 34.7111 30.1955 34.7422 30.1947 34.7735L30.2067 34.6806ZM30.1936 34.7954C30.1888 34.8196 30.1852 34.8441 30.1826 34.8687L30.1936 34.7954Z" />
                                <path d="M27.5413 36.9599C28.4054 37.2453 31.2404 34.64 29.7474 34.0067C28.5552 33.8547 26.6412 35.9153 27.5413 36.9599ZM27.4166 41.0396C29.3996 42.7611 28.0729 39.3049 28.0882 38.2833C27.0207 36.8002 26.7505 40.4183 27.4166 41.0396ZM30.6804 42.6802C28.7488 40.8427 28.9194 43.7193 30.3982 44.4072C32.0727 45.7963 34.398 43.8024 31.5455 43.1089L31.7501 43.1964C31.3756 43.0635 31.0176 42.8904 30.6804 42.6802Z" />
                                <path d="M33.795 44.7878C35.3361 45.6256 39.406 43.0564 36.4682 42.3969C35.6347 42.8037 32.1489 43.6284 33.795 44.7878ZM40.3269 39.7303C39.1478 39.5564 38.5441 41.2911 38.0596 42.1158C38.6021 44.113 41.8866 40.613 40.3269 39.7303ZM33.9066 34.1533C37.551 35.2656 37.6264 32.2775 34.0674 32.3989C31.1175 32.225 30.703 34.0461 33.9066 34.1533Z" />
                                <path d="M37.7899 34.3283C37.8528 34.9919 38.0872 35.6278 38.4702 36.1734L38.3357 35.9984C38.5369 36.2916 38.7437 36.6645 39.1538 36.6317C37.756 37.755 36.6644 39.8364 35.3662 37.4083C33.0988 34.5722 33.7146 38.758 34.8685 39.8856C38.736 45.0044 49.7151 26.8427 39.9041 35.9427C40.2399 34.8981 38.5151 32.7675 37.7899 34.3283Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Quick and Easy Booking</h6>
                            <p>Experience swift booking with our efficient system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card style-2 secondary">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <g clip-path="url(#clip0_1335_373)">
                                    <path d="M54.4993 61.413C54.3979 61.3243 54.2801 61.2565 54.1525 61.2134C54.0249 61.1703 53.8901 61.1528 53.7557 61.1618C53.6214 61.1708 53.4901 61.2061 53.3694 61.2659C53.2488 61.3256 53.141 61.4085 53.0524 61.5099L48.8249 66.3448C48.3771 66.8574 47.7556 67.1523 47.075 67.1753C46.3925 67.1996 45.7543 66.9461 45.2729 66.4653L42.0148 63.2085V61.0548C42.0148 60.4885 41.5558 60.0294 40.9894 60.0294C40.423 60.0294 39.964 60.4885 39.964 61.0548V68.9746C39.964 69.5409 40.423 70 40.9894 70C41.5558 70 42.0148 69.5409 42.0148 68.9746V66.1082L43.8233 67.9159C44.6625 68.7542 45.8108 69.2274 46.9942 69.2274C48.2802 69.2274 49.5231 68.6632 50.369 67.6945L54.5963 62.8599C54.685 62.7585 54.7528 62.6406 54.7959 62.5131C54.839 62.3855 54.8565 62.2507 54.8475 62.1163C54.8385 61.982 54.8031 61.8507 54.7433 61.73C54.6836 61.6093 54.6007 61.5016 54.4993 61.413ZM11.9144 60.0294C11.6424 60.0294 11.3816 60.1374 11.1893 60.3297C10.997 60.522 10.889 60.7828 10.889 61.0548V68.9746C10.889 69.5409 11.348 70 11.9144 70C12.4808 70 12.9398 69.5409 12.9398 68.9746V61.0548C12.9398 60.7828 12.8317 60.522 12.6394 60.3297C12.4471 60.1374 12.1863 60.0294 11.9144 60.0294ZM68.7023 16.2561L61.8293 10.6717C61.3539 10.2856 60.7153 10.2091 60.1622 10.4724C59.6091 10.7356 59.2656 11.2796 59.2656 11.8921V25.0719C59.2656 25.0738 59.266 25.0756 59.266 25.0775V41.7088L48.9415 53.4838L45.6708 47.3773C44.1097 44.4607 41.2284 42.3994 37.9627 41.8631C36.616 41.6421 33.4727 41.1281 32.34 40.9418C31.9316 40.876 31.5601 40.6666 31.2922 40.3513C31.0243 40.0361 30.8777 39.6356 30.8788 39.2219V38.0101C31.6873 37.5012 32.4364 36.9034 33.1121 36.228C35.516 33.8226 36.8399 30.6257 36.8399 27.2262V26.7805H37.235C39.2637 26.7898 40.9893 25.0645 40.9893 23.0262C40.9893 21.9447 40.5143 20.9396 39.744 20.2412C40.3401 19.391 40.5091 18.2737 40.1699 17.2927C40.024 16.8727 39.7935 16.487 39.4926 16.1595C39.1918 15.8319 38.8271 15.5696 38.4209 15.3885C38.3133 15.3407 38.2046 15.2947 38.0963 15.248V7.8668C38.0963 3.52912 34.5672 0 30.2295 0H17.9945C13.6569 0 10.1277 3.52912 10.1277 7.8668V15.248C10.0197 15.2947 9.91146 15.3407 9.80386 15.3884C9.39763 15.5695 9.03284 15.8319 8.73199 16.1594C8.43114 16.487 8.20062 16.8727 8.05468 17.2929C7.7111 18.2865 7.87982 19.3866 8.47864 20.2424C7.70905 20.9403 7.23478 21.9447 7.23478 23.0262C7.23478 25.059 8.94048 26.7921 10.9904 26.7805H11.3856V27.2262C11.3856 31.7607 13.7683 35.7484 17.3466 38.0043V39.4311C17.347 39.8132 17.2192 40.1845 16.9835 40.4853C16.7479 40.7862 16.4181 40.9993 16.047 41.0905L7.53214 43.1905C5.52758 43.6816 3.74605 44.8317 2.47334 46.4564C1.20063 48.0811 0.51051 50.0862 0.513683 52.15V68.9746C0.513683 69.5409 0.972648 70 1.53907 70C2.1055 70 2.56446 69.5409 2.56446 68.9746V52.15C2.56199 50.5448 3.09874 48.9854 4.08859 47.7218C5.07845 46.4582 6.46404 45.5636 8.0231 45.1817L14.6187 43.5552C16.6578 46.8254 20.2252 48.8255 24.1123 48.8255C28.1455 48.8255 31.7863 46.7106 33.7884 43.2573L37.6308 43.8869C40.2709 44.3204 42.6006 45.987 43.8628 48.3453L47.1724 54.5241C47.3243 54.8082 47.5428 55.0512 47.8092 55.2323C48.0756 55.4133 48.382 55.5271 48.702 55.5639C49.0224 55.6007 49.3469 55.5592 49.6478 55.4431C49.9487 55.327 50.2169 55.1397 50.4296 54.8972L57.4521 46.888L61.9127 51.3502C61.9169 51.3543 61.9215 51.3578 61.9257 51.362L56.2076 57.9016C56.0324 58.1069 55.9452 58.3729 55.9648 58.6421C55.9845 58.9112 56.1095 59.1618 56.3126 59.3394C56.5158 59.517 56.7807 59.6074 57.0501 59.591C57.3195 59.5745 57.5715 59.4526 57.7515 59.2516L67.176 48.4732C69.1049 46.2852 68.7667 42.786 66.5081 40.9805C64.9908 39.7675 63.0039 39.5363 61.3166 40.2164V25.5596L68.7023 19.5587C68.9483 19.3596 69.1466 19.1079 69.2826 18.8221C69.4186 18.5364 69.4889 18.2238 69.4883 17.9073C69.4883 17.2638 69.2017 16.6619 68.7023 16.2561ZM38.9385 23.0262C38.9385 23.9504 38.1599 24.7343 37.235 24.7297H36.8399V21.618C37.2258 21.6455 37.6136 21.6042 37.9851 21.496C38.558 21.7786 38.9385 22.3722 38.9385 23.0262ZM11.3856 24.7297H10.9904C10.0602 24.7345 9.28556 23.9516 9.28556 23.0262C9.28556 22.3728 9.66509 21.7803 10.2364 21.4981C10.6092 21.6065 10.9982 21.6479 11.3854 21.6204L11.3856 24.7297ZM11.6394 19.4756C11.052 19.736 10.3715 19.4812 10.0658 18.9115C9.7437 18.3113 10.0139 17.5391 10.6359 17.2629C16.2692 14.7617 22.4875 13.878 28.5945 14.7108C29.1546 14.7864 29.6724 14.3942 29.7487 13.8331C29.7668 13.6996 29.7585 13.5639 29.7242 13.4337C29.6899 13.3035 29.6303 13.1813 29.5488 13.0741C29.4673 12.9669 29.3655 12.8768 29.2491 12.809C29.1328 12.7411 29.0042 12.6969 28.8708 12.6788C23.2463 11.9122 17.5198 12.5152 12.1784 14.4367V7.8668C12.1784 4.65979 14.7874 2.05078 17.9944 2.05078H30.2295C33.4365 2.05078 36.0455 4.65979 36.0455 7.8668V14.4363C35.262 14.1544 34.4687 13.9003 33.6672 13.6746C33.4059 13.6027 33.1269 13.6371 32.8909 13.7703C32.655 13.9035 32.4814 14.1247 32.408 14.3855C32.3346 14.6463 32.3674 14.9255 32.4993 15.1622C32.6311 15.3989 32.8513 15.5738 33.1117 15.6487C34.6406 16.0794 36.1367 16.6188 37.5887 17.2628C38.2055 17.5366 38.4773 18.3095 38.161 18.9072C37.8607 19.4744 37.1868 19.7421 36.585 19.4755C28.9331 16.087 19.3932 16.0379 11.6394 19.4756ZM13.4363 27.2262V20.946C20.278 18.2097 27.9479 18.2098 34.7892 20.9464V27.2262C34.7892 30.0781 33.6785 32.7603 31.6618 34.7782C29.6614 36.7799 26.9666 37.9065 24.1128 37.9065C18.2257 37.9066 13.4363 33.1153 13.4363 27.2262ZM24.1123 46.7748C21.1644 46.7748 18.4417 45.3651 16.7339 43.0244C18.4057 42.5052 19.565 40.833 19.3973 39.0511C20.8968 39.6514 22.4975 39.959 24.1127 39.9574C25.7546 39.9574 27.3476 39.6458 28.828 39.0555C28.723 40.822 29.9402 42.4175 31.6016 42.8751C29.9062 45.3094 27.1453 46.7748 24.1123 46.7748ZM65.2272 42.5817C66.6013 43.6801 66.8041 45.7964 65.632 47.1233L63.2783 49.8151L58.8073 45.3426L60.8902 42.9671C61.4239 42.356 62.173 41.9747 62.9812 41.9029C63.7894 41.831 64.5941 42.0743 65.2272 42.5817ZM67.4091 17.967L61.3166 22.9172L61.3162 12.8974L67.4089 17.8478C67.44 17.8671 67.4408 17.9471 67.4091 17.967ZM29.7581 26.4495C30.03 26.4495 30.2909 26.3414 30.4832 26.1491C30.6755 25.9568 30.7835 25.696 30.7835 25.4241V23.1649C30.7835 22.5987 30.3245 22.1396 29.7581 22.1396C29.1917 22.1396 28.7327 22.5987 28.7327 23.1649V25.4241C28.7327 25.696 28.8407 25.9568 29.033 26.1491C29.2253 26.3414 29.4861 26.4495 29.7581 26.4495ZM18.4665 22.1397C18.1945 22.1397 17.9337 22.2477 17.7414 22.44C17.5491 22.6323 17.4411 22.8931 17.4411 23.1651V25.4242C17.4411 25.9905 17.9001 26.4496 18.4665 26.4496C19.0329 26.4496 19.4919 25.9905 19.4919 25.4242V23.1651C19.4919 22.8931 19.3839 22.6323 19.1916 22.44C18.9993 22.2477 18.7384 22.1397 18.4665 22.1397ZM27.2695 31.5488C27.1387 31.3104 26.9185 31.1337 26.6575 31.0576C26.3964 30.9815 26.1158 31.0123 25.8773 31.143C25.3245 31.4449 24.7038 31.6008 24.0739 31.596C23.4699 31.5889 22.8769 31.4333 22.3473 31.143C22.1091 31.0157 21.8303 30.9874 21.5714 31.0643C21.3126 31.1412 21.0945 31.3172 20.9645 31.554C20.8346 31.7907 20.8033 32.0692 20.8775 32.3289C20.9516 32.5886 21.1252 32.8085 21.3606 32.941C21.9348 33.2562 22.8679 33.6343 24.0524 33.6468C25.2491 33.6592 26.2722 33.2656 26.8638 32.9412C27.1022 32.8103 27.2789 32.5901 27.355 32.329C27.4311 32.0679 27.4004 31.7873 27.2695 31.5488Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Expertly Guided Tours</h6>
                            <p>Uncover Sri Lanka's treasures with our expertly guided tours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 pt-15">
                    <div class="feature-card style-2">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <g clip-path="url(#clip0_1335_400)">
                                    <path d="M67.276 47.5101C64.9528 45.2928 62.1063 49.3728 55.5442 51.8647C50.2253 53.8906 49.1313 53.9912 46.3561 54.4485C44.2405 54.7944 38.581 55.7242 35.9324 55.2744C38.5248 53.7263 40.8589 51.508 42.9053 49.2485C46.2761 45.5934 47.554 44.8193 47.7377 42.895C47.9248 41.0961 46.8307 39.4194 44.7961 38.9696C40.1832 37.8972 36.7983 42.7026 34.1432 44.6204C32.3508 45.9199 29.807 45.615 28.074 45.7696V45.7674C24.047 46.0096 21.5368 48.068 17.7444 48.8669C17.5984 48.2193 17.4546 47.5718 17.2795 46.9285C16.8298 45.2528 15.1833 44.0723 13.4287 44.1728C9.29249 44.3566 9.93249 44.7101 6.58332 44.8464C4.63197 44.9274 2.94549 44.9977 2.22333 45.8636C2.09343 46.0182 1.99823 46.1989 1.94414 46.3934C1.89005 46.5879 1.87835 46.7918 1.90982 46.9912C2.76928 53.1133 2.30441 57.4885 3.04387 61.949C3.07986 62.1602 3.198 62.3486 3.37249 62.473C3.54698 62.5974 3.76362 62.6477 3.97506 62.6128C4.18649 62.578 4.37553 62.4608 4.50085 62.287C4.62618 62.1132 4.67759 61.8968 4.64386 61.6852C3.99846 57.789 4.33035 52.629 3.52711 46.8593C4.2417 46.4118 7.66223 46.5426 9.11195 46.2626C10.3401 46.0247 11.8168 45.8669 13.5011 45.7923C14.4979 45.7674 15.4644 46.4193 15.7163 47.3512C17.4633 53.8106 17.6946 60.5079 16.3952 66.7706C13.5454 66.6138 10.7455 66.336 7.88169 66.2019C7.48277 66.1738 7.05466 66.5263 7.03304 66.9738C7.02306 67.1886 7.09877 67.3985 7.24351 67.5574C7.38826 67.7164 7.5902 67.8113 7.80493 67.8214L7.84818 67.8236L9.14979 69.056C10.2719 70.1198 11.2687 70.0008 17.766 69.9922C18.5281 69.9922 19.1357 69.469 19.1757 68.7511C19.2665 67.0917 19.3379 65.389 19.4362 63.7457C27.5378 67.8571 36.2567 69.4592 44.3096 68.3003C52.4772 67.1252 59.9312 63.1187 65.5452 56.8885C66.4274 55.9101 67.2793 54.8517 67.7431 53.5069C68.0371 52.655 68.2663 51.3404 67.9614 50.2863C68.2847 49.1209 67.9993 48.202 67.276 47.5101ZM26.0578 47.6982C29.2394 46.8982 31.7065 47.9707 34.8286 46.1026C37.2654 44.6647 38.9216 41.6777 42.1561 40.6431C42.2642 40.6431 44.7691 39.9231 45.7475 41.3404C45.7723 41.3761 45.8405 41.4572 45.8707 41.4896C46.6253 43.6366 45.8513 43.6626 41.7443 48.1166C41.6902 48.1653 41.6621 48.2031 41.6707 48.2031H41.6729C41.0491 48.6809 38.3075 52.2615 34.3346 54.349C34.2621 54.3879 34.2059 54.4442 34.1508 54.5004C33.4146 54.4409 32.9983 55.3036 33.4805 55.8441C35.1735 57.7458 41.1507 56.9469 46.6199 56.0474C47.9204 55.7296 48.9356 56.1144 56.1215 53.3815C61.1582 51.468 66.449 46.7501 66.4782 49.3988C66.4944 50.988 63.7398 53.3912 62.5961 54.5101C59.7442 57.2236 56.7204 59.2906 53.288 60.9976C41.9767 66.5349 31.0989 63.9836 18.8016 60.3349C18.928 57.0245 18.6814 53.7103 18.0665 50.455C20.8254 49.8755 23.7238 48.3469 26.0578 47.6982Z" />
                                    <path d="M12.4165 51.1956C14.4803 51.7026 15.4965 49.2173 14.0209 47.9935C13.9348 47.9206 13.8341 47.8668 13.7256 47.8359C13.6171 47.8049 13.5033 47.7975 13.3917 47.814C12.9679 47.6043 12.4857 47.5524 12.0652 47.6854C10.3993 48.2 10.4403 50.7124 12.4165 51.1956ZM29.7149 24.7179C30.0662 24.7179 30.4132 24.6336 30.7332 24.4887L33.9689 27.7341L33.9256 27.7384C33.7115 27.7559 33.513 27.8578 33.3739 28.0216C33.2348 28.1854 33.1665 28.3978 33.184 28.6119C33.2015 28.8261 33.3034 29.0246 33.4672 29.1637C33.631 29.3027 33.8434 29.371 34.0575 29.3535L36.091 29.186C36.3019 29.1688 36.4978 29.0699 36.6368 28.9103C36.7757 28.7508 36.8468 28.5432 36.8348 28.3319L36.7202 26.3471C36.7066 26.1328 36.6091 25.9326 36.4488 25.7897C36.2885 25.6468 36.0784 25.5729 35.864 25.5838C35.6493 25.5964 35.4484 25.6936 35.3053 25.8541C35.1622 26.0146 35.0887 26.2254 35.1008 26.44L35.1094 26.5806L31.8878 23.3514C32.0567 23.0059 32.143 22.6259 32.14 22.2413C32.137 21.8567 32.0447 21.4781 31.8705 21.1352L35.8208 17.052L35.8229 17.1395C35.828 17.3512 35.9157 17.5525 36.0672 17.7003C36.2187 17.8482 36.422 17.931 36.6337 17.9309H36.6543C36.7608 17.9282 36.8657 17.9046 36.963 17.8614C37.0604 17.8182 37.1483 17.7562 37.2217 17.679C37.2951 17.6018 37.3525 17.5109 37.3908 17.4114C37.429 17.312 37.4473 17.206 37.4445 17.0995L37.3927 15.0596C37.3873 14.8481 37.2995 14.6471 37.148 14.4995C36.9966 14.3518 36.7934 14.2692 36.5819 14.2693H34.5938C34.3787 14.2693 34.1725 14.3547 34.0204 14.5068C33.8684 14.6588 33.7829 14.8651 33.7829 15.0801C33.7829 15.2951 33.8684 15.5014 34.0204 15.6534C34.1725 15.8055 34.3787 15.8909 34.5938 15.8909H34.6878L30.7008 20.013C30.2017 19.8034 29.6454 19.7736 29.1267 19.9287C28.6121 20.0739 28.158 20.3812 27.832 20.805C27.5059 21.2288 27.3253 21.7465 27.317 22.2811C27.2976 23.5222 28.3257 24.7179 29.7149 24.7179Z" />
                                    <path d="M33.7466 5.703C32.2005 5.44255 30.6267 5.38947 29.0666 5.54516C24.8309 5.70516 21.0558 7.4511 17.8461 10.7408C16.411 12.2099 15.2614 13.9328 14.4558 15.8219C13.75 17.4938 13.3252 19.2709 13.1985 21.0813C12.9012 25.1862 14.1066 29.0726 16.6861 32.318C17.2143 32.9734 17.7922 33.5871 18.4147 34.1537C19.5974 35.9256 21.3899 37.3656 23.3412 38.292C33.0839 42.9169 45.0233 36.9158 47.086 25.7516C48.02 20.6975 46.6189 15.2867 43.4352 11.2327C40.9746 8.0965 37.6979 6.35921 33.7466 5.703ZM14.8115 23.0835H17.1099C17.3249 23.0835 17.5311 22.998 17.6832 22.846C17.8353 22.6939 17.9207 22.4877 17.9207 22.2727C17.9207 22.0576 17.8353 21.8514 17.6832 21.6993C17.5311 21.5473 17.3249 21.4618 17.1099 21.4618H14.8083C14.8137 21.3732 14.8083 21.2856 14.8158 21.1959C14.9315 19.5581 15.3131 17.9624 15.9477 16.4554C16.6092 14.9177 17.5247 13.5023 18.6558 12.2684L19.7001 13.3116C19.7744 13.3913 19.8639 13.4552 19.9633 13.4995C20.0628 13.5438 20.1702 13.5676 20.279 13.5695C20.3879 13.5715 20.496 13.5514 20.597 13.5107C20.6979 13.4699 20.7897 13.4092 20.8667 13.3322C20.9436 13.2552 21.0043 13.1635 21.0451 13.0625C21.0859 12.9616 21.1059 12.8534 21.104 12.7446C21.1021 12.6357 21.0783 12.5283 21.0339 12.4289C20.9896 12.3294 20.9257 12.2399 20.8461 12.1657L19.8028 11.1214C22.4807 8.68136 25.5444 7.35488 28.9325 7.18191V9.11703C28.9325 9.33207 29.018 9.53831 29.17 9.69036C29.3221 9.84242 29.5283 9.92784 29.7433 9.92784C29.9584 9.92784 30.1646 9.84242 30.3167 9.69036C30.4687 9.53831 30.5541 9.33207 30.5541 9.11703V7.22083C31.0482 7.26948 31.5174 7.33002 31.9563 7.42083C34.8374 7.97434 37.5433 9.38082 39.6795 11.3495L39.1465 11.8813C39.0691 11.9562 39.0074 12.0457 38.965 12.1446C38.9225 12.2436 38.9002 12.35 38.8993 12.4576C38.8984 12.5653 38.919 12.672 38.9598 12.7717C39.0006 12.8713 39.0609 12.9618 39.137 13.0379C39.2132 13.114 39.3038 13.1741 39.4034 13.2149C39.5031 13.2556 39.6099 13.276 39.7175 13.2751C39.8252 13.2741 39.9316 13.2517 40.0305 13.2091C40.1294 13.1666 40.2188 13.1048 40.2936 13.0273L40.8092 12.5127C41.5958 13.3997 42.2704 14.38 42.8179 15.4316C43.7811 17.2802 44.313 19.3559 44.4341 21.4618H42.9044C42.6893 21.4618 42.4831 21.5473 42.331 21.6993C42.179 21.8514 42.0936 22.0576 42.0936 22.2727C42.0936 22.4877 42.179 22.6939 42.331 22.846C42.4831 22.998 42.6893 23.0835 42.9044 23.0835H44.4525C44.3368 25.7397 43.5638 28.3634 42.1498 30.5645C41.6806 31.2867 41.1249 31.9645 40.5206 32.6045L39.7292 31.8132C39.655 31.7335 39.5655 31.6696 39.466 31.6253C39.3666 31.581 39.2592 31.5571 39.1503 31.5552C39.0415 31.5533 38.9333 31.5733 38.8324 31.6141C38.7314 31.6549 38.6397 31.7156 38.5627 31.7926C38.4857 31.8696 38.425 31.9613 38.3842 32.0622C38.3435 32.1632 38.3234 32.2713 38.3254 32.3802C38.3273 32.4891 38.3511 32.5964 38.3954 32.6959C38.4397 32.7954 38.5036 32.8849 38.5833 32.9591L39.3465 33.7234C36.6828 36.0023 33.6763 37.1007 30.5541 37.2088V35.9072C30.5541 34.8337 28.9325 34.8337 28.9325 35.9072V37.1796C25.4342 36.9072 22.1974 35.3634 19.7434 33.1818L22.165 31.4251C22.3392 31.2988 22.456 31.1084 22.4899 30.896C22.5238 30.6835 22.4718 30.4663 22.3455 30.2921C22.2192 30.1179 22.0289 30.001 21.8164 29.9672C21.604 29.9333 21.3867 29.9852 21.2126 30.1115L18.6526 31.9678C18.6277 31.9861 18.6136 32.0142 18.5909 32.0348C18.3747 31.7969 18.1553 31.5602 17.9564 31.3105C16.0342 28.891 14.9737 26.0759 14.8115 23.0835Z" />
                                    <path d="M10.0051 16.051C10.2091 16.1187 10.4317 16.1027 10.6239 16.0064C10.816 15.9101 10.9621 15.7414 11.03 15.5375C13.5867 7.85317 21.3143 2.00887 29.405 1.64238C37.2688 1.29644 45.2936 6.14831 48.6969 13.2683L48.0547 13.6704C47.2266 14.1894 47.3304 15.4142 48.2223 15.7958C49.1444 16.1893 50.4677 17.0164 51.0785 17.3439C51.1792 17.3976 51.2902 17.4294 51.4041 17.4372C51.518 17.4451 51.6323 17.4287 51.7394 17.3893C51.8466 17.3499 51.9442 17.2884 52.0259 17.2086C52.1076 17.1289 52.1716 17.0328 52.2136 16.9266C52.6579 15.8023 52.5055 14.3504 52.6352 13.0942C52.739 12.0942 51.6536 11.4175 50.805 11.9483L50.0796 12.4023C46.325 4.6921 37.9574 -0.394368 29.3305 0.0240085C20.4548 0.425088 12.2959 6.59371 9.49054 15.0261C9.42279 15.2301 9.43883 15.4527 9.53512 15.6448C9.63142 15.837 9.80008 15.9831 10.004 16.051H10.0051ZM49.2374 20.3472C49.0071 20.8542 48.9996 21.4131 49.2158 21.8823C49.6633 22.8542 51.1401 22.1796 50.6882 21.2034C50.6741 21.1709 50.6752 21.0996 50.7141 21.0153C50.9498 20.4899 51.952 20.8185 52.0363 22.5363C52.1304 24.4639 51.1347 26.4034 49.5606 27.3666C49.3876 27.4713 49.26 27.637 49.2028 27.831C49.1456 28.025 49.163 28.2334 49.2515 28.4152C49.3401 28.5971 49.4934 28.7393 49.6814 28.8139C49.8694 28.8885 50.0785 28.8901 50.2677 28.8185C51.6542 28.3013 53.1446 28.1245 54.6136 28.3028C54.8262 28.3262 55.0396 28.2658 55.2083 28.1344C55.3771 28.003 55.488 27.8109 55.5174 27.599C55.544 27.3857 55.4848 27.1706 55.3528 27.0009C55.2208 26.8312 55.0269 26.7209 54.8136 26.6942C54.0495 26.5994 53.2775 26.5874 52.5109 26.6585C53.3001 25.4271 53.7282 23.9374 53.6568 22.4574C53.4774 18.8142 50.1498 18.3212 49.2374 20.3472ZM56.8957 25.0985C57.6438 24.7807 58.5909 24.4315 59.5768 24.2834C59.5076 25.1947 59.4038 26.1039 59.2471 27.0034C59.0601 28.0606 60.659 28.3396 60.8438 27.2844C61.2438 24.9947 61.3768 22.6553 61.2363 20.331C61.2151 20.1223 61.114 19.9298 60.9542 19.794C60.7943 19.6582 60.5881 19.5895 60.3787 19.6024C60.1694 19.6153 59.9731 19.7087 59.8311 19.863C59.689 20.0174 59.6122 20.2207 59.6168 20.4304C59.6611 21.1645 59.6665 21.8996 59.6536 22.6336C58.8566 22.7283 58.0734 22.9151 57.3195 23.1904L57.0903 19.4737C57.0211 18.3818 55.406 18.5158 55.4709 19.5731L55.7682 24.4023C55.7766 24.5317 55.8158 24.6573 55.8827 24.7684C55.9495 24.8796 56.042 24.9732 56.1523 25.0413C56.2627 25.1095 56.3878 25.1502 56.5171 25.1602C56.6464 25.1701 56.7762 25.149 56.8957 25.0985Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Best Support 24/7</h6>
                            <p>Rely on our support round the clock.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card style-2 secondary">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <path d="M12.2181 42.5833C12.0897 42.5833 11.9648 42.541 11.863 42.4628C11.7611 42.3846 11.6879 42.275 11.6546 42.151C11.6214 42.027 11.63 41.8954 11.6792 41.7768C11.7283 41.6582 11.8152 41.5591 11.9264 41.4949L32.1156 29.8375C32.2464 29.763 32.4009 29.7419 32.5469 29.7787C32.6929 29.8155 32.819 29.9073 32.8989 30.0349C32.9788 30.1625 33.0062 30.3161 32.9754 30.4635C32.9447 30.6109 32.8581 30.7406 32.7339 30.8257L28.4172 33.7423C28.5124 33.7368 28.6073 33.7566 28.6923 33.7996C28.7774 33.8427 28.8495 33.9074 28.9014 33.9873C28.9856 34.1056 29.0227 34.2509 29.0054 34.3951C28.9882 34.5392 28.9178 34.6717 28.8081 34.7667L22.8242 39.9408C22.8567 39.9763 22.8849 40.0155 22.9082 40.0575C22.9856 40.1915 23.0066 40.3507 22.9665 40.5001C22.9265 40.6496 22.8287 40.777 22.6947 40.8543L19.8761 42.4667C19.7506 42.5376 19.6033 42.5594 19.4626 42.5281C19.3219 42.4968 19.1978 42.4146 19.1141 42.2972C19.0305 42.1798 18.9933 42.0356 19.0097 41.8924C19.0261 41.7492 19.0949 41.6171 19.2029 41.5217L23.4029 37.8933L15.4462 42.4865C15.3155 42.5589 15.162 42.5784 15.0174 42.5409C14.8727 42.5035 14.748 42.412 14.6688 42.2852C14.5897 42.1585 14.5622 42.0062 14.592 41.8598C14.6218 41.7134 14.7067 41.584 14.8291 41.4983L18.2707 39.1755L12.5144 42.4993C12.4251 42.5537 12.3226 42.5828 12.2181 42.5833ZM43.0332 30.8128C42.9147 30.8127 42.7989 30.7764 42.7015 30.7089C42.6041 30.6413 42.5295 30.5456 42.4878 30.4346C42.4461 30.3236 42.4393 30.2025 42.4681 30.0875C42.497 29.9725 42.5602 29.869 42.6494 29.7908L42.7929 29.6648L42.4289 29.8737C42.303 29.9453 42.1549 29.9674 42.0136 29.9359C41.8722 29.9043 41.7477 29.8213 41.6641 29.703C41.5806 29.5847 41.5441 29.4395 41.5616 29.2957C41.5792 29.152 41.6496 29.0199 41.7592 28.9252L42.2469 28.5098C42.1265 28.5684 41.9897 28.5837 41.8594 28.5533C41.729 28.5229 41.6131 28.4486 41.5311 28.3429C41.449 28.2372 41.4058 28.1064 41.4087 27.9726C41.4116 27.8388 41.4604 27.7101 41.5469 27.608L43.3984 25.4042L38.0784 28.476C37.9503 28.5496 37.799 28.5718 37.6551 28.5381C37.5112 28.5044 37.3855 28.4174 37.3033 28.2946C37.2211 28.1718 37.1885 28.0224 37.2122 27.8766C37.2359 27.7307 37.3141 27.5993 37.4309 27.5088L37.7086 27.2953L35.6517 28.4795C35.5853 28.5217 35.5111 28.5501 35.4335 28.5628C35.3558 28.5756 35.2764 28.5725 35.2 28.5538C35.1236 28.5351 35.0518 28.5011 34.9888 28.4539C34.9259 28.4067 34.8731 28.3473 34.8338 28.2792C34.7944 28.211 34.7692 28.1357 34.7597 28.0576C34.7502 27.9795 34.7566 27.9003 34.7786 27.8247C34.8005 27.7491 34.8375 27.6788 34.8873 27.6179C34.9371 27.557 34.9987 27.5068 35.0684 27.4703L44.7879 21.8575C44.916 21.7854 45.0666 21.7643 45.2096 21.7985C45.3525 21.8327 45.4773 21.9195 45.559 22.0418C45.6407 22.164 45.6732 22.3125 45.6501 22.4577C45.6269 22.6028 45.5499 22.7339 45.4342 22.8247L45.1577 23.0382L45.6594 22.7488C45.778 22.6812 45.9166 22.6573 46.051 22.6813C46.1854 22.7053 46.3071 22.7757 46.3949 22.8802C46.4828 22.9847 46.5312 23.1167 46.5317 23.2532C46.5323 23.3898 46.4849 23.5221 46.3979 23.6273L44.5546 25.8335L47.1737 24.3168C47.2997 24.2453 47.4477 24.2231 47.5891 24.2547C47.7304 24.2862 47.855 24.3692 47.9385 24.4875C48.0221 24.6059 48.0586 24.751 48.041 24.8948C48.0234 25.0386 47.953 25.1706 47.8434 25.2653L47.3674 25.6713C47.4936 25.605 47.6398 25.5872 47.7782 25.6213C47.9167 25.6554 48.0378 25.739 48.1188 25.8563C48.1998 25.9737 48.235 26.1166 48.2178 26.2581C48.2006 26.3997 48.1322 26.53 48.0254 26.6245L45.4366 28.8937C45.4984 29.0254 45.5088 29.1756 45.4656 29.3146C45.4225 29.4536 45.3289 29.5715 45.2032 29.645L43.3284 30.7288C43.2395 30.7833 43.1375 30.8123 43.0332 30.8128ZM42.1746 22.4105C42.0462 22.4105 41.9213 22.3681 41.8195 22.29C41.7176 22.2118 41.6444 22.1022 41.6111 21.9782C41.5779 21.8541 41.5865 21.7226 41.6357 21.604C41.6848 21.4853 41.7717 21.3862 41.8829 21.322L43.2082 20.5578C43.2746 20.5156 43.3489 20.4873 43.4265 20.4745C43.5041 20.4618 43.5836 20.4648 43.66 20.4835C43.7364 20.5023 43.8082 20.5362 43.8712 20.5834C43.9341 20.6306 43.9868 20.6901 44.0262 20.7582C44.0656 20.8263 44.0908 20.9017 44.1003 20.9798C44.1097 21.0579 44.1033 21.1371 44.0814 21.2127C44.0595 21.2882 44.0225 21.3586 43.9727 21.4195C43.9229 21.4804 43.8613 21.5305 43.7916 21.567L42.4662 22.3323C42.3777 22.3839 42.277 22.4108 42.1746 22.4105Z" />
                                <path d="M21.1012 35.7305C20.9775 35.7306 20.857 35.6914 20.757 35.6186C20.6571 35.5458 20.5829 35.4431 20.5451 35.3253C20.5073 35.2076 20.5079 35.0809 20.5469 34.9635C20.5858 34.8461 20.661 34.7441 20.7617 34.6723L27.4455 29.9006L26.7455 30.3055C26.62 30.3774 26.4722 30.4002 26.3308 30.3693C26.1894 30.3384 26.0646 30.256 25.9806 30.1382C25.8965 30.0204 25.8592 29.8756 25.876 29.7319C25.8927 29.5881 25.9623 29.4558 26.0712 29.3605L31.1019 24.9773L31.089 24.9563C31.0117 24.8223 30.9907 24.6631 31.0307 24.5137C31.0708 24.3642 31.1685 24.2368 31.3025 24.1595L33.546 22.8645C33.6714 22.7938 33.8185 22.772 33.9589 22.8032C34.0994 22.8344 34.2234 22.9164 34.3071 23.0335C34.3907 23.1506 34.4282 23.2945 34.4121 23.4375C34.3961 23.5805 34.3278 23.7126 34.2204 23.8083L31.3819 26.2816L37.3319 22.8481C37.4617 22.7719 37.6159 22.7489 37.7623 22.7838C37.9088 22.8187 38.036 22.9088 38.1175 23.0354C38.199 23.1619 38.2285 23.3151 38.1997 23.4628C38.1709 23.6106 38.0861 23.7414 37.963 23.8281L31.2815 28.5986L41.2705 22.8306C41.4044 22.7545 41.563 22.7344 41.7117 22.7748C41.8603 22.8151 41.987 22.9127 42.064 23.0461C42.141 23.1795 42.1622 23.3379 42.1228 23.4868C42.0834 23.6358 41.9867 23.7631 41.8539 23.841L21.3929 35.6523C21.3042 35.7035 21.2036 35.7305 21.1012 35.7305ZM10.1637 44.8538C10.0843 44.8542 10.0056 44.8382 9.93272 44.8066C9.85983 44.7751 9.79427 44.7288 9.74019 44.6706C9.65015 44.5753 9.59485 44.4524 9.58321 44.3218C9.57157 44.1912 9.60426 44.0605 9.67602 43.9508L9.79269 43.777L9.39719 44.0103C9.26877 44.0834 9.1174 44.105 8.97365 44.0708C8.8299 44.0366 8.70448 43.9492 8.62272 43.8261C8.54097 43.703 8.50896 43.5535 8.53318 43.4077C8.5574 43.262 8.63603 43.1308 8.75319 43.0408L9.37269 42.5741L8.48836 43.084C8.36406 43.1583 8.21655 43.1838 8.07451 43.1554C7.93247 43.127 7.80607 43.0468 7.71991 42.9304C7.63374 42.814 7.59398 42.6696 7.60836 42.5255C7.62274 42.3814 7.69023 42.2477 7.79769 42.1506L9.68186 40.3668L7.23186 41.7831C7.11023 41.8526 6.9677 41.8759 6.83028 41.8489C6.69286 41.8219 6.56973 41.7464 6.48339 41.6362C6.39705 41.5259 6.35326 41.3883 6.36002 41.2484C6.36677 41.1085 6.42363 40.9757 6.52019 40.8743L8.34836 38.9761L6.19702 40.2198C6.07404 40.2907 5.92941 40.3144 5.79024 40.2863C5.65108 40.2582 5.52693 40.1803 5.44106 40.0673C5.35519 39.9542 5.3135 39.8137 5.3238 39.6721C5.33411 39.5305 5.39569 39.3976 5.49702 39.2981L8.30752 36.5553C8.28662 36.5312 8.26825 36.505 8.25269 36.4771C8.17534 36.3432 8.15438 36.1839 8.19442 36.0345C8.23445 35.8851 8.33221 35.7577 8.46619 35.6803L10.3387 34.5988C10.4617 34.5279 10.6063 34.5042 10.7455 34.5323C10.8846 34.5604 11.0088 34.6382 11.0947 34.7513C11.1805 34.8644 11.2222 35.0049 11.2119 35.1464C11.2016 35.288 11.14 35.421 11.0387 35.5205L9.63869 36.882L11.3362 35.902C11.458 35.8317 11.601 35.8077 11.739 35.8345C11.877 35.8613 12.0007 35.937 12.0874 36.0478C12.174 36.1585 12.2177 36.2968 12.2104 36.4373C12.2032 36.5777 12.1454 36.7107 12.0479 36.812L10.2232 38.7113L13.4292 36.8668C13.5535 36.7924 13.701 36.7669 13.843 36.7953C13.9851 36.8237 14.1115 36.9039 14.1976 37.0204C14.2838 37.1368 14.3236 37.2811 14.3092 37.4252C14.2948 37.5694 14.2273 37.703 14.1199 37.8001L12.2357 39.5746L16.9304 36.8656C17.0587 36.794 17.2094 36.7735 17.3522 36.8081C17.4951 36.8428 17.6196 36.9301 17.7008 37.0527C17.782 37.1752 17.814 37.3238 17.7904 37.4689C17.7667 37.614 17.6891 37.7448 17.5732 37.8351L12.1937 41.9033C12.2143 41.9821 12.2182 42.0643 12.2052 42.1447C12.1921 42.225 12.1624 42.3018 12.1179 42.37L11.7177 42.9766C11.8342 43.0253 11.9312 43.1115 11.993 43.2216C12.0705 43.3555 12.0916 43.5146 12.0518 43.664C12.012 43.8134 11.9145 43.9409 11.7807 44.0185L10.4554 44.7826C10.3662 44.832 10.2655 44.8565 10.1637 44.8538Z" />
                                <path d="M42.1771 36.4094C42.0487 36.4094 41.9238 36.367 41.822 36.2888C41.7201 36.2107 41.6469 36.1011 41.6136 35.977C41.5804 35.853 41.589 35.7215 41.6381 35.6028C41.6873 35.4842 41.7742 35.3851 41.8854 35.3209L43.2061 34.5591C43.2725 34.5169 43.3467 34.4885 43.4243 34.4758C43.502 34.463 43.5814 34.4661 43.6578 34.4848C43.7342 34.5035 43.806 34.5375 43.869 34.5847C43.9319 34.6319 43.9847 34.6913 44.024 34.7594C44.0634 34.8275 44.0886 34.9029 44.0981 34.981C44.1076 35.0591 44.1012 35.1383 44.0792 35.2139C44.0573 35.2894 44.0203 35.3598 43.9705 35.4207C43.9207 35.4816 43.8591 35.5318 43.7894 35.5682L42.4687 36.3312C42.3802 36.3827 42.2795 36.4097 42.1771 36.4094Z" />
                                <path d="M42.6185 44.6833C42.5041 44.6833 42.3921 44.6496 42.2967 44.5864C42.2012 44.5233 42.1264 44.4334 42.0816 44.3281C42.0369 44.2228 42.0241 44.1066 42.0449 43.994C42.0656 43.8815 42.1191 43.7775 42.1985 43.6951L44.267 41.5473L42.2988 42.6836C42.177 42.7539 42.0338 42.7778 41.8956 42.7509C41.7575 42.724 41.6338 42.648 41.5473 42.5371C41.4607 42.4261 41.4172 42.2876 41.4248 42.1471C41.4323 42.0065 41.4904 41.8735 41.5883 41.7724L43.014 40.3106L39.2655 42.4666C39.1399 42.5377 38.9923 42.5597 38.8514 42.5283C38.7105 42.4969 38.5863 42.4144 38.5027 42.2967C38.4191 42.179 38.3821 42.0345 38.3989 41.8911C38.4157 41.7477 38.485 41.6156 38.5935 41.5204L40.1802 40.1531L36.1668 42.4666C36.0479 42.5355 35.9084 42.5602 35.773 42.5363C35.6377 42.5124 35.5151 42.4414 35.4269 42.336C35.3387 42.2305 35.2906 42.0973 35.2911 41.9598C35.2916 41.8223 35.3406 41.6894 35.4295 41.5846L37.1795 39.5243L32.85 42.0233C32.7295 42.0918 32.5885 42.1151 32.4522 42.0891C32.316 42.0631 32.1936 41.9894 32.1068 41.8813C32.02 41.7731 31.9745 41.6376 31.9786 41.499C31.9827 41.3604 32.036 41.2278 32.129 41.1249L33.3773 39.7658L31.541 40.8333C31.4242 40.9001 31.2879 40.9245 31.1551 40.9022C31.0224 40.88 30.9014 40.8126 30.8127 40.7114C30.724 40.6102 30.673 40.4814 30.6684 40.3469C30.6638 40.2124 30.7058 40.0805 30.7873 39.9734L31.8257 38.6189L30.2402 39.5348C30.1214 39.603 29.9823 39.6272 29.8474 39.6032C29.7125 39.5792 29.5904 39.5084 29.5024 39.4033C29.4144 39.2983 29.3663 39.1656 29.3664 39.0285C29.3664 38.8915 29.4148 38.7589 29.5028 38.6539L30.3288 37.6739L29.0922 38.3879C28.9725 38.4558 28.8326 38.4792 28.6973 38.454C28.562 38.4287 28.4399 38.3564 28.3528 38.2498C28.2657 38.1433 28.219 38.0094 28.2211 37.8717C28.2232 37.7341 28.2739 37.6016 28.3642 37.4978L29.042 36.7301L28.0212 37.3134C27.8988 37.3807 27.7563 37.4018 27.6197 37.3729C27.4831 37.3441 27.3613 37.2671 27.2766 37.1561C27.1919 37.0451 27.1498 36.9074 27.1579 36.768C27.1661 36.6286 27.224 36.4968 27.3212 36.3964L27.4448 36.2739L27.152 36.4419C27.0337 36.5104 26.8952 36.5352 26.7605 36.512C26.6258 36.4888 26.5035 36.419 26.415 36.3148C26.3265 36.2106 26.2774 36.0787 26.2763 35.942C26.2752 35.8053 26.3221 35.6726 26.4088 35.5669L27.3118 34.4656L25.955 35.2484C25.8364 35.3168 25.6975 35.3412 25.5627 35.3175C25.4279 35.2938 25.3057 35.2234 25.2176 35.1187C25.1294 35.014 25.0809 34.8816 25.0805 34.7447C25.0801 34.6078 25.1278 34.4752 25.2153 34.3699L26.0728 33.3444L24.7895 34.0841C24.6767 34.1505 24.5446 34.1765 24.4151 34.1578C24.2855 34.1391 24.1662 34.0769 24.0767 33.9814C23.9863 33.887 23.9303 33.7649 23.9176 33.6348C23.9049 33.5047 23.9363 33.3741 24.0067 33.2639L25.2538 31.3238L23.2075 32.5044C23.0874 32.573 22.9469 32.5967 22.811 32.5713C22.675 32.5459 22.5525 32.473 22.4654 32.3656C22.3782 32.2582 22.332 32.1234 22.335 31.9852C22.338 31.8469 22.3901 31.7142 22.4818 31.6108L23.12 30.8968L22.154 31.4544C22.0406 31.5196 21.9085 31.5448 21.7791 31.5259C21.6496 31.507 21.5303 31.4451 21.4402 31.3502C21.3502 31.2553 21.2946 31.1329 21.2825 31.0026C21.2704 30.8723 21.3025 30.7418 21.3735 30.6319L22.6113 28.7303L20.5918 29.8969C20.476 29.964 20.3406 29.9892 20.2083 29.9682C20.0761 29.9473 19.9551 29.8815 19.8657 29.7819C19.7762 29.6823 19.7237 29.555 19.717 29.4213C19.7103 29.2876 19.7498 29.1556 19.8288 29.0476L20.95 27.5111L19.2093 28.5156C19.0952 28.5815 18.962 28.6069 18.8316 28.5875C18.7012 28.568 18.5812 28.505 18.4912 28.4087C18.4012 28.3123 18.3465 28.1883 18.3361 28.0569C18.3256 27.9254 18.3599 27.7943 18.4335 27.6849L19.6445 25.8848L15.1318 28.4888C15.006 28.5612 14.8577 28.5842 14.7159 28.5531C14.5741 28.5221 14.4489 28.4392 14.3649 28.3208C14.2809 28.2024 14.2441 28.0569 14.2616 27.9127C14.2792 27.7686 14.3499 27.6362 14.4598 27.5414L15.0432 27.0433L12.5162 28.5016C12.3823 28.5777 12.2237 28.5978 12.075 28.5574C11.9264 28.5171 11.7997 28.4196 11.7227 28.2862C11.6457 28.1528 11.6245 27.9943 11.6639 27.8454C11.7033 27.6965 11.8 27.5692 11.9328 27.4913L19.8463 22.9226C19.9722 22.8501 20.1205 22.8272 20.2623 22.8582C20.4041 22.8893 20.5293 22.9721 20.6133 23.0906C20.6973 23.209 20.7341 23.3545 20.7166 23.4986C20.699 23.6427 20.6283 23.7751 20.5183 23.8699L19.935 24.3693L21.2382 23.6168C21.3523 23.5508 21.4855 23.5255 21.6159 23.5449C21.7463 23.5643 21.8663 23.6273 21.9563 23.7237C22.0463 23.82 22.101 23.9441 22.1115 24.0755C22.122 24.2069 22.0876 24.338 22.014 24.4474L20.803 26.2499L22.7478 25.1276C22.8637 25.0605 22.9991 25.0353 23.1313 25.0563C23.2636 25.0772 23.3846 25.143 23.474 25.2426C23.5635 25.3422 23.616 25.4695 23.6227 25.6032C23.6294 25.7369 23.5899 25.8689 23.5108 25.9769L22.3897 27.5146L24.1327 26.5089C24.2455 26.4458 24.3762 26.4219 24.5041 26.4411C24.632 26.4603 24.7499 26.5214 24.8393 26.6149C24.9286 26.7084 24.9844 26.829 24.9978 26.9576C25.0111 27.0863 24.9814 27.2157 24.9132 27.3256L23.6753 29.2273L25.6937 28.0606C25.8138 27.9912 25.9547 27.9669 26.0911 27.9921C26.2274 28.0172 26.3504 28.0901 26.4379 28.1977C26.5254 28.3053 26.5717 28.4405 26.5686 28.5792C26.5654 28.7178 26.5129 28.8508 26.4205 28.9543L25.7823 29.6671L26.746 29.1106C26.8588 29.0442 26.9909 29.0182 27.1204 29.0369C27.25 29.0555 27.3693 29.1177 27.4588 29.2133C27.5492 29.3077 27.6053 29.4298 27.618 29.5599C27.6306 29.69 27.5993 29.8206 27.5288 29.9308L26.2817 31.8721L28.328 30.6914C28.4466 30.6231 28.5855 30.5986 28.7203 30.6224C28.8551 30.6461 28.9773 30.7164 29.0655 30.8212C29.1536 30.9259 29.2022 31.0582 29.2026 31.1951C29.203 31.332 29.1552 31.4647 29.0677 31.5699L28.2125 32.5943L29.4958 31.8546C29.6141 31.7861 29.7527 31.7613 29.8874 31.7845C30.0221 31.8078 30.1444 31.8776 30.2328 31.9817C30.3213 32.0859 30.3704 32.2179 30.3715 32.3545C30.3727 32.4912 30.3258 32.624 30.239 32.7296L29.3348 33.8333L30.6917 33.0504C30.8141 32.9832 30.9565 32.9621 31.0932 32.9909C31.2298 33.0198 31.3515 33.0967 31.4363 33.2077C31.521 33.3187 31.5631 33.4564 31.5549 33.5958C31.5467 33.7353 31.4888 33.8671 31.3917 33.9674L31.2692 34.0911L31.562 33.9219C31.6819 33.8533 31.8222 33.8294 31.958 33.8545C32.0938 33.8797 32.2163 33.9522 32.3037 34.0591C32.391 34.1661 32.4376 34.3006 32.4351 34.4387C32.4326 34.5768 32.3812 34.7095 32.29 34.8133L31.6168 35.5833L32.6365 34.9999C32.7553 34.9324 32.8941 34.9087 33.0286 34.933C33.163 34.9574 33.2847 35.0281 33.3724 35.133C33.46 35.2378 33.508 35.3701 33.5081 35.5068C33.5082 35.6435 33.4602 35.7758 33.3727 35.8808L32.5467 36.8608L33.7845 36.1468C33.901 36.0788 34.0374 36.0533 34.1705 36.0746C34.3037 36.0958 34.4254 36.1626 34.5148 36.2634C34.6042 36.3649 34.6554 36.4943 34.6599 36.6295C34.6644 36.7646 34.6217 36.8971 34.5393 37.0043L33.4987 38.3599L36.0945 36.8619C36.2151 36.7934 36.3561 36.77 36.4923 36.7961C36.6285 36.8221 36.751 36.8958 36.8378 37.0039C36.9246 37.112 36.97 37.2476 36.9659 37.3862C36.9618 37.5248 36.9085 37.6574 36.8155 37.7603L35.5672 39.1194L39.507 36.8444C39.626 36.7755 39.7654 36.7508 39.9008 36.7747C40.0362 36.7986 40.1588 36.8696 40.247 36.975C40.3351 37.0805 40.3832 37.2137 40.3827 37.3512C40.3823 37.4887 40.3333 37.6216 40.2443 37.7264L38.5002 39.7833L44.9752 36.0499C45.1008 35.9788 45.2484 35.9569 45.3893 35.9882C45.5302 36.0196 45.6544 36.1022 45.738 36.2198C45.8216 36.3375 45.8586 36.4821 45.8418 36.6254C45.825 36.7688 45.7557 36.9009 45.6472 36.9961L44.0617 38.3623L46.0928 37.1956C46.2147 37.1261 46.3575 37.1029 46.4951 37.1301C46.6328 37.1574 46.7559 37.2333 46.8421 37.344C46.9283 37.4547 46.9717 37.5927 46.9643 37.7328C46.957 37.8729 46.8994 38.0057 46.8022 38.1068L45.3718 39.5604L47.2607 38.4708C47.3823 38.4013 47.5248 38.378 47.6623 38.405C47.7997 38.4319 47.9228 38.5075 48.0091 38.6177C48.0955 38.728 48.1393 38.8656 48.1325 39.0055C48.1258 39.1454 48.0689 39.2782 47.9723 39.3796L45.7172 41.7211C45.8219 41.712 45.9269 41.735 46.0182 41.7871C46.1095 41.8392 46.1828 41.9179 46.2282 42.0128C46.3052 42.1466 46.3259 42.3056 46.2859 42.4547C46.2459 42.6039 46.1483 42.7311 46.0147 42.8084L42.9102 44.6004C42.8222 44.6538 42.7214 44.6824 42.6185 44.6833Z" />
                                <path d="M9.61761 30.5597C9.49517 30.5597 9.37585 30.5212 9.27653 30.4496C9.1772 30.378 9.10292 30.277 9.06421 30.1608C9.02549 30.0447 9.0243 29.9193 9.06081 29.8025C9.09731 29.6856 9.16966 29.5832 9.26761 29.5097L10.3351 28.7071L8.92461 29.5237C8.79904 29.5969 8.6507 29.6205 8.50862 29.59C8.36654 29.5595 8.24096 29.4771 8.15646 29.3589C8.07195 29.2407 8.03462 29.0952 8.05175 28.9509C8.06889 28.8066 8.13927 28.6739 8.24911 28.5787L10.2091 26.8684L7.72761 28.2999C7.60751 28.3692 7.46662 28.3935 7.33023 28.3684C7.19384 28.3433 7.07086 28.2704 6.98336 28.1628C6.89585 28.0552 6.84954 27.9199 6.85273 27.7813C6.85592 27.6426 6.90841 27.5097 7.00077 27.4062L8.79511 25.3995L6.37194 26.7995C6.25218 26.869 6.11164 26.8935 5.97544 26.8688C5.83924 26.8442 5.71625 26.7719 5.62845 26.6649C5.54066 26.5578 5.49377 26.4231 5.49618 26.2847C5.49859 26.1463 5.55014 26.0133 5.64161 25.9094L8.46727 22.6894C8.37945 22.6389 8.30659 22.566 8.25611 22.4782C8.17876 22.3442 8.15779 22.185 8.19783 22.0356C8.23787 21.8861 8.33563 21.7587 8.46961 21.6814L10.3421 20.5999C10.4619 20.5305 10.6024 20.5059 10.7386 20.5306C10.8748 20.5553 10.9978 20.6276 11.0856 20.7346C11.1734 20.8416 11.2203 20.9763 11.2179 21.1147C11.2155 21.2531 11.1639 21.3862 11.0724 21.49L8.85577 24.0217L11.3699 22.5704C11.4899 22.5018 11.6303 22.478 11.7662 22.5033C11.9021 22.5285 12.0246 22.6012 12.1118 22.7084C12.1991 22.8156 12.2455 22.9502 12.2427 23.0884C12.24 23.2266 12.1883 23.3593 12.0968 23.4629L10.2978 25.4695L14.8174 22.8667C14.9428 22.795 15.0904 22.7723 15.2315 22.8031C15.3727 22.834 15.4974 22.9161 15.5815 23.0336C15.6655 23.151 15.703 23.2955 15.6867 23.4391C15.6703 23.5826 15.6013 23.715 15.4929 23.8105L13.5341 25.5162L18.1308 22.8632C18.2593 22.7911 18.4103 22.7703 18.5536 22.805C18.6968 22.8397 18.8216 22.9273 18.9029 23.0502C18.9842 23.1732 19.0159 23.3223 18.9917 23.4677C18.9675 23.6131 18.8892 23.7439 18.7724 23.8339L12.2181 28.7561C12.2288 28.8675 12.2072 28.9797 12.1559 29.0792C12.1046 29.1787 12.0258 29.2613 11.9288 29.3172L9.91277 30.4839C9.82304 30.5353 9.72104 30.5616 9.61761 30.5597Z" />
                                <path d="M42.3316 54.9162C42.327 54.9499 42.327 54.984 42.3316 55.0177C42.3301 55.5886 42.3785 56.1586 42.4763 56.721C42.942 59.0174 44.1902 61.0809 46.0079 62.5594C47.8256 64.038 50.1001 64.8398 52.4431 64.8282C54.5085 64.8089 56.5218 64.1779 58.2289 63.0151C59.9359 61.8523 61.2601 60.2098 62.0343 58.2949C62.4554 57.1764 62.667 55.99 62.6584 54.7949C62.6852 54.7189 62.6827 54.6358 62.6514 54.5615C62.6255 53.1243 62.2878 51.7098 61.6618 50.4159C61.0357 49.1219 60.1362 47.9792 59.0254 47.0669C57.3842 45.7749 55.3917 45.0076 53.3078 44.8651C51.224 44.7225 49.1455 45.2113 47.3436 46.2677C45.8353 47.1569 44.5816 48.4199 43.7037 49.9348C42.8257 51.4497 42.3532 53.1654 42.3316 54.9162ZM58.1178 48.4645L56.8799 49.7L56.6746 49.9065C56.6543 49.9238 56.6376 49.945 56.6258 49.969C56.6139 49.9929 56.6071 50.019 56.6056 50.0456C56.6042 50.0723 56.6083 50.0989 56.6175 50.124C56.6268 50.149 56.641 50.1719 56.6594 50.1912C56.7917 50.2735 56.948 50.3084 57.1028 50.2904C57.5171 50.2868 57.9162 50.1335 58.2263 49.8587L58.8598 49.2252C60.0592 50.6586 60.7793 52.4318 60.9189 54.2955H59.8141C59.5859 54.2887 59.359 54.3317 59.1491 54.4215C58.9679 54.4934 58.8129 54.6188 58.7046 54.7809C58.6647 54.8405 58.6446 54.9112 58.6473 54.9828C58.6501 55.0545 58.6754 55.1235 58.7198 55.1799C58.8443 55.302 59.012 55.37 59.1864 55.3689H60.9364C60.9262 55.7205 60.8947 56.0711 60.8419 56.4189C60.6054 57.8483 60.0024 59.192 59.0919 60.319L58.4503 59.675L58.2438 59.4697C58.1121 59.3834 57.9548 59.3447 57.7981 59.36C57.5714 59.3658 57.3476 59.4129 57.1378 59.4989C56.9601 59.5558 56.801 59.6593 56.6769 59.7987C56.6104 59.8944 56.5684 59.9994 56.6653 60.0962L58.0139 61.4449C56.6985 62.5736 55.071 63.2754 53.3473 63.4574V61.607C53.3473 61.4799 53.1046 61.4099 53.0253 61.3947C52.815 61.3627 52.6002 61.3778 52.3964 61.439C52.1895 61.487 51.996 61.5811 51.8306 61.7144L51.7198 61.831C51.6919 61.8624 51.6717 61.8998 51.661 61.9403C51.6503 61.9809 51.6492 62.0234 51.6579 62.0644V63.4235C49.8681 63.1949 48.194 62.414 46.8688 61.1894L48.1159 59.9422L48.3213 59.7369C48.3924 59.6657 48.4379 59.5689 48.3469 59.493C48.2126 59.4266 48.061 59.4034 47.9129 59.4265C47.6873 59.4428 47.4652 59.492 47.2538 59.5724C47.0817 59.6287 46.9229 59.7196 46.7871 59.8395L46.1711 60.4555C45.4658 59.653 44.9163 58.726 44.5506 57.722C44.2902 56.969 44.1332 56.184 44.0839 55.3887H45.1958C45.4234 55.3963 45.65 55.3541 45.8596 55.265C46.0418 55.192 46.1971 55.0645 46.3041 54.8999C46.3433 54.8381 46.3626 54.7658 46.3593 54.6928C46.3559 54.6197 46.3301 54.5494 46.2854 54.4915C46.2243 54.43 46.1516 54.3811 46.0715 54.3477C45.9914 54.3142 45.9055 54.2969 45.8188 54.2967H44.0758C44.1649 52.5098 44.7997 50.7931 45.8946 49.378L46.5701 50.0535L46.7754 50.26C46.9008 50.3933 47.0705 50.4763 47.2526 50.4934C47.4812 50.516 47.7115 50.4757 47.9188 50.3767C48.1045 50.2988 48.2586 50.1608 48.3563 49.9847C48.3955 49.9144 48.4135 49.8342 48.4082 49.7539C48.4028 49.6735 48.3742 49.5965 48.3259 49.532L46.9983 48.2044C47.0356 48.1729 47.0648 48.1344 47.1021 48.1029C48.3945 47.0349 49.9817 46.3862 51.6521 46.2432V48.0749C51.6521 48.1717 51.9134 48.181 51.9461 48.1822C52.1547 48.1832 52.3623 48.1533 52.5621 48.0935C52.7675 48.0466 52.9643 47.9678 53.1454 47.8602C53.2329 47.803 53.3461 47.7435 53.3461 47.621V46.2455C54.5897 46.3776 55.7868 46.7918 56.8461 47.4565C57.3003 47.7524 57.726 48.0899 58.1178 48.4645Z" />
                                <path d="M0.321585 38.4814V48.0282C0.150514 49.5744 0.210674 51.1373 0.500085 52.6657C1.39025 55.3409 4.05608 55.1892 6.31242 55.1892H37.6829C37.7094 57.7194 38.4037 60.1978 39.6954 62.3736C41.3992 65.1124 43.9427 67.2271 46.9465 68.4024C49.9504 69.5776 53.2536 69.7503 56.3637 68.8947C59.4737 68.0392 62.2238 66.2012 64.2039 63.655C66.1841 61.1088 67.288 57.9907 67.3513 54.7657C67.3489 51.0039 65.8881 47.3894 63.2759 44.6824C60.6637 41.9753 57.1036 40.3866 53.3443 40.2501V24.2667C53.3443 18.4777 53.5858 12.6327 53.3443 6.8484C53.2276 4.12773 51.0483 3.13723 48.6776 3.13723H45.1928V1.11423C45.1856 1.01981 45.1585 0.927969 45.1134 0.844734C45.0682 0.761499 45.006 0.688746 44.9307 0.631245C44.8555 0.573743 44.769 0.532792 44.6768 0.511075C44.5846 0.489358 44.4889 0.487366 44.3959 0.505229C44.0459 0.537896 43.4731 0.781729 43.4731 1.21923V3.15006H38.1788V1.06523C38.1788 0.693062 37.7436 0.640562 37.4438 0.682562C37.217 0.707312 36.9986 0.782236 36.8044 0.901896C36.6878 0.977729 36.4871 1.1154 36.4871 1.26823V3.15006H31.1776V0.940396C31.1776 0.843562 30.9163 0.833062 30.8836 0.831896C30.6746 0.830989 30.4667 0.860865 30.2664 0.920562C30.0693 0.975396 29.4883 1.1119 29.4883 1.38723V3.15006H24.1776V0.940396C24.1776 0.808562 23.9361 0.729229 23.8509 0.707062C23.6409 0.67034 23.4252 0.683123 23.2209 0.744396C22.9071 0.836562 22.4883 1.01156 22.4883 1.3884V3.15006H17.1858V1.08973C17.1858 0.690729 16.7681 0.551896 16.4204 0.592729C16.1194 0.627729 15.4801 0.837729 15.4801 1.24373V3.15006H10.1904V1.10606C10.1821 1.0144 10.1542 0.925586 10.1088 0.845556C10.0633 0.765526 10.0013 0.696128 9.92682 0.642005C9.85238 0.587883 9.76723 0.550285 9.67708 0.531727C9.58693 0.513169 9.49385 0.514079 9.40409 0.534396C9.07042 0.568229 8.47075 0.800396 8.47075 1.2274V3.13956C7.19519 3.08236 5.91751 3.0917 4.64292 3.16756C3.61241 3.19244 2.62198 3.57175 1.83846 4.24157C1.05495 4.91139 0.526244 5.8308 0.341418 6.8449C0.311484 7.29264 0.304864 7.74163 0.321585 8.19006V38.4814ZM5.59959 54.4834C3.08192 54.4332 2.01092 52.5969 2.01092 50.3277V21.4889C2.01092 18.3727 1.94092 15.2402 1.93509 12.1136H51.6549V40.2827C50.3676 40.373 49.0965 40.6238 47.8714 41.0294C48.1376 40.753 48.3609 40.4385 48.5341 40.0961C49.1653 38.7439 47.2193 37.3976 46.4143 36.5762C45.5101 35.6522 44.7623 34.4902 43.3214 34.6979C43.0286 34.703 42.7397 34.7669 42.472 34.8858C42.2043 35.0047 41.9632 35.1761 41.763 35.3899C41.5628 35.6037 41.4075 35.8555 41.3065 36.1305C41.2054 36.4054 41.1606 36.6978 41.1748 36.9904H36.4766C36.1619 37.0175 35.8455 37.0194 35.5304 36.9962C35.511 36.9585 35.484 36.9251 35.4511 36.8982C35.0031 36.4677 34.5714 36.0197 34.1328 35.5811L31.0236 32.4742L35.1583 28.3396H41.1526C41.1421 29.0302 41.0616 29.8014 41.6391 30.2972C42.0361 30.5412 42.492 30.6725 42.9579 30.677C43.4239 30.6815 43.8823 30.5591 44.2839 30.3229C44.8033 30.0172 45.2646 29.6223 45.6466 29.1562L47.5133 27.2476C48.0039 26.8689 48.3881 26.3697 48.6286 25.7986C48.8106 25.0379 48.3486 24.5537 47.8679 24.0626L45.9919 22.1446C45.6297 21.7067 45.2265 21.3043 44.7879 20.9429C44.3268 20.7202 43.8135 20.6283 43.3038 20.677C42.794 20.7258 42.3075 20.9134 41.8969 21.2194C41.6268 21.4222 41.4155 21.6932 41.2847 22.0047C41.1539 22.3161 41.1083 22.6567 41.1526 22.9916H34.9868C33.6867 22.8825 32.3958 23.2876 31.3911 24.1197C30.5079 24.9481 29.6738 25.8371 28.8174 26.6934L27.0278 28.4842L23.7401 25.2001C22.7064 24.1664 21.8804 23.0604 20.2961 22.9927C18.0794 22.8982 15.8278 22.9927 13.6029 22.9927C13.229 23.0231 12.8533 23.0231 12.4794 22.9927H12.4713C12.525 22.7805 12.5385 22.5601 12.5109 22.3429C12.4654 21.0409 11.5613 20.5171 10.3316 20.7201C8.44742 21.0316 6.87242 23.2587 5.66492 24.5817C5.48091 24.7283 5.33094 24.913 5.22538 25.1233C5.11981 25.3335 5.06117 25.5641 5.05352 25.7992C5.04586 26.0343 5.08937 26.2683 5.18104 26.4849C5.2727 26.7016 5.41034 26.8957 5.58442 27.0539C6.44075 28.0106 7.38809 28.8984 8.28525 29.8154C8.61425 30.2102 9.06367 30.4862 9.56459 30.601C10.0655 30.7159 10.5903 30.6633 11.0584 30.4512C11.5074 30.3234 11.8973 30.0419 12.1599 29.656C12.4226 29.2701 12.5415 28.8042 12.4958 28.3396H17.0796C17.3771 28.3396 17.6746 28.3466 17.9721 28.3396C18.0302 28.3376 18.0884 28.3407 18.1459 28.3489C18.646 28.7758 19.1093 29.2442 19.5308 29.7489L22.6154 32.8312L18.5169 36.9297H12.5144C12.5812 36.5936 12.5716 36.2467 12.4864 35.9147C12.4012 35.5828 12.2425 35.2742 12.0221 35.0117C11.631 34.7496 11.1736 34.6037 10.703 34.5911C10.2323 34.5785 9.76778 34.6997 9.36325 34.9406C8.85121 35.2648 8.394 35.6685 8.00875 36.1364L6.14209 38.0451C5.64762 38.4262 5.26447 38.9331 5.03259 39.5127C4.85058 40.2874 5.31258 40.7879 5.80375 41.2907L7.67975 43.2087C8.04475 43.6441 8.44766 44.0462 8.88375 44.4104C9.34327 44.6581 9.86544 44.7654 10.3854 44.719C10.9054 44.6725 11.4003 44.4743 11.8086 44.1491C12.0629 43.9394 12.2607 43.6695 12.384 43.3638C12.5073 43.0581 12.5521 42.7265 12.5144 42.3991H15.8079C17.3814 42.5467 18.9671 42.4969 20.5283 42.2509C22.1033 41.8274 23.2524 40.2816 24.3608 39.1732L26.6638 36.8702L29.9304 40.1299C30.4111 40.6106 30.8719 41.1484 31.3911 41.5906C32.4318 42.4737 33.6369 42.3372 34.9074 42.3372H40.4829C40.7159 42.3195 40.9497 42.3176 41.1829 42.3314C41.1626 42.4654 41.1513 42.6007 41.1491 42.7362C41.0586 43.0954 41.1037 43.4753 41.276 43.8031C41.4482 44.131 41.7354 44.3838 42.0824 44.5131C41.7593 44.8257 41.4466 45.1489 41.1491 45.4931C39.0121 48.0095 37.7921 51.1766 37.6888 54.4764C26.9998 54.4986 16.2886 54.6899 5.59959 54.4834ZM43.1476 43.5867C42.8587 43.0292 42.7526 42.3949 42.8443 41.7737C42.8443 41.6757 42.5841 41.6571 42.5491 41.6571C40.0093 41.6571 37.4473 41.7667 34.9109 41.6571C32.9906 41.5742 31.8216 39.8604 30.5441 38.5852L27.6554 35.7001C27.6481 35.6904 27.6394 35.6817 27.6298 35.6744L23.6129 31.6611L20.8129 28.8611C20.5049 28.5542 20.0709 27.9056 19.6673 27.7177C19.3176 27.63 18.9542 27.6114 18.5974 27.6629H12.2158C11.9171 27.6629 10.8158 27.7924 10.8158 28.2299C10.8158 28.5134 10.8391 28.8062 10.8158 29.0886C10.7714 29.6182 10.7924 29.9192 10.2861 29.6719C9.96759 29.5132 9.65025 29.0221 9.40175 28.7689C8.62825 27.9779 6.54925 26.5254 6.74058 25.2946C6.92142 24.1361 8.67142 22.9426 9.45775 22.1376C9.71442 21.8751 10.0878 21.3722 10.2919 21.4317C10.9721 21.6277 10.8158 23.0651 10.8158 23.5679C10.8158 23.6659 11.0759 23.6846 11.1109 23.6846C13.6508 23.6846 16.2128 23.5749 18.7491 23.6846C20.6694 23.7674 21.8384 25.4812 23.1159 26.7564L30.0471 33.6817L32.8471 36.4817C33.1551 36.7886 33.5891 37.4372 33.9928 37.6251C34.3424 37.7128 34.7058 37.7314 35.0626 37.6799H41.4384C41.7371 37.6799 42.8326 37.5504 42.8326 37.1129C42.8326 36.8516 42.7159 35.6907 42.9691 35.5402C43.2024 35.4014 43.4206 35.7491 43.5863 35.9077C44.4029 36.6777 45.1566 37.5107 45.9394 38.3099C46.7223 39.1091 47.4024 39.8266 46.4388 40.9116C46.0351 41.3654 45.6023 41.7959 45.1683 42.2252C44.4589 42.6235 43.7831 43.0788 43.1476 43.5867ZM12.0163 41.5976C11.6849 41.5976 10.8228 41.7772 10.8228 42.2264C10.8228 42.5332 10.8484 42.8494 10.8228 43.1539C10.8076 43.3231 10.8321 43.6346 10.6758 43.7536C10.4623 43.9181 10.5591 43.8271 10.2826 43.6369C9.91158 43.3211 9.57027 42.9719 9.26292 42.5939L7.64825 40.9501C7.20492 40.4962 6.62392 40.0611 6.71492 39.3529C6.78959 38.7614 7.35775 38.3402 7.75325 37.9354L9.37492 36.2717C9.58725 36.0547 9.79609 35.8319 10.0131 35.6196C10.0528 35.5799 10.1414 35.4446 10.2009 35.4271C10.3946 35.3687 10.1298 35.4504 10.2009 35.4656C11.0071 35.6499 10.8263 36.9752 10.8263 37.5656C10.8263 37.7464 11.2276 37.7417 11.3221 37.7417H15.0228C16.2229 37.8059 17.4257 37.8024 18.6254 37.7312C19.8178 37.5936 20.7558 36.2006 21.5421 35.4142L23.3703 33.5861C24.2211 34.4338 25.0709 35.2828 25.9194 36.1329L23.2361 38.8162L21.3344 40.7179C20.9984 41.0539 20.6554 41.5194 20.1678 41.6092C19.6969 41.6495 19.2234 41.6495 18.7526 41.6092H12.0163V41.5976ZM41.4513 23.6752C41.7511 23.6752 42.8454 23.5469 42.8454 23.1071C42.8454 22.7816 42.8198 22.4444 42.8454 22.1212C42.8774 21.908 42.9306 21.6986 43.0041 21.4959L43.0333 21.4679C43.0788 21.4831 43.1266 21.4982 43.1954 21.5157C43.5349 21.8832 43.9188 22.2262 44.2699 22.5856L46.0129 24.3671C46.4796 24.8396 47.0349 25.2572 46.9568 25.9946C46.8914 26.6152 46.3408 27.0166 45.9266 27.4401L44.1766 29.2274C43.9604 29.4057 43.7647 29.6077 43.5933 29.8294C43.5636 29.8732 43.5279 29.9125 43.4871 29.9461C43.4561 29.9169 43.428 29.8849 43.4031 29.8504C43.1149 29.4526 42.8886 29.2869 42.8489 28.7596C42.8256 28.4352 42.8489 28.0992 42.8489 27.7737C42.8489 27.6757 42.5899 27.6571 42.5538 27.6571H38.8496C37.6409 27.6571 36.3763 27.5474 35.1711 27.6571C33.8749 27.7819 32.9941 29.1049 32.1378 29.9577L30.3236 31.7707C29.4571 30.9066 28.5911 30.0413 27.7254 29.1749L30.4169 26.4834L32.3186 24.5806C32.5589 24.3472 32.9778 23.7826 33.3091 23.6682C33.7754 23.6022 34.2486 23.6022 34.7149 23.6682H41.4489L41.4513 23.6752ZM43.4941 29.9589C43.6889 30.1421 43.7029 29.8597 43.4941 29.9589V29.9589ZM65.6444 54.9011C65.649 57.6111 64.8336 60.2592 63.3055 62.4973C61.7774 64.7355 59.6079 66.459 57.0823 67.4416C54.4754 68.3587 51.6468 68.437 48.9932 67.6653C46.3396 66.8937 43.994 65.3109 42.2854 63.1389C40.6284 61.0213 39.6319 58.4625 39.4203 55.782C39.2087 53.1016 39.7913 50.4181 41.0954 48.0667C42.4362 45.693 44.4889 43.8004 46.9635 42.6563C49.4382 41.5123 52.2096 41.1746 54.8866 41.6909C57.912 42.3467 60.6246 44.0113 62.5794 46.4117C64.5341 48.812 65.6149 51.8056 65.6444 54.9011ZM2.01092 6.89623C1.95654 6.20313 2.15447 5.51372 2.56824 4.95502C2.98201 4.39633 3.58375 4.00598 4.26259 3.8559C4.82864 3.82031 5.39637 3.82031 5.96242 3.8559H8.47542V5.89406C8.48378 5.98572 8.51162 6.07454 8.55708 6.15457C8.60254 6.2346 8.66457 6.304 8.73902 6.35812C8.81346 6.41224 8.89861 6.44984 8.98876 6.4684C9.07891 6.48696 9.17198 6.48605 9.26175 6.46573C9.59542 6.4319 10.1951 6.19973 10.1951 5.77273V3.8559H15.4848V5.9104C15.4848 6.3094 15.9024 6.44823 16.2501 6.4074C16.5511 6.3724 17.1904 6.1624 17.1904 5.7564V3.8559H22.4929V6.05973C22.4929 6.19156 22.7344 6.2709 22.8196 6.29306C23.0296 6.32979 23.2453 6.317 23.4496 6.25573C23.7634 6.16356 24.1823 5.98856 24.1823 5.61173V3.86173H29.4929V6.05973C29.4929 6.15656 29.7543 6.16706 29.7869 6.16823C29.9959 6.16914 30.2038 6.13926 30.4041 6.07956C30.6013 6.02473 31.1823 5.88823 31.1823 5.60706V3.85706H36.4918V5.9349C36.4918 6.30706 36.9269 6.35956 37.2268 6.31756C37.4535 6.29281 37.6719 6.21789 37.8661 6.09823C37.9828 6.0224 38.1834 5.88473 38.1834 5.7319V3.8559H43.4778V5.8859C43.4849 5.98032 43.512 6.07216 43.5571 6.15539C43.6023 6.23863 43.6645 6.31138 43.7398 6.36888C43.815 6.42638 43.9015 6.46733 43.9937 6.48905C44.0859 6.51077 44.1816 6.51276 44.2746 6.4949C44.6246 6.46223 45.1974 6.2184 45.1974 5.7809V3.8559H45.2558C46.6558 3.8559 48.7114 3.5374 49.9749 4.27006C52.0924 5.49506 51.6596 8.17373 51.6596 10.2387V11.2199H1.93392C1.93742 9.77673 1.95609 8.33473 2.01092 6.89623Z" />
                                <path d="M53.3249 52.1209C53.1421 52.1874 52.9849 52.3099 52.8758 52.4709L51.7091 54.8043C51.6696 54.8589 51.649 54.9249 51.6505 54.9923C51.6519 55.0597 51.6754 55.1248 51.7173 55.1776L52.8839 56.3443C53.0497 56.4535 53.2423 56.5149 53.4407 56.5219C53.6391 56.5289 53.8356 56.4812 54.0086 56.3839C54.2139 56.2871 54.7331 55.9488 54.4496 55.6653L53.4124 54.6293C53.7617 53.9293 54.1117 53.2324 54.4624 52.5386C54.5016 52.4839 54.522 52.4179 54.5205 52.3506C54.519 52.2833 54.4958 52.2183 54.4543 52.1653C54.3256 52.0522 54.1588 51.9922 53.9876 51.9973C53.7602 51.9883 53.5338 52.0305 53.3249 52.1209Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Tailored Sri Lankan Experiences</h6>
                            <p>Enjoy ultimate flexibility in your travels.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner4-slider-wrapper">
                <div class="row g-xl-4 gy-5 mb-60">
                    <div class="col-xl-5">
                        <div class="swiper banner4-card-slide">
                            <div class="swiper-wrapper">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="swiper package-card3-slide">
                            <div class="swiper-wrapper">
                                <?php


                                $result_hotel = Database::search("SELECT * FROM hotel WHERE status_id='1'");
                                while ($data = $result_hotel->fetch_assoc()) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="package-card3 style-2">
                                            <a href="hotel-suits.php" class="package-card-img col-4">
                                                <img src="<?= $data['img'] ?>" width="100%" alt>
                                                <div class="eg-tag">
                                                    <span>Featured</span>
                                                </div>
                                            </a>
                                            <div class="package-card-content">
                                                <div class="card-content-top">
                                                    <div class="rating-area">
                                                        <ul class="rating">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>

                                                    </div>
                                                    <h5><a href="hotel-suits.php"><?= $data['name'] ?></a></h5>
                                                    <p><?= limit_words($data['description'], 50) ?>....</p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide-and-view-btn-grp">
                            <div class="slider-btn-grp3">
                                <div class="slider-btn banner4-slider-prev">
                                    <i class="bi bi-arrow-left"></i>
                                    <span>PREV</span>
                                </div>
                                <div class="slider-btn banner4-slider-next">
                                    <span>NEXT</span>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="video-section mb-40">
        <video autoplay loop muted playsinline src="assets/video/production_.mp4">
        </video>
    </div> -->

    <div class="home2-blog-section mb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12">
                    <div class="section-title2 text-center">
                        <div class="eg-section-tag">
                            <span>Blog</span>
                        </div>
                        <h2>Travel Blog Enthusiast</h2>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5">

                <?php
                $result_blog = Database::search("SELECT * FROM blog WHERE status_id='1' ORDER BY id DESC LIMIT 4");
                while ($data = $result_blog->fetch_assoc()) {
                ?>

                    <div class="col-lg-6">
                        <div class="blog-card style-2">
                            <div class="blog-card-img-wrap">
                                <a href="blog-details.php?id=<?= $data['id'] ?>" style="height: 400px; background-image: url('<?= $data['img'] ?>');" class="card-img"></a>
                            </div>
                            <div class="blog-card-content">

                                <h5><a href="blog-details.php?id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h5>
                                <div class="bottom-area">
                                    <a href="blog-details.php?id=<?= $data['id'] ?>">View Post
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                                <path d="M2.07617 8.73272L12.1899 2.89355" stroke-linecap="round" />
                                                <path d="M10.412 7.59764L12.1908 2.89295L7.22705 2.08105" stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12">
                                            <path d="M5.85726 11.3009C7.14547 9.08822 6.60613 6.30362 4.57475 4.68025C4.57356 4.67933 4.57238 4.67818 4.57143 4.6775L4.58021 4.69862L4.57878 4.71446C4.97457 5.72599 4.91905 6.83648 4.43285 7.78924L4.09022 8.461L3.9851 7.71876C3.91368 7.21529 3.71745 6.735 3.41515 6.32382H3.36745L3.3423 6.25495C3.34586 7.02428 3.17834 7.78213 2.8497 8.49704C2.41856 9.43259 2.48191 10.5114 3.01936 11.3833L3.39023 11.9853L2.72299 11.7126C1.62271 11.2628 0.743103 10.3964 0.309587 9.33547C-0.176131 8.15083 -0.0862008 6.77725 0.550429 5.66194C0.882388 5.08179 1.11493 4.46582 1.24187 3.8308L1.36597 3.2084L1.68251 3.76353C1.83366 4.02824 1.94494 4.31476 2.01399 4.61574L2.02111 4.62285L2.02847 4.67107L2.03535 4.669C2.98353 3.45015 3.55158 1.93354 3.6344 0.397865L3.65575 0L4.00076 0.217643C5.4088 1.10544 6.38664 2.52976 6.6887 4.13017L6.69558 4.163L6.69914 4.16805L6.71457 4.14693C6.99053 3.79429 7.13622 3.37485 7.13622 2.93336V2.24967L7.56261 2.7947C8.55398 4.06153 9.06224 5.63301 8.99391 7.21988C8.90991 9.08776 7.85708 10.7272 6.17736 11.6154L5.45008 12L5.85726 11.3009Z" />
                                        </svg>
                                        5 Min Read
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>


    <?php include 'include/customer/customer-footer.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.home2-testimonial-card-slider', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.testimonial-card-slider-next',
                    prevEl: '.testimonial-card-slider-prev',
                },
            });

            var swiper = new Swiper('.package-card3-slide', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,

                },
                navigation: {
                    nextEl: '.banner4-slider-next',
                    prevEl: '.banner4-slider-prev',
                },
            });

            // var swiper = new Swiper('.package-card-slider', {
            //     loop: true,
            //     autoplay: {
            //         delay: 5000,
            //         disableOnInteraction: false,

            //     },
            //     navigation: {
            //         nextEl: '.package-card-slider-next',
            //         prevEl: '.package-card-slider-prev',
            //     },
            // });



        });
    </script>

    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    <script>
        const txts = document.querySelector(".animate-text").children,
            txtslen = txts.length;
        let index = 0;

        function animateText() {
            console.log(txts[index]);
            for (let i = 0; i < txtslen; i++) {
                txts[i].classList.remove("text-in");
            }
            txts[index].classList.add("text-in");
            if (index == txtslen - 1) {
                index = 0;
            } else {
                index++;
            }

            setTimeout(animateText, 3000);
        }
        window.onload = animateText;
    </script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:06:25 GMT -->

</html>