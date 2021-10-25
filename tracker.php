<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <title>COVID - 19</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/vendors/nice-selector/css/nice-select.css" />

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <div class="body_wrapper">

        <!--================Preloader Area =================-->
        <div class="preloader">
          <div class="three-bounce">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
        </div>
        <!--================End Preloader Area =================-->
        <!--================Mobile Canvus Menu Area =================-->
        <div class="mobile_canvus_menu">
            <div class="close_btn">
                <img src="assets/images/icon/close-dark.png" alt="">
            </div>
            <div class="menu_part_lux">
                <ul class="menu_list wd_scroll">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">
                        <a href="index.html">Prevention
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="symptom.html">Typical Symptoms</a></li>
                            <li><a href="symptom-checker.html">Symptom Checker</a></li>
                            <li><a href="prevention.html">Prevention</a></li>
                            <li><a href="virus-checker.html">Coronavirus Checker</a></li>
                            <li><a href="tracker.html">Tracker</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                        </ul>
                    </li>
                    <li><a href="appointment.html">Appointment</a></li>
                    <li>
                        <a href="#">Pages
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="about.html">About</a></li>
                            <li><a href="doctors.html">Doctors</a></li>
                            <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                            <li><a href="typography.html">Typhography</a></li>
                            <li><a href="search.html">Search</a></li>
                            <li><a href="search-nothing.html">Not Found</a></li>
                            <li><a href="comingsoon.html">Coming Soon</a></li>
                            <li><a href="404.html">Error</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html">Blog
                            <i class="linearicons-chevron-down"></i>
                        </a>
                        <ul class="list">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single-blog.html">Blog Details</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="menu_btm">
                <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
            </div>
        </div>
        <!--================End Mobile Canvus Menu Area =================-->
        <!--================Sidebar Form Area =================-->
        <div class="body_capture"></div>
        <section class="sidebar_widget scroll_body">
            <div class="info_sidebar_inner">
                <div class="close_btn">
                    <img src="assets/images/icon/close.png" alt="">
                </div>
                <ul class="nav info_social">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    </li>
                </ul>
                <div class="info_title">
                    <h2>Get in touch</h2>
                    <p>If you have any question before we start, please fill below the contact form.</p>
                </div>
                <form action="#" class="appoinment_form js-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_name" name="a_name" placeholder=""
                                    required />
                                <label><i class="linearicons-user"></i>Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="a_email" placeholder=""
                                    required />
                                <label><i class="linearicons-envelope-open"></i>Your Email
                                    Address</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="a_number" placeholder=""
                                    required />
                                <label><i class="linearicons-telephone"></i>Your Phone
                                    Number</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control"
                                    required></textarea>
                                <label><i class="linearicons-document"></i>Your Message</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="a_policy" name="check" />
                                    <label class="l_text" for="a_policy">I accept the <span>Privacy
                                            Policy</span></label>
                                </div>
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="success-message">
                        <i class="fa fa-check text-primary"></i> Thank you!. Your message
                        is successfully sent...
                    </div>
                    <div class="error-message">We're sorry, but something went wrong</div>
                </form>
                <div class="info_footer">
                    <p>© Copyright
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Epidemic Organisation Ltd.
                    </p>
                    <h6>
                        Designed with <i class="linearicons-heart"></i>
                        by <span>creakits</span>
                    </h6>
                </div>
            </div>
        </section>
        <!--================End Sidebar Form Area =================-->

        <!--================Header Area =================-->
        <header class="header_area">
            <ul class="nav menu_social flex-column">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                                srcset="assets/images/logo-2x.png 2x" alt="" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown submenu active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html"
                                        role="button" aria-haspopup="true" aria-expanded="false">Prevention </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Symptoms
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="symptom.html">Typical Symptoms</a></li>
                                                <li><a href="symptom-checker.html">Symptom Checker</a></li>
                                                <li><a href="prevention.html">Prevention</a></li>
                                                <li><a href="virus-checker.html">Coronavirus Checker</a></li>
                                                <li><a href="tracker.html">Tracker</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                        <li><a href="faq.html">FAQS</a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                                        <li><a href="typography.html">Typhography</a></li>
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="search.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Search
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="search.html">Search</a></li>
                                                <li><a href="search-nothing.html">Not Found</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="comingsoon.html">Coming Soon</a></li>
                                        <li><a href="404.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button"
                                        aria-haspopup="true" aria-expanded="false">Blog
                                    </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="right_burger">
                    <ul class="nav">
                        <li>
                            <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                                <img src="assets/images/icon/search.png" alt="" />
                            </div>
                        </li>
                        <li>
                            <div class="menu_btn">
                                <img src="assets/images/icon/burger.png" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->

        <!--================Corona Map Area =================-->
        <section class="coronavirus_map">
            <iframe class="map" src="https://coronavirus-92ebd.web.app/map?embed=true"
                allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen>
            </iframe>
        </section>
        <!--================End Corona Map Area =================-->

        <!--================Worldwide Tracker Area =================-->
        <section class="world_wide_tracker tracker_page pad_top">
            <div class="container">
                <img class="tracker_map" src="assets/images/tracker-map-bg.png" alt="" />
                <div class="tracker_text">
                    <h5>Worldwide Tracker</h5>
                    <h2>Confirmed Coronavirus Cases</h2>
                    <p>Last updated: April 08, 2020, 01:43 GMT</p>
                </div>
                <div class="row tracker_inner">
                    <div class="col-lg-3 col-6">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/icon/corona-red-1.png" alt="" />
                            </div>
                            <div class="media-body">
                                <h2 id="total_cases"></h2>
                                <p>Total Cases</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/icon/corona-black-1.png" alt="" />
                            </div>
                            <div class="media-body">
                                <h2 id="total_deaths"></h2>
                                <p>Total Deaths</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/icon/corona-green-1.png" alt="" />
                            </div>
                            <div class="media-body">
                                <h2 id="total_recovered"></h2>
                                <p>Recovered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/icon/corona-yellow-1.png" alt="" />
                            </div>
                            <div class="media-body">
                                <h2 id="new_cases"></h2>
                                <p>New Cases</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="confirm_boxes row" id="coronaCountryUpdate" data-country="bangladesh">
                    <div class="col-lg-2">
                        <div class="confirm_item">
                            <i class="linearicons-calendar-check"></i>
                            <h3 class="cuCountryTodayCases"></h3>
                            <p>Today</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="confirm_item">
                            <i class="linearicons-earth-lock"></i>
                            <h3 class="cuContries"></h3>
                            <p>Countries</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="confirm_item">
                            <i class="linearicons-clipboard-user"></i>
                            <h3 class="cuCountryTotal"></h3>
                            <p>Active Cases</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="confirm_item">
                            <i class="linearicons-tombstone"></i>
                            <h3 class="cuTotal"></h3>
                            <p>Worldwide Cases</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="confirm_item">
                            <i class="linearicons-return2"></i>
                            <h3 class="cuCountryRecovered"></h3>
                            <p>Recovered</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================End Worldwide Tracker Area =================-->

        <!--================Total Cases Area =================-->
        <section class="total_cases_chart">
            <div class="container">
                <div class="total_cases_inner">
                    <iframe style="width:100%" src="https://coronavirus.app/chart/evolution/infected?embed=true"
                        frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
                </div>
                <div class="total_cases_inner">
                    <iframe style="width:100%" src="https://coronavirus.app/chart/new/infected?embed=true"
                        frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        <!--================End Total Cases Area =================-->

        <!--================Data Table Area =================-->
        <section class="data_table_area">
            <div class="container">
                <div class="main_title text-center">
                    <h5>Tracking by countries</h5>
                    <h2>Coronavirus in numbers</h2>
                </div>
                <div class="all-country table-responsive">
                    <table id="world_table" class="table table-striped table-bordered dataTable no-footer" role="grid"
                        aria-describedby="world_table_info">
                        <thead>
                            <tr role="row">
                                <th>Serial</th>
                                <th>Flag</th>
                                <th>Country</th>
                                <th>Cases</th>
                                <th>New Cases</th>
                                <th>Deaths</th>
                                <th>New Deaths</th>
                                <th>Recovered
                                </th>
                                <th>Active</th>
                                <th>Critical</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </section>
        <!--================End Data Table Area =================-->

        <!--================App Area =================-->
        <section class="app_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="app_text">
                            <h2>Get <span>epidemic</span> app!</h2>
                            <p>
                                Download our app now, track Coronavirus cases real-time and
                                follow instant updates.
                            </p>
                            <a href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
                            <a href="#"><img src="assets/images/google-btn.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app_mobile">
                            <div class="mobile_image">
                                <img src="assets/images/mobile-1.png" alt="" />
                                <img src="assets/images/mobile-2.png" alt="" />
                            </div>
                            <ul class="corona_img nav">
                                <li>
                                    <img src="assets/images/icon/app-virus-1.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-2.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-3.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-4.png" alt="" />
                                </li>
                                <li data-parallax='{"y": 100}'>
                                    <img src="assets/images/icon/app-virus-5.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-6.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-7.png" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End App Area =================-->

        <!--================Subscribe Area =================-->
        <section class="subscribe_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-mailbox-full"></i>
                            </div>
                            <div class="media-body">
                                <h4>Subscribe our newsletter</h4>
                                <p>
                                    Join our subscribers list to get latest news and updates
                                    about COVID-19 delivered directly in your inbox.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mail_box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="linearicons-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            <label class="container-checkbox">I accept the <span>Privacy Policy.</span>
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Subscribe Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area pad_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="ct_wd_text">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-telephone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>emergency call</h5>
                                            <a href="tel:+8801676790690">
                                                <h4>+61 (8) 8234 3555</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>
                                                78-66 State Route 33,<br />
                                                Brighton VIC 3186, AUSTRALIA
                                            </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="fab fa-skype"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="skype:md.rocky79">
                                                <h6>Skype ID: <span>epidemic.org</span></h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-envelope-open"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="mailto:rockybd1995@gmail.com">
                                                <h6>Email: <span>hi@epidemic.org</span></h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <aside class="f_widget list_widget">
                                <div class="f_title">
                                    <h3>Prevention</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <aside class="f_widget list_widget">
                                <div class="f_title">
                                    <h3>Protection</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <aside class="f_widget about_widget">
                                <div class="f_title">
                                    <h3>About</h3>
                                </div>
                                <p>
                                    The disease was first identified in 2019 in Wuhan, the
                                    capital of Hubei, China, and has since spread globally,
                                    resulting in the 2019–2020 coronavirus pandemic.
                                </p>
                                <ul class="nav">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <img src="assets/images/f-logo.png" alt="">
                    <p>© Copyright
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Epidemic Organisation Ltd.</p>
                    <ul class="nav">
                        <li><a href="#">Term of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Impressum</a></li>
                    </ul>
                    <h6>
                        Designed with <i class="linearicons-heart"></i>
                        by <span>creakits</span>
                    </h6>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/images/icon/close-white.png" alt="">
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type here..."
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i
                                    class="linearicons-magnifier"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/vendors/corona-live/dashboard.js"></script>
    <script src="assets/vendors/corona-live/main.js"></script>
    <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/corona-live/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/corona-live/datatable.js"></script>
    <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendors/nice-selector/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>