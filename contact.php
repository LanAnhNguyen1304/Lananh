<?php 
    session_start();
   ?>
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
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-scroll-animation="true">
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
        
        <!--================End Mobile Canvus Menu Area =================-->
        <!--================Sidebar Form Area =================-->
        <div class="body_capture"></div>
        <section class="sidebar_widget scroll_body">
            <div class="info_sidebar_inner">
                <div class="close_btn">
                    <img src="assets/images/icon/close.png" alt="">
                </div>
                
                <div class="info_title">
                    <h2>Liên hệ</h2>
                    <p>Nếu bạn có bất kỳ câu hỏi nào trước khi chúng tôi bắt đầu, vui lòng điền vào bên dưới biểu mẫu liên hệ.</p>
                </div>
                <form method="post" action="add_contact.php" class="appoinment_form js-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" id="txtName" name="txtName" class="form-control"  placeholder="" />
                                <label><i class="linearicons-user"></i>Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" id="txtEmail" name="txtEmail" class="form-control"  placeholder="" />
                                <label><i class="linearicons-envelope-open"></i>Email
                                    </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="phone" id="txtPhone" name="txtPhone" class="form-control"  placeholder="" />
                                <label><i class="linearicons-telephone"></i>Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="txtMessage" id="txtMessage" cols="30" rows="10" class="form-control">
                                </textarea>
                                <label><i class="linearicons-document"></i>Tin nhắn của bạn</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">
                                    Gửi
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="success-message">
                        <i class="fa fa-check text-primary"></i> Cảm ơn bạn! Tin nhắn của bạn đã được gửi thành công
                    </div>
                    <div class="error-message">Chúng tôi xin lỗi, bạn đã nhập sai cú pháp</div>
                </form>
                <div class="footer_copyright">
                        <img src="assets/images/f-logo.png" alt="">
                        <p>© Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Epidemic Organisation Ltd.</p>
                        <ul class="nav">
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Dấu ấn</a></li>
                        </ul>
                        <h6>
                            Designed with <i class="linearicons-heart"></i>
                            by <span>nhóm HANL</span>
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
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html"
                                        role="button" aria-haspopup="true" aria-expanded="false">Phòng chống </a>
                                    <i class="fas fa-angle-down" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Các triệu chứng
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="symptom.html">Các triệu chứng thường gặp</a></li>
                                                <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
                                                <li><a href="prevention.html">Biện pháp phòng chống</a></li>
                                                <li><a href="virus-checker.html">Theo dõi tình hình</a></li>
                                               
                                            </ul>
                                        </li>
                                         <li><a href="faq.html">FAQS</a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.html">Tư vấn</a></li>
                                <li class="dropdown submenu">
                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false">Giới thiệu</a>
                                  <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                                  <ul class="dropdown-menu">
                                    <li><a href="about.php">Corona Virus</a></li>
                                    <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                                    <li><a href="sample-right-sidebar.php">Vaccien Phòng COVID-19 </a></li>
                                    <li ><a href="search.php">Tìm kiếm</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown submenu">
                                  <a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true"
                                    aria-expanded="false">Tin tức
                                  </a>
                                  <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                                  <ul class="dropdown-menu">
                                    <li><a href="blog.php">Tin tức</a></li>
                                    <li><a href="single-blog.php">Tin tức chi tiết</a></li>
                                  </ul>
                                </li>
                                <li class="active"><a href="contact.html">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="#">Kiếm tra triệu chứng</a>
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

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="container">
                <div class="breadcrumb_text">
                    
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">Liên hệ</h3>
                    <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================Contact Area =================-->
        <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">
                <div class="row">
                    <div class="col-md-12 mb-4">
                      <h2 class="h4">Thông tin liên hệ</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                      <p><span>Địa chỉ:</span> 36 Ngô Quyền, phường Hàng Bài,
                            </br> quận Hoàn Kiếm, Hà Nội</p>
                    </div>
                    <div class="col-md-12 mb-3">
                      <p><span>Số điện thoại:</span> <a href="tel://1234567920">024 3825 5599</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                      <p><span>Email:</span> <a href="mailto:laptrinhweb@gmail.com">trungtamyteHK@gmail.com</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                      <p><span>Website:</span> <a href="#">.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
              <div class="col-md-6 ftco-animate">
                <form method="post" action="add_appointment.php">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name= "txtName" class="form-control" placeholder="Tên của bạn">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name= "txtEmail" class="form-control" placeholder="Email">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name= "txtPhone" class="form-control" placeholder="Số điện thoại">
                      </div>
                      <div class="form-group">
                        <textarea name="txtMessage" id="" cols="30" rows="7" class="form-control" placeholder="Phản hồi"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Gửi phản hồi" class="btn btn-primary py-3 px-5">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
        <!--================End Contact Area =================-->

        <!--================Map Area =================-->
        <section class="map_area">
            <div class="col-lg-4">
             <div class="gg-fb">
                <div>
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2281567295654!2d105.85251131402812!3d21.023554993333946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abec902b9623%3A0xdfe9443e9ca77d59!2zVHJ1bmcgVMOibSBZIFThur8gUXXhuq1uIEhvw6BuIEtp4bq_bSAzNg!5e0!3m2!1svi!2s!4v1634628981628!5m2!1svi!2s" width="1360" height="365" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
        </section>
        <!--================End Map Area =================-->

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
                                 <h4>Đăng kí nhận tin tức</h4>
                <p>
                  Tham gia danh sách người nhận tin tức của chúng tôi để nhận thông tin diễn biến COVID-19 được gửi trong hộp thư</p>
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
                            <label class="container-checkbox">Tôi chấp nhận<span>Chính sách bảo mật.</span>
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
            <div class="col-lg-4">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                        <h4>024 3825 5599</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Địa chỉ</h5>
                      <p>36 Ngô Quyền, phường Hàng Bài,
                        </br> quận Hoàn Kiếm, Hà Nội
                      </p>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            
            <div class="col-lg-4 item-tk">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập</a>
                  </li>
                  
                </ul>
              </aside>
            </div>
            <div class="col-lg-4">
             <div class="gg-fb">
                <div>
                  <div class="fb-page page-fb" data-href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" data-tabs="timeline" data-width="270" data-height="152" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen">Trung Tâm Y Tế Quận Hoàn Kiếm:36 Ngô Quyền</a></blockquote></div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2281567295654!2d105.85251131402812!3d21.023554993333946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abec902b9623%3A0xdfe9443e9ca77d59!2zVHJ1bmcgVMOibSBZIFThur8gUXXhuq1uIEhvw6BuIEtp4bq_bSAzNg!5e0!3m2!1svi!2s!4v1634628981628!5m2!1svi!2s" width="270" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
                </div>
           
                   </div>
      </div>
      <div class="footer_copyright">
        <div class="container">
          <img src="assets/images/f-logo.png" alt="" />
          <p>
            © Copyright
            <script>
              document.write(new Date().getFullYear());
            </script>
            Epidemic Organisation Ltd.
          </p>
          <ul class="nav">
            <li><a href="#">Điều khoản sử dụng</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Dấu ấn</a></li>
          </ul>
          <h6>
            Designed<i class="linearicons-heart"></i> by
            <span>Nhóm HANL</span>
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
            <input type="text" class="form-control" placeholder="Nội dung tìm kiếm..." aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
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
  <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/slick/slick.min.js"></script>
  <script src="assets/vendors/datetimepicker/moment.js"></script>
  <script src="assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
  <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendors/animate-css/wow.min.js"></script>
  <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="XVpXxaji"></script>
  </body>

</html>