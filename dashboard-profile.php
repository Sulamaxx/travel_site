<?php
session_start();
require "libs/connection.php";
if (isset($_SESSION['user'])) {

?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:51 GMT -->

    <head>
    <?php include "include/admin/dashboard-header.php"; ?>
        <title>Travel Zoom Lanka - My Profile</title>
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
                                <h3>Personal Information</h3>
                            </div>
                        </div>
                        <div class="dashboard-profile-wrapper">
                            <div class="dashboard-profile-nav">
                                <ul class="nav flex-column nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                                <g clip-path="url(#clip0_820_491)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6272 11.1642C13.4899 10.0005 14 8.55982 14 7C14 3.13398 10.8659 0 7 0C3.13398 0 0 3.13398 0 7C0 10.8659 3.13398 14 7 14C9.0283 14 10.8551 13.1374 12.1336 11.7589C12.3089 11.5698 12.4737 11.3713 12.6272 11.1642ZM12.2391 10.5C12.9092 9.49892 13.2999 8.29508 13.2999 7C13.2999 3.52061 10.4794 0.699985 6.99993 0.699985C3.52061 0.699985 0.699985 3.52061 0.699985 7C0.699985 8.29515 1.09075 9.49892 1.7609 10.5C2.60633 9.23698 3.89638 8.2967 5.40716 7.90313C4.6777 7.39764 4.19999 6.55464 4.19999 5.59996C4.19999 4.05358 5.45362 2.79994 7 2.79994C8.54638 2.79994 9.80002 4.05358 9.80002 5.59996C9.80002 6.55457 9.32223 7.39764 8.59284 7.90305C10.1035 8.2967 11.3937 9.23691 12.2391 10.5ZM11.7882 11.0944C10.8058 9.47898 9.02897 8.39997 7.00007 8.39997C4.97111 8.39997 3.19418 9.47898 2.21179 11.0945C3.36726 12.4445 5.08368 13.3 7 13.3C8.91632 13.3 10.6327 12.4444 11.7882 11.0944ZM7 7.69999C8.15982 7.69999 9.10003 6.75985 9.10003 5.59996C9.10003 4.44013 8.1599 3.49993 7 3.49993C5.84011 3.49993 4.89997 4.44021 4.89997 5.60003C4.89997 6.75985 5.84018 7.69999 7 7.69999Z"></path>
                                                </g>
                                            </svg>
                                            Profile
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preference-tab" data-bs-toggle="pill" data-bs-target="#preference" type="button" role="tab" aria-controls="preference" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                                <g clip-path="url(#clip0_820_622)">
                                                    <path d="M7.00041 4.15967C6.62742 4.15967 6.25809 4.23313 5.91349 4.37587C5.56889 4.51861 5.25579 4.72782 4.99205 4.99156C4.7283 5.2553 4.51909 5.56841 4.37636 5.913C4.23362 6.2576 4.16016 6.62693 4.16016 6.99992C4.16016 7.3729 4.23362 7.74224 4.37636 8.08683C4.51909 8.43143 4.7283 8.74454 4.99205 9.00828C5.25579 9.27202 5.56889 9.48123 5.91349 9.62397C6.25809 9.7667 6.62742 9.84017 7.00041 9.84017C7.75369 9.84017 8.47612 9.54093 9.00877 9.00828C9.54142 8.47563 9.84066 7.7532 9.84066 6.99992C9.84066 6.24664 9.54142 5.52421 9.00877 4.99156C8.47612 4.45891 7.75369 4.15967 7.00041 4.15967ZM5.03516 6.99992C5.03516 6.4787 5.24221 5.97883 5.61076 5.61028C5.97932 5.24172 6.47919 5.03467 7.00041 5.03467C7.52162 5.03467 8.02149 5.24172 8.39005 5.61028C8.7586 5.97883 8.96566 6.4787 8.96566 6.99992C8.96566 7.52113 8.7586 8.021 8.39005 8.38956C8.02149 8.75811 7.52162 8.96517 7.00041 8.96517C6.47919 8.96517 5.97932 8.75811 5.61076 8.38956C5.24221 8.021 5.03516 7.52113 5.03516 6.99992Z"></path>
                                                    <path d="M8.57106 1.17518C8.10994 -0.391074 5.88919 -0.391074 5.42806 1.17518L5.34581 1.4543C5.31361 1.56363 5.25735 1.66437 5.18115 1.74914C5.10496 1.8339 5.01076 1.90054 4.90546 1.94417C4.80016 1.9878 4.68644 2.00731 4.57262 2.00128C4.45881 1.99524 4.34778 1.96382 4.24769 1.9093L3.99219 1.7693C2.55719 0.988801 0.988313 2.55855 1.76969 3.99268L1.90881 4.24818C1.96333 4.34827 1.99476 4.45929 2.00079 4.57311C2.00682 4.68693 1.98731 4.80065 1.94368 4.90595C1.90005 5.01125 1.83342 5.10544 1.74865 5.18164C1.66389 5.25784 1.56315 5.3141 1.45381 5.3463L1.17469 5.42855C-0.391562 5.88968 -0.391562 8.11043 1.17469 8.57155L1.45381 8.6538C1.56315 8.686 1.66389 8.74227 1.74865 8.81846C1.83342 8.89466 1.90005 8.98886 1.94368 9.09415C1.98731 9.19945 2.00682 9.31317 2.00079 9.42699C1.99476 9.54081 1.96333 9.65183 1.90881 9.75193L1.76881 10.0074C0.988313 11.4424 2.55719 13.0122 3.99219 12.2299L4.24769 12.0908C4.34778 12.0363 4.45881 12.0049 4.57262 11.9988C4.68644 11.9928 4.80016 12.0123 4.90546 12.0559C5.01076 12.0996 5.10496 12.1662 5.18115 12.251C5.25735 12.3357 5.31361 12.4365 5.34581 12.5458L5.42806 12.8249C5.88919 14.3912 8.10994 14.3912 8.57106 12.8249L8.65331 12.5458C8.68552 12.4365 8.74178 12.3357 8.81797 12.251C8.89417 12.1662 8.98837 12.0996 9.09366 12.0559C9.19896 12.0123 9.31269 11.9928 9.4265 11.9988C9.54032 12.0049 9.65135 12.0363 9.75144 12.0908L10.0069 12.2308C11.4419 13.0122 13.0117 11.4416 12.2294 10.0074L12.0903 9.75193C12.0358 9.65183 12.0044 9.54081 11.9983 9.42699C11.9923 9.31317 12.0118 9.19945 12.0554 9.09415C12.0991 8.98886 12.1657 8.89466 12.2505 8.81846C12.3352 8.74227 12.436 8.686 12.5453 8.6538L12.8244 8.57155C14.3907 8.11043 14.3907 5.88968 12.8244 5.42855L12.5453 5.3463C12.436 5.3141 12.3352 5.25784 12.2505 5.18164C12.1657 5.10544 12.0991 5.01125 12.0554 4.90595C12.0118 4.80065 11.9923 4.68693 11.9983 4.57311C12.0044 4.45929 12.0358 4.34827 12.0903 4.24818L12.2303 3.99268C13.0117 2.55768 11.4411 0.988801 10.0069 1.77018L9.75144 1.9093C9.65135 1.96382 9.54032 1.99524 9.4265 2.00128C9.31269 2.00731 9.19896 1.9878 9.09366 1.94417C8.98837 1.90054 8.89417 1.8339 8.81797 1.74914C8.74178 1.66437 8.68552 1.56363 8.65331 1.4543L8.57106 1.17518ZM6.26719 1.4228C6.48244 0.692176 7.51669 0.692176 7.73194 1.4228L7.81419 1.70193C7.88333 1.9365 8.00409 2.15263 8.16762 2.33446C8.33115 2.5163 8.5333 2.65923 8.75925 2.75278C8.98521 2.84633 9.22923 2.88813 9.47343 2.87512C9.71764 2.8621 9.95584 2.79459 10.1706 2.67755L10.4252 2.53755C11.0937 2.17443 11.8252 2.90505 11.4612 3.57443L11.3221 3.82993C11.2052 4.04467 11.1379 4.28285 11.125 4.527C11.1121 4.77115 11.154 5.01509 11.2476 5.24094C11.3413 5.46679 11.4842 5.66883 11.6661 5.83225C11.8479 5.99568 12.064 6.11635 12.2986 6.18543L12.5768 6.26768C13.3074 6.48293 13.3074 7.51718 12.5768 7.73243L12.2977 7.81468C12.0631 7.88382 11.847 8.00458 11.6651 8.16811C11.4833 8.33164 11.3404 8.53379 11.2468 8.75974C11.1533 8.98569 11.1115 9.22972 11.1245 9.47392C11.1375 9.71813 11.205 9.95633 11.3221 10.1711L11.4621 10.4257C11.8252 11.0942 11.0946 11.8257 10.4252 11.4617L10.1706 11.3226C9.95578 11.2055 9.71752 11.138 9.47327 11.1251C9.22902 11.1121 8.98496 11.154 8.759 11.2476C8.53303 11.3413 8.3309 11.4843 8.16741 11.6662C8.00392 11.8482 7.88323 12.0644 7.81419 12.2991L7.73194 12.5773C7.51669 13.3079 6.48244 13.3079 6.26719 12.5773L6.18494 12.2982C6.11576 12.0637 5.99502 11.8477 5.83155 11.666C5.66808 11.4842 5.46603 11.3414 5.24019 11.2478C5.01435 11.1543 4.77045 11.1124 4.52635 11.1254C4.28225 11.1383 4.04413 11.2057 3.82944 11.3226L3.57394 11.4626C2.90544 11.8257 2.17394 11.0951 2.53794 10.4257L2.67706 10.1711C2.79427 9.95629 2.86191 9.71802 2.87501 9.47371C2.88811 9.2294 2.84635 8.98525 2.75279 8.75919C2.65922 8.53312 2.51623 8.33088 2.33431 8.16729C2.15238 8.0037 1.93613 7.88291 1.70144 7.8138L1.42231 7.73155C0.691687 7.5163 0.691687 6.48205 1.42231 6.2668L1.70144 6.18455C1.93577 6.11535 2.15166 5.99462 2.33331 5.83122C2.51496 5.66781 2.65778 5.46585 2.75131 5.24012C2.84484 5.0144 2.88671 4.77062 2.87386 4.52662C2.86102 4.28262 2.79378 4.04458 2.67706 3.82993L2.53706 3.57443C2.17394 2.90593 2.90456 2.17443 3.57394 2.53843L3.82944 2.67755C4.04413 2.79443 4.28225 2.8618 4.52635 2.87473C4.77045 2.88767 5.01435 2.84583 5.24019 2.75229C5.46603 2.65875 5.66808 2.51588 5.83155 2.33413C5.99502 2.15239 6.11576 1.93638 6.18494 1.70193L6.26719 1.4228Z"></path>
                                                </g>
                                            </svg>
                                            Preference
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="change-pass-tab" data-bs-toggle="pill" data-bs-target="#change-pass" type="button" role="tab" aria-controls="change-pass" aria-selected="false" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                                <g clip-path="url(#clip0_820_628)">
                                                    <path d="M4.67075 1.39125C3.83739 1.62092 3.0097 1.87066 2.18838 2.14025C2.11338 2.16454 2.04672 2.20941 1.99598 2.26975C1.94523 2.33008 1.91246 2.40345 1.90138 2.4815C1.41663 6.11888 2.53663 8.77275 3.87275 10.521C4.43846 11.2686 5.11299 11.9272 5.87388 12.4749C6.17663 12.6884 6.44438 12.8424 6.65525 12.9412C6.76025 12.9911 6.846 13.0244 6.91163 13.0445C6.94033 13.0546 6.96992 13.0619 7 13.0664C7.02973 13.0615 7.059 13.0542 7.0875 13.0445C7.15401 13.0244 7.23975 12.9911 7.34475 12.9412C7.55475 12.8424 7.82338 12.6875 8.12613 12.4749C8.88701 11.9272 9.56154 11.2686 10.1273 10.521C11.4634 8.77363 12.5834 6.11888 12.0986 2.4815C12.0877 2.40341 12.0549 2.32999 12.0042 2.26964C11.9534 2.20929 11.8867 2.16445 11.8116 2.14025C11.242 1.95388 10.2804 1.65025 9.32926 1.39213C8.358 1.12875 7.46463 0.933625 7 0.933625C6.53625 0.933625 5.642 1.12788 4.67075 1.39125ZM4.438 0.49C5.38738 0.231875 6.39625 0 7 0C7.60375 0 8.61263 0.231875 9.56201 0.49C10.5333 0.7525 11.5124 1.06312 12.0881 1.25125C12.3288 1.33074 12.5423 1.47653 12.7039 1.67186C12.8654 1.8672 12.9687 2.10415 13.0016 2.3555C13.5231 6.27288 12.313 9.17613 10.8448 11.0968C10.2221 11.9184 9.47975 12.6419 8.64238 13.2431C8.35283 13.4512 8.04605 13.6341 7.72538 13.79C7.48038 13.9055 7.217 14 7 14C6.783 14 6.5205 13.9055 6.27463 13.79C5.95395 13.6341 5.64717 13.4512 5.35763 13.2431C4.52028 12.6419 3.77789 11.9183 3.15525 11.0968C1.687 9.17613 0.47688 6.27288 0.99838 2.3555C1.03136 2.10415 1.13457 1.8672 1.29616 1.67186C1.45775 1.47653 1.67116 1.33074 1.91188 1.25125C2.74767 0.977208 3.58996 0.723384 4.438 0.49Z"></path>
                                                    <path d="M9.4978 4.5028C9.53855 4.54344 9.57087 4.59172 9.59293 4.64487C9.61498 4.69802 9.62633 4.755 9.62633 4.81255C9.62633 4.8701 9.61498 4.92708 9.59293 4.98023C9.57087 5.03338 9.53855 5.08166 9.4978 5.1223L6.8728 7.7473C6.83216 7.78804 6.78388 7.82037 6.73073 7.84242C6.67758 7.86448 6.6206 7.87583 6.56305 7.87583C6.50551 7.87583 6.44853 7.86448 6.39537 7.84242C6.34222 7.82037 6.29394 7.78804 6.2533 7.7473L4.9408 6.4348C4.90013 6.39412 4.86786 6.34583 4.84584 6.29269C4.82383 6.23954 4.8125 6.18258 4.8125 6.12505C4.8125 6.06752 4.82383 6.01056 4.84584 5.95741C4.86786 5.90427 4.90013 5.85598 4.9408 5.8153C4.98148 5.77462 5.02977 5.74236 5.08292 5.72034C5.13606 5.69833 5.19303 5.687 5.25055 5.687C5.30808 5.687 5.36504 5.69833 5.41819 5.72034C5.47134 5.74236 5.51963 5.77462 5.5603 5.8153L6.56305 6.81892L8.8783 4.5028C8.91894 4.46206 8.96722 4.42973 9.02037 4.40768C9.07353 4.38562 9.13051 4.37427 9.18805 4.37427C9.2456 4.37427 9.30258 4.38562 9.35573 4.40768C9.40888 4.42973 9.45716 4.46206 9.4978 4.5028Z"></path>
                                                </g>
                                            </svg>
                                            Change Password
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content w-100" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="dashboard-profile-tab-content">
                                        <div class="profile-tab-content-title">
                                            <h6>You Details</h6>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>First Name*</label>
                                                        <input type="text" placeholder="Ex- Rocky ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>Last Name*</label>
                                                        <input type="text" placeholder="Jhon">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>Email Address*</label>
                                                        <input type="email" placeholder="info@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>Phone Number*</label>
                                                        <input type="text" placeholder="01245302.....">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>Your Address*</label>
                                                        <input type="text" placeholder="Mirpur DOHS, Dhaka">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <div class="form-inner">
                                                        <label>Country*</label>
                                                        <select style="display: none;">
                                                            <option>United Kingdom</option>
                                                            <option>Bangladesh</option>
                                                            <option>United State</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0"><span class="current">United Kingdom</span>
                                                            <ul class="list">
                                                                <li data-value="United Kingdom" class="option selected">United Kingdom</li>
                                                                <li data-value="Bangladesh" class="option">Bangladesh</li>
                                                                <li data-value="United State" class="option">United State</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upload-img-area">
                                                <div class="upload-img-wrapper">
                                                    <div class="drag-area">
                                                        <button type="button" class="upload-btn"><i class="bi bi-plus-lg"></i></button>
                                                        <input type="file" hidden>
                                                    </div>
                                                </div>
                                                <div class="upload-img-area-content">
                                                    <h6>Upload Your Image</h6>
                                                    <p>Image required size 300*300, JPGE or PNG format.</p>
                                                </div>
                                            </div>
                                            <div class="form-inner mb-50">
                                                <label class="containerss">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="text">Update details in all properties included in this site.</span>
                                                </label>
                                            </div>
                                            <div class="form-inner">
                                                <button type="submit" class="primary-btn3">Update Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preference" role="tabpanel" aria-labelledby="preference-tab">
                                    <div class="dashboard-profile-tab-content">
                                        <ul class="preference-list">
                                            <li>
                                                <div class="preference-list-content">
                                                    <h6>Email Notification</h6>
                                                    <p>To set up email notifications, you typically need two components: a server-side application or script to generate and send the emails.</p>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="preference-list-content">
                                                    <h6>Newsletter</h6>
                                                    <p>Choose an email service provider that supports sending newsletters. Popular choices include Mailchimp, Sendinblue, Campaign Monitor, and others.</p>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="preference-list-content">
                                                    <h6>Automated Reports</h6>
                                                    <p>To set up email notifications, you typically need two components: a server-side application or script to generate and send the emails.</p>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault3">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="currency-and-unit">
                                            <div class="row g-lg-4 gy-3">
                                                <div class="col-md-6">
                                                    <div class="form-inner">
                                                        <label>Change Currency*</label>
                                                        <select style="display: none;">
                                                            <option>Dollar (USD)</option>
                                                            <option>Taka (BDT)</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0"><span class="current">Dollar (USD)</span>
                                                            <ul class="list">
                                                                <li data-value="Dollar (USD)" class="option selected">Dollar (USD)</li>
                                                                <li data-value="Taka (BDT)" class="option">Taka (BDT)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner">
                                                        <label>Area Unit</label>
                                                        <select style="display: none;">
                                                            <option>Sq.ft </option>
                                                            <option>Cm</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0"><span class="current">Sq.ft </span>
                                                            <ul class="list">
                                                                <li data-value="Sq.ft" class="option selected">Sq.ft </li>
                                                                <li data-value="Cm" class="option">Cm</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="change-pass" role="tabpanel" aria-labelledby="change-pass-tab">
                                    <div class="dashboard-profile-tab-content">
                                        <div class="profile-tab-content-title">
                                            <h6>Change Your Password</h6>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>Old Password*</label>
                                                        <input id="password4" type="password" placeholder="*** ***">
                                                        <i class="bi bi-eye-slash" id="togglePassword4"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-30">
                                                        <label>New Password*</label>
                                                        <input id="password5" type="password" placeholder="*** ***">
                                                        <i class="bi bi-eye-slash" id="togglePassword5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner mb-50">
                                                        <label>Confirm Password*</label>
                                                        <input id="password6" type="password" placeholder="*** ***">
                                                        <i class="bi bi-eye-slash" id="togglePassword6"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="change-password-form-btns">
                                            <button type="submit" class="primary-btn3">Save Change</button>
                                            <button type="submit" class="primary-btn3 cancel">Cancel</button>
                                        </div>
                                    </div>
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

    <!-- Mirrored from demo-egenslab.b-cdn.net/html/triprex/preview/dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 09:08:51 GMT -->

    </html>
<?php
} else {
    header('Location:admin-login.php');
}
?>