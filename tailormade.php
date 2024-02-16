    <?php include 'include/customer/customer-header.php' ?>



    <head>
        <link href="tailormade_style/bootstrap.min.css" rel="stylesheet">
        <link href="tailormade_style/selectric.css" rel="stylesheet">
        <link href="tailormade_style/typography.css" rel="stylesheet">
        <link href="tailormade_style/style.css" rel="stylesheet">


    </head>

    <body class="render" style="overflow: visible;">

        <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="banner-content">
                            <h1>Tailormade</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Tailormade</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <!--Travel search engine-->
            <form class="travel_search_engine" style="margin-bottom: 5%; height: auto;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="tab-content">

                                <div class="kode_write_detail search-img02 tab-pane fade in active" role="tabpanel" id="tab-2">
                                    <center>
                                        <br>
                                        <h3 class="title-icon">Tailor Made Tours</h3>
                                    </center>
                                    <div class="booking_content">
                                        <!--Travel location finder-->
                                        <div class="kode_felid">
                                            <label>Your Name</label>
                                            <div class="ralative-icon">
                                                <input type="text" class="location-finder" placeholder="Your Name" id="name">
                                            </div>
                                        </div>
                                        <!--Travel location finder ends-->
                                        <div class="booking_content">
                                            <div class="row">

                                                <div class="col-md-4 col-xs-12 col-sm-6">
                                                    <!--Travel check in calender-->
                                                    <div class="kode_felid">
                                                        <label>Your Email</label>
                                                        <div class="ralative-icon">
                                                            <input class="checkin" type="text" placeholder="Your Email" id="email">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xs-12 col-sm-6">
                                                    <!--Travel check in calender-->
                                                    <div class="kode_felid">
                                                        <label>Your Country</label>
                                                        <div class="ralative-icon">
                                                            <input class="checkin" type="text" placeholder="Your Country" id="country">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xs-12 col-sm-6">
                                                    <!--Travel check in calender-->
                                                    <div class="kode_felid">
                                                        <label>Your Contact Number</label>
                                                        <div class="ralative-icon">
                                                            <input class="checkin" type="text" placeholder="Your Contact Number" id="pno">

                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-md-4 col-xs-12 col-sm-6">
                                                    <!--Travel check in calender-->
                                                    <div class="kode_felid">
                                                        <label>Arrival Date</label>
                                                        <div class="ralative-icon">
                                                            <input class="checkin" type="Date" id="date-range0">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xs-12 col-sm-6">
                                                    <!--Travel check out calender-->
                                                    <div class="kode_felid">
                                                        <label>Departure Date</label>
                                                        <div class="ralative-icon">
                                                            <input class="checkout" type="date" id="date-range1">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="booking_content">
                                                        <div class="row">

                                                            <div class="col-md-3 col-xs-12 col-sm-6">
                                                                <!--Travel booking procode-->
                                                                <div class="kode_felid">
                                                                    <label>Child</label>
                                                                    <input type="text" placeholder="Child" id="child">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                                <!--Travel booking procode-->
                                                                <div class="kode_felid">
                                                                    <label>Adult</label>
                                                                    <input type="text" placeholder="Adult" id="adults">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                                <!--Travel booking procode-->
                                                                <div class="kode_felid">
                                                                    <label>Infant</label>
                                                                    <input type="text" placeholder="Infant" id="infant">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                                <!--Travel booking adults-->
                                                                <div class="kode_felid">
                                                                    <label for="vtype">Vehicle Type</label>
                                                                    <select class="select" id="vtype" tabindex="0">
                                                                        <option selected="">Vehicle Type</option>
                                                                        <option value="Car">Car</option>
                                                                        <option value="Mini Car">Mini Car</option>
                                                                        <option value="Van">Van</option>
                                                                        <option value="Bus">Bus</option>
                                                                        <option value="Coach">Coach</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                                <div class="kode_felid">
                                                                    <!--Travel booking children-->
                                                                    <label>Hotel Type</label>
                                                                    <select class="select" id="htype" tabindex="0">
                                                                        <option selected="">Hotel Type</option>
                                                                        <option value="Budget">Budget</option>
                                                                        <option value="Star Class">Star Class</option>
                                                                        <option value="Standerd">Standerd</option>
                                                                        <option value="Luxery">Luxery</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                                <div class="kode_felid">

                                                                    <label>Attraction &amp; Activities</label>
                                                                    <select class="select" id="htype" tabindex="0">
                                                                        <option selected="">Hotel Type</option>
                                                                        <option value="Ancient Sites">Ancient Sites</option>
                                                                        <option value="Hiking">Hiking</option>
                                                                        <option value="WaterSports">Water Sports</option>
                                                                        <option value="Waterfalls">Waterfalls</option>
                                                                        <option value="Culture">Culture</option>
                                                                        <option value="Wildlife">Wildlife</option>
                                                                        <option value="Adventure">Adventure</option>
                                                                        <option value="Beach">Beach</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-xs-12 col-sm-12">
                                                    <!--Travel booking procode-->
                                                    <div class="kode_felid">
                                                        <label>Your Budget</label>
                                                        <input type="text" placeholder="Budget" id="budget">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-xs-12 col-sm-12">
                                                    <!--Travel booking procode-->
                                                    <div class="kode_felid">
                                                        <label>Your Message</label>
                                                        <input type="text" placeholder="Your Message" id="message">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-12 col-sm-12">
                                                    <div class="submit-form">
                                                        <button type="button" class="btn-normal-1 animated effect2-color-1" id="send_btn">Submit Now</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-12">
                                            <div class="alert alert-success" id="success" style="background: green;padding: 20px;color: white;display: none;">
                                                <strong>Success!</strong> Your request has sent Thank you.
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="alert alert-danger" id="error" style="background: red;padding: 20px;color: white;display: none;width: 100%;">
                                                <strong>Sorry !</strong> Please enter all details.
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'include/customer/customer-footer.php' ?>
    </body>

    </html>