  <?php include 'include/customer/customer-header.php' ?>
  <html>

  <head>
      <link href="tailormade_style/bootstrap.min.css" rel="stylesheet">
      <link href="tailormade_style/selectric.css" rel="stylesheet">
      <link href="tailormade_style/typography.css" rel="stylesheet">
      <link href="tailormade_style/style.css" rel="stylesheet">
      <title>Travel Zoom Lanka - Tailer Made Tour</title>


  </head>

  <body>

      <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, 0.5) 101.02%), url(https://www.sltda.gov.lk/images/statistics-cover-new.jpg);">
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


      <div class="content-tailer-made">
          <!--Travel search engine-->
          <form class="travel_search_engine">
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
                                                          <input class="checkin" type="text" placeholder="Your Contact Number" id="contact">

                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-6">
                                                  <div class="kode_felid">
                                                      <label>Arrival Date</label>
                                                      <div class="ralative-icon">
                                                          <input class="checkin" type="Date" id="date-range0">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-6">
                                                  <div class="kode_felid">
                                                      <label>Departure Date</label>
                                                      <div class="ralative-icon">
                                                          <input class="checkout" type="date" id="date-range1">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-6">
                                                  <div class="kode_felid">
                                                      <label>Starting Date</label>
                                                      <div class="ralative-icon">
                                                          <input class="checkout" type="date" id="date-start">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-6">
                                                  <div class="kode_felid">
                                                      <label>Number of Members</label>
                                                      <div class="ralative-icon">
                                                          <input type="number" placeholder="Member Count" min="1" oninput="validity.valid||(value='');" id="members">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-md-4 col-xs-12 col-sm-6 align-items-center mt-50">
                                                  <div class="kode_felid row justify-content-center">
                                                      <label class="col-8 text-center" for="vehicle">Is Need Vehicle</label>
                                                      <div class="col-4">
                                                          <input type="checkbox" id="vehicle">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-6 align-items-center mt-50">
                                                  <div class="kode_felid row justify-content-center">
                                                      <label class="col-8 text-center" for="hotel">Is Need Hotel</label>
                                                      <div class="col-4">
                                                          <input type="checkbox" id="hotel">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-9 col-xs-12 col-sm-12">
                                              <!--Travel booking procode-->
                                              <div class="kode_felid">
                                                  <label>Your Message</label>
                                                  <textarea class="col-12" name="message" id="message" placeholder="Your Message" cols="30" rows="30"></textarea>
                                              </div>
                                          </div>
                                          <div class="col-md-3 col-xs-12 col-sm-12" id="send_btn">
                                              <div class="submit-form">
                                                  <button type="button" id="send_btn_text" class="btn-normal-1 animated effect2-color-1">Submit Now</button>
                                              </div>
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
      <script>
          document.getElementById('send_btn').addEventListener('click', () => {
              document.getElementById('send_btn_text').innerHTML = "Waiting";
              var formData = {
                  name: document.getElementById('name').value,
                  email: document.getElementById('email').value,
                  country: document.getElementById('country').value,
                  contact: document.getElementById('contact').value,
                  date_range0: document.getElementById('date-range0').value,
                  date_range1: document.getElementById('date-range1').value,
                  date_start: document.getElementById('date-start').value,
                  members: document.getElementById('members').value,
                  vehicle: document.getElementById('vehicle').checked,
                  hotel: document.getElementById('hotel').value,
                  message: document.getElementById('message').value
              }

              fetch("send_tailer_made_email.php", {
                      method: "POST",
                      headers: {
                          'Content-Type': 'application/json',
                      },
                      body: JSON.stringify(formData),
                  })
                  .then(response => response.text())
                  .then(data => {
                      alert(data)
                      document.getElementById('send_btn_text').innerHTML = "Submit Now";
                      if (data == "Message has been sent") {
                          window.location.reload();
                      }
                  })
                  .catch((error) => {
                      console.error("Error : ", error);
                  });

          });
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

  </html>