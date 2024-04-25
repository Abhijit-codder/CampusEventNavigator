<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title style="color: blue;">Campus Event Navigator</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
  </head>

  <body>
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <a href="index.html" class="logo">
                <h1>Campus Event Navigator</h1>
              </a>

              <div class="search-input">
                <form id="search" action="#">
                  <input
                    type="text"
                    placeholder="Type Something"
                    id="searchText"
                    name="searchKeyword"
                    onkeypress="handle"
                  />
                  <i class="fa fa-search"></i>
                </form>
              </div>

              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="#top" class="active">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#services">Services</a>
                </li>
                <li class="scroll-to-section"><a href="#team">Team</a></li>
                <li class="scroll-to-section"><a href="#events">Events</a></li>
                <li class="scroll-to-section">
                  <a href="login.php">Register Now!</a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="main-banner" id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-banner">
              <div class="item item-1">
                <div class="header-text">
                  <h2 style="color: rgb(28, 38, 120);text-align: left;">Welcome to,</h2>
                  <h3 style="color: rgb(28, 38, 120);text-align: left;">Your Ultimate Guide to Campus Happenings.</h3>
                  <br>
                  <h3 style="color: rgb(28, 38, 120);text-align: left;">Discover.</h3>
                  <h3 style="color: rgb(28, 38, 120);text-align: left;">Engage.</h3>
                  <h3 style="color: rgb(28, 38, 120);text-align: left;">Thrive.</h3>
                  <h3 style="color: rgb(28, 38, 120);text-align: left;">Your Passport to Campus Excitement!</h3>
                  <br>
                  <h5 style="color: rgb(25, 25, 133);font-family: Arial, Helvetica, sans-serif;text-align:left;">
                   
                  </h5>
                  <div class="buttons"></div>
                </div>
              </div>
             
              <div class="item item-2">
                <div class="header-text">
                  <span class="category">Best Result</span>
                  <h2>Get the best result out of your effort</h2>
                  <p>
                    You are allowed to use this template for any educational or
                    commercial purpose. You are not allowed to re-distribute the
                    template ZIP file on any other website.
                  </p>
                  <div class="buttons"></div>
                </div>
              </div>
              <div class="item item-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section courses" id="courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h2>Recent Events</h2>
            </div>
          </div>
        </div>
        <ul class="event_filter">
          <li>
            <a class="is_active" href="#!" data-filter="*">Show All</a>
          </li>
          <li>
            <a href="#!" data-filter=".design">Webdesign</a>
          </li>
          <li>
            <a href="#!" data-filter=".development">Development</a>
          </li>
        </ul>

        <div class="row event_box">
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"
                  ><img src="assets/images/course-01.jpg" alt="" width="200px"
                /></a>
                <span class="category">Webdesign</span>
                <span class="price"
                  ><h6><em>₹</em>160</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Learn Web Design</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-02.jpg" alt="" /></a>
                <span class="category">Development</span>
                <span class="price"
                  ><h6><em>₹</em>340</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Web Development Tips</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-03.jpg" alt="" /></a>
                <span class="category">Design</span>
                <span class="price"
                  ><h6><em>₹</em>640</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Next-Gen Web Design</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-04.jpg" alt="" /></a>
                <span class="category">Development</span>
                <span class="price"
                  ><h6><em>₹</em>450</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Learning development</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-05.jpg" alt="" /></a>
                <span class="category">Web Design</span>
                <span class="price"
                  ><h6><em>₹</em>320</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Master in UX designing</h4>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design"
          >
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="assets/images/course-06.jpg" alt="" /></a>
                <span class="category">Development</span>
                <span class="price"
                  ><h6><em>₹</em>240</h6></span
                >
              </div>
              <div class="down-content">
                <h4>Full Stack Developement</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="wrapper">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="counter">
                    <h2
                      class="timer count-title count-number"
                      data-to="150"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Happy Atendees</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter">
                    <h2
                      class="timer count-title count-number"
                      data-to="804"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Event Hours</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter end">
                    <h2
                      class="timer count-title count-number"
                      data-to="15"
                      data-speed="1000"
                    ></h2>
                    <p class="count-text">Experience</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="owl-carousel owl-testimonials">
              <div class="item">
                <p>
                  “Please tell your friends or collegues about Campus Event
                  Navigator website. Anyone can access the website to make their
                  registration easier. Thank you for visiting.”
                </p>
              </div>
              <div class="item">
                <p>
                  “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Quis ipsum suspendisse ultrices gravid.”
                </p>
              </div>
              <div class="item">
                <p>
                  “"I recently used Campus Event Navigator for registering for a
                  tech conference, and I must say, it was a seamless experience
                  from start to finish. The website's user interface is clean,
                  intuitive, and easy to navigate. I found all the information I
                  needed about the event, including the schedule, speakers, and
                  venue details, right on the homepage.”
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <div class="section-heading">
              <h2>What they say about us?</h2>
              <p>
                I recently used  for registering for a tech conference,
                and I must say, it was a seamless experience from start to
                finish. The website's user interface is clean, intuitive, and
                easy to navigate. I found all the information I needed about the
                event, including the schedule, speakers, and venue details,
                right on the homepage.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section events" id="events">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h2>Upcoming Events</h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets\images\event-01.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Fun</span>
                      <h4>Prodigy</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>16 Feb 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>22 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>Rs.1200</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets\images\event-02.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Development</span>
                      <h4>Hackathon 8.0</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>24 Feb 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>30 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>Rs.1000</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-3">
                  <div class="image">
                    <img src="assets/images/event-03.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul>
                    <li>
                      <span class="category">Full Stack</span>
                      <h4>Web Programming</h4>
                    </li>
                    <li>
                      <span>Date:</span>
                      <h6>12 Mar 2036</h6>
                    </li>
                    <li>
                      <span>Duration:</span>
                      <h6>48 Hours</h6>
                    </li>
                    <li>
                      <span>Price:</span>
                      <h6>$440</h6>
                    </li>
                  </ul>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-us section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Feel free to contact us anytime</h2>
              <p>
                Thank you for choosing our website for registration of the
                event, we would be grateful if you provide us with your feedback
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-us-content">
              <form id="contact-form" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="name"
                        name="name"
                        id="name"
                        placeholder="Your Name..."
                        autocomplete="on"
                        required
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input
                        type="text"
                        name="email"
                        id="email"
                        pattern="[^ @]*@[^ @]*"
                        placeholder="Your E-mail..."
                        required=""
                      />
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea
                        name="message"
                        id="message"
                        placeholder="Your Message"
                      ></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button
                        type="submit"
                        id="form-submit"
                        class="orange-button"
                      >
                        Submit
                      </button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <style>
        .foot-panel-3 {
         
          color: white;
          border-top: 0.001px solid rgb(120, 120, 124);
          height: 70px;
          display: flex;
          justify-content: space-evenly;
          align-items: center;
        }
      </style>
      <div class="foot-panel-3">
        <div class="social-media">
          <p>Don't forget to follow us!</p>
        </div>
        <div class="twitter">
          <a href=""><img src="twitter_5969020.png" height="40" /></a>
        </div>
        <div class="lindin">
          <a href=""><img src="linkedin_4782336.png" height="40" /></a>
        </div>
        <div class="insta">
          <a href=""><img src="instagram_4138124.png" height="45" /></a>
        </div>
        <div class="facebook">
          <a href=""><img src="facebook_5968764.png" height="40" /></a>
        </div>
      </div>
      <div class="container">
        <div class="col-lg-12">
          <p>
            Copyright © 2024 Campus Event Navigator. All rights reserved.
            &nbsp;&nbsp;&nbsp;
          </p>
        </div>
      </div>
    </footer>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
